<?php
function child_scripts() {
	wp_enqueue_style('child-google-fonts', '//fonts.googleapis.com/css2?family=Alice&family=David+Libre&family=Proza+Libre&display=swap');
}
add_action('wp_enqueue_scripts', 'child_scripts');
?>
