<?php
    // Variable Title
    $title = "Quickstart";
?>
<?php include("inc/top.php"); ?>

<div class="quick-guide">
	<div class="grid_12">
		<h1>Quick-Start Guide</h1>
		<h2>Here's what you need to get started!</h2>
	</div>

	<div class="grid_12">
		<h3>1. Sign up for GitHub</h3>
	</div>
    <div class="grid_12 download">
        <a href="http://www.github.com" target="_blank">
            Github.com
        </a>
    </div>
	

	<div class="grid_12">
		<h3>2. Download Git</h3>
	</div>

    <div class="grid_6 download">
        <a href="http://windows.github.com/" target="_blank">
            Download for Windows
        </a>
    </div>

    <div class="grid_6 download">
        <a href="http://mac.github.com/" target="_blank">
            Download for Mac
        </a>
    </div>


    <div class="grid_12 download">
        <a href="http://eclipse.github.com/" style="color:#333;padding:2px;font-size:15px;background:none;"
             target="_blank">
            There's also an Eclipse plugin.
        </a>

    <div class="grid_12">
        <h3>3. Make your first Repo</h3>
        <ol>
            <li>Go to the GitHub GUI Client application and click the "+add" button on the top (this is on Windows.. If you're on Mac, just find the add repository button somewhere).</li>
            <li>Fill out the repository information. Think of this like you're making a new folder. Make sure to push the repository onto github so it's uploaded onto github's servers.</li>
            <li>Make sure you remember where you are saving the repositories on your local machine. This is where you will put your files to upload eventually.</li>
            <li>You should see the new repository under "local repository"</li>
            
        </ol>
    </div>

    <div class="grid_12">
        <h3>4. Your first commit</h3>
        <ol>
            <li>Download the html file on davidnuon.com/git/demo</li>
            <li>Put the html file that you downloaded into the local repository located wherever you created your repository at (it's usually defaulted to be in your Documents/GitHub folder).</li>
            <li>Go back to GitHub Client Application and double click your repository. It should say "Uncommitted Changes." </li>
            <li>Describe your commit and click commit.</li>

        </ol>
    </div>
</div>
    
<?php include("inc/bottom.php"); ?>
