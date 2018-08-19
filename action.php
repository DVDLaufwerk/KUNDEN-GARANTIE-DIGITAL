<?php
if(isset($_POST['getid'])){
	
	$data = $_POST['getid'];

	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);
	$data = base64_decode($data);

	file_put_contents('images/image.png', $data);

	$myfile = fopen("info.txt", "w") or die("Unable to open file!");
	$txt = date("Y/m/d");
	fwrite($myfile, $txt);
	fclose($myfile);


}

?>