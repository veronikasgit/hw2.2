<?php

$json = file_get_contents(__DIR__ . '/content1.json');
$data = json_decode($json, true);

foreach ($data as $key => $item) {

$variantsOfAnswers = $item['variantsOfAnswers'];
		
$a = $variantsOfAnswers['a'];
$b = $variantsOfAnswers['b'];
$c = $variantsOfAnswers['c'];
$d = $variantsOfAnswers['d'];
 
$question = $item['question'];
$rightAnswer = $item['rightAnswer'];

}; 
 
?>
 
<h4>Ответьте на вопрос</h4>
<form action="" method="GET" enctype="multipart/form-data">

	<fieldset>
        <legend>Сколько граммов в одном килограмме?</legend>
	    <label><?php echo $question?></label>
	    <label><input type="radio" name="q1" value="$a"><?php echo $a; ?></label>
	    <label><input type="radio" name="q1" value="$b"><?php echo $b; ?></label>
	    <label><input type="radio" name="q1" value="$c"><?php echo $c; ?></label>
	    <label><input type="radio" name="q1" value="$d"><?php echo $d; ?></label>
    </fieldset>
    <button type="submit">Проверить</button>
</form>

<?php
var_dump($_GET);
if(!isset($_GET['question']) || !file_exists('./test.php/' . $_GET['question']))
  exit('Invalid test question');
$item = $_GET['question'];
var_dump($_GET);
showTest($data['test']);

?>
