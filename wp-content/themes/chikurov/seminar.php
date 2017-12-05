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
$seminar_start = get_field('seminar_start');
$date_formated_start = strtotime($seminar_start);
$seminar_start_d = date('d',$date_formated_start);
$seminar_start_m = date('m',$date_formated_start);
$seminar_start_y = date('Y',$date_formated_start);

$seminar_end = get_field('seminar_end');
$seminar_city = get_field('city');
echo '<div class="seminar_item col-md-12">';
echo '<div class="row">';
echo '<div class="seminar_time col-md-12">';
echo '<span class="fa fa-calendar"></span> ';
echo $seminar_start_d;
echo '.';
echo $seminar_start_m;
echo '.';
echo $seminar_start_y;
echo ' — ';
if($seminar_end){
 echo $seminar_end;
} else {
 echo $seminar_start;
}
echo ' <span class="fa fa-map-marker"></span>Город: ';
echo $seminar_city;
echo '<br>';
echo '</div>';
echo '<div class="seminar_title col-md-12">';
echo '<a target="_blank" href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
