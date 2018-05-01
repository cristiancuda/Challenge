<?php
  header("Content-type: application/json;");
  require "simple_html_dom.php";
  $endpoint = $_GET["endpoint"];
  $tag = $_GET["tag"];
  $html = file_get_html('http://'.$endpoint);
  //Variable declarations.
  $arrayItem = array();
  $count = 0;
  foreach($html->find('//'.$tag) as $value){
    $arrayItem[$count]->innerText = strip_tags($value);
    $arrayItem[$count]->innerHtml = $value->innertext;
    $count++;
  }
  $myJSON = json_encode($arrayItem);
  echo ($myJSON);
?>
