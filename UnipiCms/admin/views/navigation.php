<div class = "container">

  <h1>Navigation Manager</h1>  

  <div class="row">

    <div class="col-md-4">
      <ul id= "sort-nav" class="list-group">
        <?php 

        $q = "SELECT * FROM navigation ORDER BY position ASC";
        $r = mysqli_query($dbc,$q);

        while($list = mysqli_fetch_assoc($r)){?>

             <li id="list_<?php echo $list['id']; ?>" class="list-group-item">
                <a id="label_<?php echo $list['id']; ?>" data-toggle="collapse" data-target="#form_<?php echo $list['id']; ?>">
                    <?php echo $list['label']; ?> <i style="float:right;" class="fa fa-chevron-down"></i>
                </a>
                <div id="form_<?php echo $list['id']; ?>" class="collapse">

                  <form class="form-horizontal nav-form" action="index.php?page=navigation&id=<?php echo $list[id]; ?>" method="post" role = "form">
                        
                        <div class = "form-group">
                            <label class="col-sm-2 control-label" for="id">ID:</label>
                            <div class="col-sm-10">
                              <input class="form-control input-sm" type="text" name="id" id="id" placeholder="id-name" autocomplete="off" value="<?php echo $list['id']; ?>"> 
                            </div>
                            
                        </div>

                        <div class = "form-group">
                            <label class="col-sm-2 control-label" for="label">Label:</label>
                            <div class="col-sm-10">
                              <input class="form-control input-sm" type="text" name="label" id="label" placeholder="Label" autocomplete="off" value="<?php echo $list['label']; ?>">
                            </div>
                        </div>

                        <div class = "form-group">
                            <label class="col-sm-2 control-label" for="url">Url:</label>
                            <div class="col-sm-10">
                              <input class="form-control input-sm" type="text" name="url" id="url" placeholder="Url" value="<?php echo $list['url']; ?>">
                            </div>
                        </div>

                        <div class = "form-group">
                            <label class="col-sm-2 control-label" for="status">Status:</label>
                            <div class="col-sm-10">
                              <input class="form-control input-sm" type="text" name="status" id="status" placeholder="" value="<?php echo $list['status']; ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>

                        <input type="hidden" name="submited" value="1">

                        <input type="hidden" name="openedid" value="<?php echo $list['id']; ?>">
                  </form><!-- end of form -->    
                </div>            
             </li>
  
        <?php } ?>

      </ul> 
    </div>

    <div class="col-md-8">

          <?php if (isset($message)) {echo $message;} ?>

    </div><!-- end of col-md-3 -->
   
  </div><!-- end of row -->