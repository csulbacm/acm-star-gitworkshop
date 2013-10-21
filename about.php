<?php
    // Variable Title
    $title = "About";
?>
<?php include("inc/top.php"); ?>

<div class="grid_12">
    <h2 style="font-size:45px;text-align:center">
        About the Workshop
    </h2>
</div>

<div class="grid_12">
    <?php render_markdown(dirname(__FILE__) . '/workshop-copy/about.md'); ?>  
</div>

<div class="grid_12">
    <h2 style="font-size:45px;text-align:center">
        Brought to you by
    </h2>
</div>


<div class="grid_6">
    <?php render_markdown(dirname(__FILE__) . '/workshop-copy/julia.md'); ?>  
</div>

<div class="grid_6">
    <?php render_markdown(dirname(__FILE__) . '/workshop-copy/david.md'); ?>  
</div>

<div class="clear"> </div>

<div class="grid_6">
    <?php render_markdown(dirname(__FILE__) . '/workshop-copy/steven.md'); ?>  
</div>

<?php include("inc/bottom.php"); ?>
