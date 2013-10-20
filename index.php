<?php
    // Variable Title
    $title = "Home";
?>
<?php include("inc/top.php"); ?>


<div class="grid_6">
	<br />
	<br />
	<img src="img/octocat.png" alt="Super Octocat" />
</div>

<div class="grid_6">
        <?php render_markdown(dirname(__FILE__) . "/workshop-copy/index.md"); ?>	
</div>
<?php include("inc/bottom.php"); ?>
