<?php
    // Variable Title
    $title = "Guide";
?>
<?php include("inc/top.php"); ?>

<div class="grid_12 image-heavy">
    <br>
	
	<?php render_markdown(dirname(__FILE__) . '/workshop-copy/the_guide_to_git_.md'); ?>
	<?php render_markdown(dirname(__FILE__) . '/workshop-copy/what_the_heck_is_source_control.md'); ?>
	<?php render_markdown(dirname(__FILE__) . '/workshop-copy/getting_started.md'); ?>
	<?php render_markdown(dirname(__FILE__) . '/workshop-copy/collaboration.md'); ?>

</div>
    
<?php include("inc/bottom.php"); ?>
