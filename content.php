<?php
  header("Content-type: application/json;");
  require "simple_html_dom.php";
  $endpoint = $_GET["endpoint"]; //Gets endpoint parameter, and assigns it to $endpoint.
  $tag = $_GET["tag"];
  $content = $_GET["content"];
  $html = file_get_html('http://'.$endpoint); // Creating DOM from html file passed by url.
  //Variable declarations.
  $trueBool->exists = "false";
  $count = 0;
  $tagArray = array();
  //Looking into the DOM for (all) the tags that we obtained through $_GET["tag"], and storing those into an array.
  foreach($html->find('//'.$tag) as $value){
    $tagArray[$count] = $value->innertext;
    $count++;
  }
  for($i=0;$i<count($tagArray);$i++){ //Going through the tagArray
    $stringBool = strpos($tagArray[$i], $content); //Finding the position of the first occurrence of a substring in a string (comparing each word by indices)
    if($stringBool !== false)
    {
      $trueBool->exists = "true";
    }
  }
	$myBool = json_encode($trueBool);
	echo $myBool;
?>
