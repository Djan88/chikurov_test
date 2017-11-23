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
echo '<div class="wrap">';
echo '<div class="title">';
echo the_title();
echo '</div>';
echo '<div class="content">';
echo the_content('(Читать дальше...)');
echo '</div>';
echo '</div>';
?>