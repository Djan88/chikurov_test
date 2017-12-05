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
$seminar_end = get_field('seminar_end');
$seminar_city = get_field('city');
echo '<div class="seminar_item col-md-12">';
echo '<div class="row">';
echo '<div class="seminar_time col-md-12">';
echo '<span class="fa fa-calendar"></span> ';
echo $seminar_start;
echo ' — ';
if($seminar_end){
 echo $seminar_end;
} else {
 echo $seminar_start;
}
echo '<span class="fa fa-map-marker"></span>Город: ';
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

<div class="seminar_item col-md-12">
  <div class="row">
    <div class="seminar_time col-md-12">
      <span class="fa fa-calendar"></span> 29.11.2017 — 1.12.2017
      <span class="fa fa-map-marker"></span>Город:  Москва<br>
    </div>
    <div class="seminar_title col-md-12">
      <a href="seminar.html">Базовый семинар по Биологическому центрированию</a>
    </div>
  </div>
</div>
