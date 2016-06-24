<div id="console-debug">

	<?php $all_vars = get_defined_vars() ?>
    
    <h1>GET</h1>
    <pre>
    	<?php print_r($_GET);?>
    </pre>

    <h1>POST</h1>
    <pre>
    	<?php print_r($_POST);?>
    </pre>

    <h1>Page Array</h1>
    <pre>
    	<?php print_r($page);?>
    </pre>

    <h1>Path Array</h1>
    <pre>
        <?php print_r($path);?>
    </pre>

    <h1>View Array</h1>
    <pre>
        <?php print_r($view);?>
    </pre>

    <h1>Nav Array</h1>
    <pre>
        <?php print_r($nav);?>
    </pre>

    <h1>Settings</h1>
    <pre>
        <?php echo "Debug status = ".$debug."<br>";?>
        <?php echo "Parallax status = ".$parallax."<br>";?>
        <?php echo "Site Title = ".$site_title."<br>";?>
        <?php echo "Posts Per Page = ".$posts_per_page."<br>";?>
    </pre>

    
</div>