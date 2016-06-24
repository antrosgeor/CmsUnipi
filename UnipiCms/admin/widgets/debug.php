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

    <!-- <h1>Page Array</h1>
    <pre>
    	<?php print_r($page);?>
    </pre> -->

    <h1>Page id</h1>
    <pre>
        <?php print_r($pageid);?>
    </pre>

    <h1>Session</h1>
    <pre>
        <?php print_r($_SESSION);?>
    </pre>

    <h1>Opened</h1>
    <pre>
        <?php print_r($opened);?>
    </pre>

    <h1>list</h1>
    <pre>
        <?php print_r($list);?>
    </pre>

    <h1>data</h1>
    <pre>
        <?php print_r($data);?>
    </pre>

    <h1>file name</h1>
    <pre>
        <?php print_r($name);?>
    </pre>

    <h1>files</h1>
    <pre>
        <?php print_r($_FILES);?>
    </pre>
    
    <h1>switch</h1>
    <pre>
        <?php print_r($switch);?>
    </pre>

</div>