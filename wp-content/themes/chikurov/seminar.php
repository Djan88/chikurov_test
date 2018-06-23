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
$seminar_start_m = $seminar_start_months = date('m',$date_formated_start);
$seminar_start_y = date('Y',$date_formated_start);
if ($seminar_start_m == 1) {
  $seminar_start_m = ' января ';
} else if ($seminar_start_m == 2) {
  $seminar_start_m = ' февраля ';
} else if ($seminar_start_m == 3) {
  $seminar_start_m = ' марта ';
} else if ($seminar_start_m == 4) {
  $seminar_start_m = ' апреля ';
} else if ($seminar_start_m == 5) {
  $seminar_start_m = ' мая ';
} else if ($seminar_start_m == 6) {
  $seminar_start_m = ' июня ';
} else if ($seminar_start_m == 7) {
  $seminar_start_m = ' июля ';
} else if ($seminar_start_m == 8) {
  $seminar_start_m = ' августа ';
} else if ($seminar_start_m == 9) {
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

if ($seminar_end_m == 1) {
  $seminar_end_m = ' января ';
} else if ($seminar_end_m == 2) {
  $seminar_end_m = ' февраля ';
} else if ($seminar_end_m == 3) {
  $seminar_end_m = ' марта ';
} else if ($seminar_end_m == 4) {
  $seminar_end_m = ' апреля ';
} else if ($seminar_end_m == 5) {
  $seminar_end_m = ' мая ';
} else if ($seminar_end_m == 6) {
  $seminar_end_m = ' июня ';
} else if ($seminar_end_m == 7) {
  $seminar_end_m = ' июля ';
} else if ($seminar_end_m == 8) {
  $seminar_end_m = ' августа ';
} else if ($seminar_end_m == 9) {
  $seminar_end_m = ' сентября ';
} else if ($seminar_end_m == 10) {
  $seminar_end_m = ' октября ';
} else if ($seminar_end_m == 11) {
  $seminar_end_m = ' ноября ';
} else if ($seminar_end_m == 12) {
  $seminar_end_m = ' декабря ';
}

$month_names = array(
  '01' => 'Январь',
  '02' => 'Февраль',
  '03' => 'Март',
  '04' => 'Апрель',
  '05' => 'Май',
  '06' => 'Июнь',
  '07' => 'Июль',
  '08' => 'Август',
  '09' => 'Сентябрь',
  '10' => 'Октябрь',
  '11' => 'Ноябрь',
  '12' => 'Декабрь' 
);

$seminar_city = get_field('city');
if ($seminar_city == 'Москва') {
  $seminar_filter = 'seminar_item__msk';
} else if ($seminar_city == 'Санкт-Петербург') {
  $seminar_filter = 'seminar_item__spb';
} else if ($seminar_city == 'Киев') {
  $seminar_filter = 'seminar_item__kiev';
} else if ($seminar_city == 'Астана') {
  $seminar_filter = 'seminar_item__ast';
}
$seminar_autor = get_field('autor');
global $cur_month;
if ($cur_month != $seminar_start_months) {
  echo '<div class="seminar_item col-md-12 seminar_heading_wrap seminar_heading_wrap_';
  echo $cur_month;
  echo '">';
  echo '<h3 class="seminar_heading">';
  $cur_month = date('m',$date_formated_start);
  echo $month_names[$cur_month];
  echo ' ';
  echo $seminar_start_y;
  echo '</h3>';
  echo "</div>";
}
echo '<div class="seminar_item seminar_in';
echo $seminar_filter;
echo ' col-md-12"';
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
echo '<span class="seminar_city_name">';
echo $seminar_city;
echo '</span>';
echo ' | ';
echo ' <span class="fa fa-user"></span>Читает: ';
echo $seminar_autor;
echo '</div>';
echo '<div class="on_wide">';
echo ' | ';
echo '</div>';
echo '<a target="_blank" href="';
echo the_permalink();
echo '">';
echo the_title();
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
