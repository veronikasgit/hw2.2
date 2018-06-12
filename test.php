<?php

$json = file_get_contents(__DIR__ . '/content1.json');
$data = json_decode($json, true);
echo '<pre>';
var_dump($json);
var_dump($data);
 
 

echo $data['question'] . '<br>';
echo $data['rightAnswer'];
 
$question = $data['question'];
$rightAnswer = $data['rightAnswer'];
 
echo '<br>';
echo '<br>';
echo '<br>';
 
?>
 
<p>Решите пример</p>
<form>
    <label><?php echo $label;?></label>
    <input type="radio" >
    <button type="submit">Проверить</button>
</form>