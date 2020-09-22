<?php
include("simple_html_dom.php");
ini_set('max_execution_time', 300); //300 seconds = 5 minuten

$site = 'https://www.pornpics.com/random/index.php';
$array = [];
$data = [];

$json = file_get_contents($site);
$obj = json_decode($json);

$link = $obj->link;

$html = file_get_html($link);

$i = 0;

foreach($html->find('.rel-link') as $element){
  $i++;
  if(!strpos($element, 'static')){
    // echo $element->href . '<br>';
    array_push($array, $element->href);
  }
}
$end = $i - 1;

$data['foto'] = $array[rand(0, $end)];
$data['og'] = $link;

print_r($data);

// echo '<iframe src="'.$link.'"></iframe>';
?>
