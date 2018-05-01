<?php
  header("Content-type: application/json;");
  require "simple_html_dom.php";
  $endpoint = $_GET["endpoint"];
  $tag = $_GET["tag"];
  $html = file_get_html('http://'.$endpoint);
  //Variable declarations.
  $arrayItem = array();
  foreach($html->find('//'.$tag) as $value){
     array_push($arrayItem, array('innerText' => strip_tags($value), 'innerHtml' => $value->innertext));
   }
  $json = json_encode($arrayItem);
  echo ($json);
?>
