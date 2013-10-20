<?php
	include_once "markdown.php";

	function h1_title() {
		global $title;
		if(isset($title)) {
			echo '<h1>' . $title . '</h1>';
		} else {
			echo "wwwww";
		}
	}

	function render_markdown($path) {
		$content = file_get_contents($path);
		echo Markdown($content);
	}