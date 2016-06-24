<div class="container">

  <!-- news header -->
  <div class="blog-header">
    <h1 class="blog-title"><?php echo $page['header'] ?></h1>
  </div>

  <div class="row">
    <div class="col-sm-8 blog-main">
      
      <?php 

        if (isset($_GET["month"])){
            $q = "SELECT COUNT(id) FROM news WHERE Month(`date`)='$_GET[month]'"; 
        }else{
            $q = "SELECT COUNT(id) FROM news"; 
        };

        $r = mysqli_query($dbc,$q);
        $row = mysqli_fetch_row($r); 
        $total_records = $row[0];
        $total_pages = ceil($total_records / $posts_per_page);

        if (isset($_GET["page"])) {
           $page_num  = $_GET["page"];
           if ($page_num > $total_pages) {
              $page_num = $total_pages;
           }elseif ($page_num < 1) {
              $page_num=1;
           }; 
        } 
        else {
           $page_num=1; 
        }; 

        $start_from = ($page_num-1) * $posts_per_page; 

        if (isset($_GET['id'])) {
            //$q = "SELECT * FROM news WHERE id = $_GET[id] ";
            $q = "SELECT id, title, DATE_FORMAT(date,'%M, %D, %Y') as date_formated ,author, body FROM news WHERE id = $_GET[id] ";
            $r = mysqli_query($dbc,$q);
        }else{
            if (isset($_GET['month'])){
                $q = "SELECT id, title, DATE_FORMAT(date,'%M, %D, %Y') as date_formated, date, author, body FROM news WHERE Month(`date`)='$_GET[month]' ORDER BY date  DESC LIMIT $start_from,$posts_per_page";
                $r = mysqli_query($dbc,$q);
            }else{

                $q = "SELECT id, title ,DATE_FORMAT(date,'%M, %D, %Y') as date_formated, date, author, body FROM news  ORDER BY date  DESC LIMIT $start_from,$posts_per_page ";
                $r = mysqli_query($dbc,$q);             
            }
        }


      while($data = mysqli_fetch_assoc($r)) { ?>

        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $data['title']; ?></h2>
          <p class="blog-post-meta"><?php echo $data['date_formated']; ?> by <a href="#"><?php echo data_user($dbc,$data['author']); ?></a></p>
          <p>

            <?php 

              if (isset($_GET['id'])) {
                 echo substr($data['body'], 0); 
                }else{
                 echo substr($data['body'], 0,300)."...";  
                }

            ?>
                
          </p>

          <?php 
              if (isset($_GET['id'])) {
          ?>
                <a href="news"type="button" class="btn btn-info btn-sm">Back</a>

          <?php    
              }else{ 
          ?>
                <a href="news?&id=<?php echo $data['id']; ?>"type="button" class="btn btn-info btn-sm">Read More</a>

          <?php } ?>

        </div><!-- /.blog-post -->

      <?php } ?>


      <!-- Pagination -->
      <?php 

      if (!isset($_GET['id'])&$total_pages>1) { ?>

        
        <ul class="pagination">

          
          <?php 

            if (isset($_GET['month'])) {
              $href = "news?month=".$_GET['month']."&page=";
            }else{
              $href = "news?&page=";
            };

            if ($page_num > 1){
                 echo '<li><a href="'.$href.''.($page_num-1).'">&laquo;</a></li>';
          }?> 
          
          <?php 
            for ($i=1; $i<=$total_pages; $i++) { ?>

                <li id="<?php echo $i;?>" <?php if($i==$page_num){ echo "class='active'"; } ?>><a href='<?php echo $href.$i; ?>'><?php echo $i; ?></a> </li>
          
            <?php }; ?>

            <?php 
              if ($page_num < $total_pages) {
                  echo '<li><a href="'.$href.''.($page_num+1).'">&raquo;</a></li>';
              }
            ?>

        </ul>

      <?php } ?>
      <!-- Pagination End -->


    </div><!-- /.blog-main -->
  
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

        <div class="sidebar-module sidebar-module-inset">
          <h4>About</h4>
          <p><?php echo $page['body_formated']?></p>
        </div>
        

        <?php include("template/recent.php") ?>
        <?php include("template/archive.php") ?>


    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->

<script>

//on document ready scroll to specific element
jQuery(document).ready(function($) {

  //function to get url parameters
  $.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
  }

  //get value GET[id]
  var get = $.urlParam('id');

  //if GET[id]!= null then scroll page to blog-header
  if (get!= null) {
    $(document).scrollTop( $(".blog-post").offset().top );  
  }; 

})

</script>