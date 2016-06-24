<?php if(isset($opened['id'])) { ?>
  <script>

    $(document).ready(function() {
        
      Dropzone.autoDiscover = false;
      var myDropzone = new Dropzone("#avatar-dropzone");

      myDropzone.on("success", function(file){
        $("#avatar").load("ajax/avatar.php?id=<?php echo $opened['id']; ?>");
      });

    });

  </script>
<?php } ?>

<div class = "container">

  <h1>Users Manager</h1>  

  <div class="row">

    <div class="col-md-4">
        <div class="list-group">

          <a class="list-group-item" href="?page=users"><i class="fa fa-plus"></i> New User</a>

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
                    <a href="#" id = "del_<?php echo $list['id']; ?>" class="btn btn-danger btn-delete-user"><i class="fa fa-trash-o"></i></a>
                    <a href="index.php?page=users&id=<?php echo $list['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                  </span>
                </h4>
                <!--<p class="list-group-item-text"><?php //echo $blurb; ?></p> --> 
             </div><!-- end of list-group-item -->

          <?php } ?>

        </div><!-- end of list-group -->

    </div><!-- end of col-md-3 -->

    <div class="col-md-8">
       
      <?php if (isset($message)) {echo $message;} ?>
        
      <form action="index.php?page=users&id=<?php echo $opened['id']; ?>" method="post" role = "form" onSubmit="return validate_form_users();">
          
          <div id = "avatar">
          <?php 

            if ($opened['avatar'] != "") { ?>
              
                <div class="avatar-container" style="background-image: url('../uploads/<?php echo $opened['avatar']; ?>')"></div>

          <?php } ?>
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="first">First Name:</label>
              <input class="form-control" type="text" name="first" id="first" placeholder="First Name" value="<?php echo $opened['first']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="last">Last Name:</label>
              <input class="form-control" type="text" name="last" id="last" placeholder="Last Name" value="<?php echo $opened['last']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="email">Email Adress:</label>
              <input class="form-control" type="text" name="email" id="email" placeholder="Email Adress" value="<?php echo $opened['email']; ?>">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="status">Status:</label>
              <select class="form-control" name="status" id="status">
                <option value = "0" <?php if (isset($_GET['id'])) {selected('0',$opened['status'],'selected');}?> >Inactive</option>
                <option value = "1" <?php if (isset($_GET['id'])) {selected('1',$opened['status'],'selected');}?> >Active</option>
              </select>
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success"  for="password">Password:</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" value="">
          </div>

          <div class = "form-group">
              <label class="list-group-item list-group-item-success" for="passwordv">Verify Password:</label>
              <input class="form-control" type="password" name="passwordv" id="passwordv" placeholder="Password again" value="">
          </div>

          <button type="submit" class="btn btn-success">Save</button>

          <input type="hidden" name="submited" value="1">

          <?php if(isset($opened['id'])) { ?>
              <input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
          <?php } ?>

      </form><!-- end of form -->

      <?php if(isset($opened['id'])) { ?>
          <form action="uploads.php?id=<?php echo $opened['id']; ?>" class="dropzone" id="avatar-dropzone">
              <input type="file" name="file">  
          </form>
        
      <?php } ?>

    </div><!-- end of col-md-9 -->
   
  </div><!-- end of row -->