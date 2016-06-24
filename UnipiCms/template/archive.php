<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">
  	<!-- Get Months  -->
  	<?php 

  	$q = "SELECT DATE_FORMAT(date,'%M') as month, Month(`date`) as month_num, Year(`date`) as year, date  FROM news GROUP BY  Month(`date`) ORDER BY date  DESC ";
    $r = mysqli_query($dbc,$q);

    while($data = mysqli_fetch_assoc($r)){?>

    <li><a href="news?month=<?php echo $data['month_num']; ?>&page=1"><?php print $data['month'].", ".$data['year'] ; ?></a></li>

    <?php }?>

  
  </ol>
</div>

