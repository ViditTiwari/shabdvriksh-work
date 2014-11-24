<html lang="en">
  <head>
    <meta charset="utf-8">
</head>
<body>

<?php

$file_handle = fopen("words_input.txt", "r");

$file_handle1 = fopen("words_output.txt", "w");
$ctr=0;
while (!feof($file_handle)) {
	if($ctr>0)
	{
		fwrite($file_handle1, "\n");
	}
   $line = fgets($file_handle);
   $line = preg_replace('/([|].*)/', "", $line);
   
   echo $line;
   echo '<br>';
   fwrite($file_handle1, $line) or die("Could not write to file");
  $ctr++;
   
   
}
fclose($file_handle);
fclose($file_handle1);


?>

</body>
</html>