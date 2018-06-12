<?php

//echo "<pre>";

//print_r($_FILES);
if(isset($_POST['button'])) {
	if (!empty($_POST) || !empty($_FILES)) {
	    move_uploaded_file($_FILES['ourfile']['tmp_name'], '1.json');

	    echo "Файл загружен"; exit;
	} else {
	    echo "Файл не загружен";
	}
}

	

?>

<html>

<head>
    <title></title>
</head>

<body>

<form action="" method="POST" enctype="multipart/form-data">
    <div><input type="file" name="ourfile"></div>
    <input type="submit" value="Отправить" name="button">
</form>

</body>

</html>
