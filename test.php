<?php

$json = file_get_contents(__DIR__ . '/content2.json');
$data = json_decode($json, true);
 
$x = $_GET['id'];
 
$variantsOfAnswers = $data[$x][$x]['variantsOfAnswers'];
 
$a = $variantsOfAnswers['a'];
$b = $variantsOfAnswers['b'];
$c = $variantsOfAnswers['c'];
$d = $variantsOfAnswers['d'];
 
$question = $data[$x][$x]['question'];
$rightAnswer = $data[$x][$x]['rightAnswer'];

if (isset($_GET['q1'])) {
	echo $_GET['q1']. '<br>';
	$_SESSION['variantsOfAnswers'] = $_GET['q1'];
	echo $_SESSION['variantsOfAnswers']. '<br>'; 
		 if ($_SESSION['variantsOfAnswers'] === $rightAnswer) {
		 	echo "Верно"; 
			} else {
			echo "НеВерно"; 

			};


};

 
?>
 
<h4>Ответьте на вопрос</h4>
<form action="" method="GET" enctype="multipart/form-data">

	<fieldset>
        <legend><?php echo $question; ?></legend>
	    <label><input type="radio" name="q1" value="$a"><?php echo $a; ?></label>
	    <label><input type="radio" name="q1" value="$b"><?php echo $b; ?></label>
	    <label><input type="radio" name="q1" value="$c"><?php echo $c; ?></label>
	    <label><input type="radio" name="q1" value="$d"><?php echo $d; ?></label>
    </fieldset>
    <button type="submit" name="button">Проверить</button>
</form>