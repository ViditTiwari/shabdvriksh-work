<html lang="en">
  <head>
    <meta charset="utf-8">
</head>
<body>

<?php

$file_handle = fopen("sample-output.txt", "r");

$file_handle1 = fopen("sample-output-group-of-words.txt", "w");

while (!feof($file_handle)) {
	
   $line = fgets($file_handle);
   $line = preg_replace('/([|].*)/', "", $line);
  $line = preg_replace('/( )/', ":", $line);

   
   echo $line;
   echo '<br>';
   fwrite($file_handle1, $line) or die("Could not write to file");
  
   
   
}
fclose($file_handle);
fclose($file_handle1);


?>

</body>
</html>