<html>
<head>
  <title>Parse</title>
</head>
<body>

<?php
  require "simple_html_dom.php";
  $endpoint = $_GET["endpoint"]; //Gets endpoint parameter, and assigns it to $endpoint.
  $tag = $_GET["tag"];
  $html = file_get_html('http://'.$endpoint); // Creating DOM from html file passed by url.
  //Variable declarations.
  $arrayItem = array();
  $arrayItem2 = array();
  $count = 0;
  $count2 = 0;
  //Looking into the DOM for (all) the tags that we obtained through $_GET["tag"], and storing those into an array.
  foreach($html->find('//'.$tag) as $value){
	  $arrayItem[$count] = $value->innertext;
	  $count++;
	}
  //Printing the array (Testing purposes)
  echo 'Array:  ';
  echo json_encode($arrayItem);
  //Printing with the required format.
  echo '<pre>';
  echo '{';
  echo '<br>';
  echo '  ' . $tag . ': [';
  echo '<br>';
  foreach($arrayItem as $value){
	  echo '   {';
	  echo '<br>';
	  echo '    innerText: ' . $value;
	  echo '<br>';
	  echo '    innerHtml: ' . json_encode($value);
	  echo '<br>';
	  echo '   },';
	  echo '<br>';
	  }
  echo '  ' . ']';
  echo '<br>';
  echo '}';
  echo '</pre>';
?>
</body>
</html>
