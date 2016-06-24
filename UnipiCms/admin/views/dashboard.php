<div class = "container">
<h1>Dashboard</h1>  
<br>
  <div class="row">
  	<div class="col-md-12">
    	<a class="list-group-item list-group-item-success"  href="?page=messages">  
    	<?php 
  		$sql = "SELECT * FROM messages WHERE marked = 'UNREAD' ";
  		$result=mysqli_query($dbc, $sql);
  		$row = mysqli_num_rows($result);
  		//echo "$row";
  	 ?>  Unread Messages <span class="badge"> <?php echo "$row" ?> </span>
  	 </a>
  	 
    	 <table class="table table-inbox table-hover">
        
        <tbody>

        <?php 

          $q = "SELECT * FROM messages WHERE marked = 'unread' ";
          $r = mysqli_query($dbc,$q);

          while($list = mysqli_fetch_assoc($r)){ 

        ?> 
              <tr id ="row_<?php echo $list['id']; ?>" style="cursor: pointer" class = "<?php echo $list['marked']; ?>">
                  <td class="">
                      <input type="checkbox" class="mail-checkbox" value ="<?php echo $list['id']; ?>">
                  </td>
                  <td class='clickable-row' data-href='?page=view_message&id=<?php echo $list['id']; ?>' class=""><?php echo $list['name'] ?></td>
                  <td class='clickable-row' ><?php echo substr($list['message'], 0,100); ?>...</td>
                  <td class="clickable-row text-right" style="font-weight: normal;"><?php echo $list['date']; ?></td>
              </tr>

        <?php } ?>
        
        </tbody>

      </table>
  <br>
  <br>
  <br>
  </div>
     <div class="col-md-8">
        <div class="list-group">

          <a class="list-group-item list-group-item-success"  href="?page=news"> News</a>

          <?php 
            $q = "SELECT * FROM news ORDER BY date  DESC ";
            $r = mysqli_query($dbc,$q);

            while($list = mysqli_fetch_assoc($r)){ 
              //$blurb = substr($list['body'], 0,20);
          ?>

              <div id="news_<?php echo $list['id']; ?>" style=" overflow: auto;" class="list-group-item <?php selected($list['id'],$opened['id'],'active') ?>">

                  <h4 class="list-group-item-heading"><?php echo $list['title']; ?>
                    <span class= "pull-right">
                      <a href="index.php?page=news&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                    </span>
                  </h4>
                  <!--<p class="list-group-item-text"><?php //echo $blurb; ?></p> -->
                  <p class="blog-post-meta"><?php echo $list['date']; ?> by 
                    <a href="#">
                      <?php

                      $data = data_user($dbc,$list['author']);
                      echo $data['fullname_reverse'];

                      ?>
                    </a>
                  </p>
                  <p><?php echo substr($list['body'], 0,100); ?></p>

              </div><!-- end of list-group-item -->

          <?php } ?>

        </div><!-- end of list-group -->

    </div><!-- end of col-md-3 -->


 <div class="col-md-4">
        <div class="list-group">

          <a class="list-group-item list-group-item-success" href="?page=pages"> Pages </a>

          <?php 
            $q = "SELECT * FROM pages ORDER BY title ASC";
            $r = mysqli_query($dbc,$q);

            while($list = mysqli_fetch_assoc($r)){ 

              $blurb = substr($list['body'], 0,100);
          ?>
              <div id="page_<?php echo $list['id']; ?>" class="list-group-item <?php selected($list['id'],$opened['id'],'active') ?>" style=" overflow: auto;">
                    <h4 class="list-group-item-heading"><?php echo $list['title']; ?>
                    <span class= "pull-right">
                     <a href="index.php?page=pages&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                    </span>
                    </h4>
                    <p class="list-group-item-text"><?php echo $blurb; ?></p>
              </div><!-- end of list-group-item -->

          <?php } ?>

        </div><!-- end of list-group -->
    </div><!-- end of col-md-3 -->
    
    
    
 
    
   <br>
   <br>
   
     <div class="col-md-4">
        <div class="list-group">

          <a class="list-group-item list-group-item-success" href="?page=users"> User</a>

          <?php 
            $q = "SELECT * FROM users ORDER BY last ASC";
            $r = mysqli_query($dbc,$q);

            while($list = mysqli_fetch_assoc($r)){ 
              $list = data_user($dbc,$list['id']);
              //$blurb = substr($list['body'], 0,20);
          ?>
            <div id="user_<?php echo $list['id']; ?>" style=" overflow: auto;" class="list-group-item <?php selected($list['id'],$opened['id'],'active') ?>">
                <h4 class="list-group-item-heading"><?php echo $list['fullname_reverse']; ?>
                  <span class= "pull-right">
                    <a href="index.php?page=users&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                  </span>
                </h4>
                <!--<p class="list-group-item-text"><?php //echo $blurb; ?></p> --> 
             </div><!-- end of list-group-item -->

          <?php } ?>

        </div><!-- end of list-group -->

    </div><!-- end of col-md-3 -->
    
    </div>
    </div>


<script>

 $(document).ready(function() {

    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
    
    $("#delete").click(function() {
        allVals = checkboxes();
        allVals.forEach(function(item) {
            $( "#row_"+item ).remove();
            $.get("ajax/messages.php?id="+item)
        });
    });

    function checkboxes() {  
         var allVals = [];
         $('.table-inbox :checked').each(function() {
           allVals.push($(this).val());
         });
         return allVals;
    }
});

</script>