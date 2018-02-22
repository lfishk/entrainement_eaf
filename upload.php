<?php
if(!is_dir("audio")){
	$res = mkdir("audio",0777); 
}
// pull the raw binary data from the POST array
$data = substr($_POST['data'], strpos($_POST['data'], ",") + 1);
// decode it
$decodedData = base64_decode($data);
// print out the raw data, 
//echo ($decodedData);
$filename = 'audio_' . $_POST['fname'];
// write the data out to the file
$fp = fopen('audio/'.$filename, 'wb');
fwrite($fp, $decodedData);
fclose($fp);
?>