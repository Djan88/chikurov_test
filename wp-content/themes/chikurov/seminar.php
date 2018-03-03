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
if ($seminar_start_m == 01) {
  $seminar_start_m = ' января ';
} else if ($seminar_start_m == 02) {
  $seminar_start_m = ' февраля ';
} else if ($seminar_start_m == 03) {
  $seminar_start_m = ' марта ';
} else if ($seminar_start_m == 04) {
  $seminar_start_m = ' апреля ';
} else if ($seminar_start_m == 05) {
  $seminar_start_m = ' мая ';
} else if ($seminar_start_m == 06) {
  $seminar_start_m = ' июня ';
} else if ($seminar_start_m == 07) {
  $seminar_start_m = ' июля ';
} else if ($seminar_start_m == 08) {
  $seminar_start_m = ' августа ';
} else if ($seminar_start_m == 09) {
  $seminar_start_m = ' сентября ';
} else if ($seminar_start_m == 10) {
  $seminar_start_m = ' октября ';
} else if ($seminar_start_m == 11) {
  $seminar_start_m = ' ноября ';
} else if ($seminar_start_m == 12) {
  $seminar_start_m = ' декабря ';
}

$seminar_end = get_field('seminar_end');
$date_formated_end = strtotime($seminar_end);
$seminar_end_d = date('d',$date_formated_end);
$seminar_end_m = date('m',$date_formated_end);
$seminar_end_y = date('Y',$date_formated_end);
if ($seminar_end_m == 01) {
  $seminar_end_m = ' января ';
} else if ($seminar_end_m == 02) {
  $seminar_end_m = ' февраля ';
} else if ($seminar_end_m == 03) {
  $seminar_end_m = ' марта ';
} else if ($seminar_end_m == 04) {
  $seminar_end_m = ' апреля ';
} else if ($seminar_end_m == 05) {
  $seminar_end_m = ' мая ';
} else if ($seminar_end_m == 06) {
  $seminar_end_m = ' июня ';
} else if ($seminar_end_m == 07) {
  $seminar_end_m = ' июля ';
} else if ($seminar_end_m == 08) {
  $seminar_end_m = ' августа ';
} else if ($seminar_end_m == 09) {
  $seminar_end_m = ' сентября ';
} else if ($seminar_end_m == 10) {
  $seminar_end_m = ' октября ';
} else if ($seminar_end_m == 11) {
  $seminar_end_m = ' ноября ';
} else if ($seminar_end_m == 12) {
  $seminar_end_m = ' декабря ';
}
$seminar_city = get_field('city');
$seminar_autor = get_field('autor');
echo '<div class="seminar_item col-md-12"';
echo 'data-start="';
echo $seminar_start;
echo'">';
echo '<div class="row">';
echo '<div class="seminar_time col-md-12">';
echo '<div class="seminar_date">';
echo '<span class="fa fa-calendar"></span> ';
echo $seminar_start_d;
echo $seminar_start_m;
echo $seminar_start_y;
echo ' — ';
if($seminar_end){
 echo $seminar_end_d;
 echo $seminar_end_m;
 echo $seminar_end_y;
} else {
 echo $seminar_start_d;
 echo $seminar_start_m;
 echo $seminar_start_y;
}
echo '</div>';
echo '<div class="on_wide">';
echo ' | ';
echo '</div>';
echo '<div class="seminar_date">';
echo ' <span class="fa fa-map-marker"></span>Город: ';
echo $seminar_city;
echo ' | ';
echo ' <span class="fa fa-user"></span>Читает: ';
echo $seminar_autor;
echo '</div>';
echo '<br>';
echo '<div class="seminar_title col-md-12">';
echo '<a target="_blank" href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
