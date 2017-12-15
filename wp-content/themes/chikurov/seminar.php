<?php
/**
 * Template part for displaying seminars
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php

echo '<a target="_blank" href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a>';
?>
