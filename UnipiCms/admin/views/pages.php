<div class = "container">

  <h1>Admin Dashboard</h1>  

  <div class="row">

    <div class="col-md-4">
        <div class="list-group">

          <a class="list-group-item" href="?page=pages"><i class="fa fa-plus"></i> New Page</a>

          <?php 
            $q = "SELECT * FROM pages ORDER BY title ASC";
            $r = mysqli_query($dbc,$q);

            while($list = mysqli_fetch_assoc($r)){ 

              $blurb = substr($list['body'], 0,100);
          ?>
              <div id="page_<?php echo $list['id']; ?>" class="list-group-item <?php selected($list['id'],$opened['id'],'active') ?>" style=" overflow: auto;">
                    <h4 class="list-group-item-heading"><?php echo $list['title']; ?>
                    <span class= "pull-right">
                      <a href="#" id = "del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></a>
                      <a href="index.php?page=pages&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                    </span>
                    </h4>
                    <p class="list-group-item-text"><?php echo $blurb; ?></p>
              </div><!-- end of list-group-item -->

          <?php } ?>

        </div><!-- end of list-group -->
    </div><!-- end of col-md-3 -->

    <div class="col-md-8">
       
      <?php if (isset($message)) {echo $message;} ?>
        
      <form accept-charset="utf-8" action="index.php?page=pages&id=<?php echo $opened[id]; ?>" method="post" role = "form" onSubmit="return validate_form_pages();">
       <!--    
         <div class="row">
		  <div class="col-lg-6">
		    <div class="input-group">
		      <span class="input-group-addon">
		        <input type="radio" name="lang" id="lang" value="0" <?php if (isset($_GET['value'])) {selected('0',$opened['lang'],'selected');}?> placeholder="lang" checked >
		      </span>
		       <label class="list-group-item list-group-item-success" for="lang" >English</label>
		    </div>
		  </div>
		  <div class="col-lg-6">
		    <div class="input-group">
		      <span class="input-group-addon">
		        <input type="radio" name="lang" id="lang" value="1" placeholder="lang" <?php if (isset($_GET['value'])) {selected('1',$opened['lang'],'selected');}?> >
		      </span>
		       <label class="list-group-item list-group-item-success" for="lang" >Ελληνκά</label>
		    </div>
		  </div>
		</div>
		<br>
     -->
          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="title" >Title:</label>
              <input class="form-control" type="text" name="title" id="title" placeholder="Page Title" value="<?php echo $opened['title']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="user">User:</label>
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
                            selected($user_data['id'],$opened['user'],'selected');
                          } else {
                            selected($user_data['id'],$opened['id'],'selected');
                          }
                       ?>><?php echo $user_data['fullname']; ?>
                    </option>


                <?php } ?>
              </select>
          </div>

          <div class = "form-group" >
              <label class="list-group-item list-group-item-success" for="slug">Slug:</label>
              <input class="form-control" type="text" name="slug" id="slug" placeholder="Page Slug" value="<?php echo $opened['slug']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="label">Label:</label>
              <input class="form-control" type="text" name="label" id="label" placeholder="Page Label" value="<?php echo $opened['label']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="header">Header:</label>
              <input class="form-control" type="text" name="header" id="header" placeholder="Page Header" value="<?php echo $opened['header']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="type">Type:</label>
              <input class="form-control" type="type" name="type" id="type" placeholder="Type" value="<?php echo $opened['type']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="body">Body:</label>
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

</div>