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
    $arrayItem[$count] = $value->innertext;
    $count++;
  }
  echo '{';
  echo '  ' . $tag . ': [';
  foreach($arrayItem as $value){
    echo '   {';
    echo '    innerText: ' . $value;
    echo '    innerHtml: ' . json_encode($value);
    echo '   },';
  }
echo '  ' . ']';
echo '}';
?>
