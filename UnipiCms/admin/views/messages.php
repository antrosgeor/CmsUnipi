<div class = "container">
<h1>Messages</h1>  

<br>
<!--
  <div class="row">
  	
  <div class="col-md-12">
  
	    <div class="mail-option">
	
	      <div class="btn-group">
	        <a data-toggle="dropdown" href="#" class="btn mini all">
	            All
	            <i class="fa fa-angle-down "></i>
	        </a>
	        <ul class="dropdown-menu">
	            <li><a href="#"> None</a></li>
	            <li><a href="#"> Read</a></li>
	            <li><a href="#"> Unread</a></li>
	        </ul>
	      </div>
	
	      <div class="btn-group">
	          <a data-toggle="dropdown" href="#" class="btn mini blue">
	              More
	              <i class="fa fa-angle-down "></i>
	          </a>
	          <ul class="dropdown-menu">
	              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
	              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
	              <li class="divider"></li>
	              <li><a href = "#" id = "delete" ><i class="fa fa-trash-o"></i> Delete</a></li>
	          </ul>
	      </div>
	
	    </div>
	    
	      	
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
	
	  <div class="row">
	  	<div class="col-md-12">
	  
	    <div class="mail-option">
	
		  	<a class="list-group-item list-group-item-success"  href="?page=messages">  
		  	<?php 
				$sql = "SELECT * FROM messages WHERE marked = 'READ' ";
				$result=mysqli_query($dbc, $sql);
				$row = mysqli_num_rows($result);
				//echo "$row";
			 	?> Read Messages <span class="badge"> <?php echo "$row" ?> </span>
			 </a>
		  	<table class="table table-inbox table-hover">
		      <tbody>
		      <?php 
		        $q = "SELECT * FROM messages WHERE marked = 'read' ";
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
		</div>
		
		</div>
	   </div>

	</div>
	
	</div>

-->
<div class="row">

  <div class="col-md-12">
  
    <div class="mail-option">

      <div class="btn-group">
        <a data-toggle="dropdown" href="#" class="btn mini all">
            All
            <i class="fa fa-angle-down "></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#"> None</a></li>
            <li><a href="#"> Read</a></li>
            <li><a href="#"> Unread</a></li>
        </ul>
      </div>

      <div class="btn-group">
          <a data-toggle="dropdown" href="#" class="btn mini blue">
              More
              <i class="fa fa-angle-down "></i>
          </a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
              <li class="divider"></li>
              <li><a href = "#" id = "delete" ><i class="fa fa-trash-o"></i> Delete</a></li>
          </ul>
      </div>

    </div>

    <table class="table table-inbox table-hover">
    	  	<a class="list-group-item list-group-item-success"  href="?page=messages">  
  	<?php 
		$sql = "SELECT * FROM messages WHERE marked = 'UNREAD' ";
		$result=mysqli_query($dbc, $sql);
		$row = mysqli_num_rows($result);
		//echo "$row";
	 ?>  Unread Messages <span class="badge"> <?php echo "$row" ?> </span>
	 </a>
	 
      
      <tbody>

      <?php 

        $q = "SELECT * FROM messages ORDER BY date DESC ";
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