<?php
include("simple_html_dom.php");
ini_set('max_execution_time', 300); //300 seconds = 5 minuten

$site = 'https://www.pornpics.com/random/index.php';

$json = file_get_contents($site);
$obj = json_decode($json);

$link = $obj->link;

$html = file_get_html($link);

foreach($html->find('.rel-link') as $element){
  if(!strpos($element, 'static')){
    echo $element->href . '<br>';
  }
}

// echo '<iframe src="'.$link.'"></iframe>';
?>
