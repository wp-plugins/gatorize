<?php
/*
Plugin Name: Gatorize
Plugin URI: http://www.gudlyf.com/index.php?p=696
Description: Adds <a href="http://www.newsgator.com">Newsgator</a> ratings to each post heading.
Version: 1.0.1
Author: Keith McDuffee
Author URI: http://www.gudlyf.com/
*/


function gatorize($original) {

	global $pagenow;

	/* Print original text first */
	print $original;

	/* Change this formating however you want */
	print '&nbsp;';
	print '<font style="border-left: 1px solid #333">';
	print '&nbsp;';

	/* No need to show this text if in the edit.php list */
	if ($pagenow != 'edit.php')
		print '<a href="http://www.newsgator.com">Rate</a>: ';
	
       	print '<script type="text/javascript" src="http://www.newsgator.com/ngs/ratings.aspx?rurl=' . get_permalink() . '"></script>';

	print '</font>';
}

/* See http://wiki.wordpress.org/Plugin/API for ideas of where else you can
   have the ratings appear if you don't want to place it after the time */
add_filter('the_time', 'gatorize');

?>
