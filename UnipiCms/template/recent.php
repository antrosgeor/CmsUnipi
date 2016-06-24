<div class="sidebar-module">
  <h4>Recent News</h4>
  <ol class="list-unstyled">
  	<!-- Get Months  -->
  	<?php 

  	$q = "SELECT id,title  FROM news ORDER BY date  DESC LIMIT 5 ";
    $r = mysqli_query($dbc,$q);

    while($data = mysqli_fetch_assoc($r)){?>

    <li><a href="news?&id=<?php echo $data['id']; ?>"><?php print $data['title'] ?></a></li>

    <?php }?>

  
  </ol>
</div>

