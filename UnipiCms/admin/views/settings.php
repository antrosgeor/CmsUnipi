<div class = "container">

  <h1>Settings Manager</h1>  

  <div class="row">

    <div class="col-md-12">

          <?php if (isset($message)) {echo $message;} ?>

          <?php 
            $q = "SELECT * FROM settings ORDER BY id ASC";
            $r = mysqli_query($dbc,$q);

            while($opened = mysqli_fetch_assoc($r)){?>

              <form class="form-inline" action="index.php?page=settings&id=<?php echo $opened[id]; ?>" method="post" role = "form">
                    
                    <div class = "form-group">
                        <label class=" sr-only" for="id">ID:</label>
                        <input class="form-control" type="text" name="id" id="id" placeholder="id-name" autocomplete="off" value="<?php echo $opened['id']; ?>">
                    </div>

                    <div class = "form-group">
                        <label class=" sr-only" for="label">Label:</label>
                        <input class="form-control" type="text" name="label" id="label" placeholder="Label" autocomplete="off" value="<?php echo $opened['label']; ?>">
                    </div>
                    
                    <div class = "form-group">
                      <label class=" sr-only" for="value">Value:</label>
                      <input class="form-control" type="text" name="value" id="value" placeholder="Value" value="<?php echo $opened['value']; ?>">
                    </div>
  
                    <button type="submit" class="btn btn-success">Save</button>
                    <br>
                    <br>

                    <input type="hidden" name="submited" value="1">

                    <input type="hidden" name="openedid" value="<?php echo $opened['id']; ?>">

              </form><!-- end of form -->     

          <?php } ?>

    </div><!-- end of col-md-3 -->
   
  </div><!-- end of row -->