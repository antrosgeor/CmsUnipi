<div class = "container">

  <h1>News Manager</h1>  

  <div class="row">

    <div class="col-md-6">
        <div class="list-group">

          <a class="list-group-item" href="?page=news"><i class="fa fa-plus"></i> New Post</a>

          <?php 
            $q = "SELECT * FROM news ORDER BY date  DESC ";
            $r = mysqli_query($dbc,$q);

            while($list = mysqli_fetch_assoc($r)){ 
              //$blurb = substr($list['body'], 0,20);
          ?>

              <div id="news_<?php echo $list['id']; ?>" style=" overflow: auto;" class="list-group-item <?php selected($list['id'],$opened['id'],'active') ?>">

                  <h4 class="list-group-item-heading"><?php echo $list['title']; ?>
                    <span class= "pull-right">
                      <a href="#" id = "del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete-post"><i class="fa fa-trash-o"></i></a>
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

    <div class="col-md-6">
       
      <?php if (isset($message)) {echo $message;} ?>
        
      <form action="index.php?page=news&id=<?php echo $opened['id']; ?>" method="post" role = "form" onSubmit="return validate_form_news();">
          

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="title">Title:</label>
              <input class="form-control" type="text" name="title" id="title" placeholder="title" value="<?php echo $opened['title']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="date">Date:</label>
              <input class="form-control" type="text" name="date" id="date" placeholder="Date"  value="<?php 
              if (isset($opened['date'])) {
                echo $opened['date'];
              }else{
                echo get_date();
              }
              
              ?>" autocomplete="off" disabled>
          </div>


          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="author">Author:</label>
              <select class="form-control" name="user" id="user">
                <option value = "0" >No user</option>
                <?php 
                  $q = "SELECT id FROM users ORDER BY first ASC";
                  $r = mysqli_query($dbc,$q);
                  while ($user_list = mysqli_fetch_assoc($r)) { 

                      $user_data = data_user($dbc,$user_list['id']);  
                ?>
                   
                    <option value = "<?php echo $user_data['id'];?>"
                      <?php 
                          if (isset($_GET['id'])) {
                            selected($user_data['id'],$opened['author'],'selected');
                          } else {
                            selected($user_data['id'],$opened['author'],'selected');
                          }
                       ?>><?php echo $user_data['fullname']; ?>
                    </option>


                <?php } ?>
              </select>
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="body">Body:</label>
              <textarea class="form-control editor" name="body" id="body" rows="8" placeholder="body"> <?php echo $opened['body']; ?> </textarea>
          </div>

          <button type="submit" class="btn btn-success">Save</button>

          <input type="hidden" name="submited" value="1">

          <?php if(isset($opened['id'])) { ?>
              <input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
          <?php } ?>

      </form><!-- end of form -->

    </div><!-- end of col-md-9 -->
   
  </div><!-- end of row -->