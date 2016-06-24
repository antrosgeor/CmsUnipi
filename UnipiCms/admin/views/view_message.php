<div class = "container">

<h1>View Message</h1>  

<div class="row">

  <div class="col-md-9">

      <?php 

        $q = "SELECT * FROM messages WHERE id ='$_GET[id]'";	
        $r = mysqli_query($dbc,$q);

        while($list = mysqli_fetch_assoc($r)){ 

        	if ($list['marked']=="unread") {
                $q2 = "UPDATE messages SET marked = 'read' WHERE id ='$_GET[id]'";
                $r2 = mysqli_query($dbc,$q2);
         	};

      ?> 

            <div class="mail-sender">

                <div class="row">

                    <div class="col-md-8">
                        <strong><?php echo $list['name'] ?></strong>
                        <span>(<?php echo $list['email'] ?>)</span>
                        to
                        <strong>me</strong>
                    </div>

                    <div class="col-md-4">
                        <p class="date"> <?php echo $list['date'] ?></p>
                    </div>
                    
                </div>

            </div>

            <div class="view-mail">
                <p><?php echo $list['message'] ?></p> 
            </div>
            
            <div class="compose-btn pull-left">
                <a href="http://blacktie.co/demo/premium/dashio/dashboard/mail_compose.html" class="btn btn-sm"><i class="fa fa-reply"></i> Reply</a>
            </div>

      <?php } ?>

  </div><!-- end of col-md-3 -->
 
</div><!-- end of row -->
