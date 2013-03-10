<?php
    // Variable Title
    $title = "Home";
?>
<?php include("inc/top.php"); ?>

<div class="grid_12">
        <?php render_markdown(dirname(__FILE__) . "/workshop-copy/index.md"); ?>
</div>

<?php include("inc/bottom.php"); ?>
