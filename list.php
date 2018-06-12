<?php

$json = file_get_contents(__DIR__ . '/content1.json');
$data = json_decode($json, true);
echo '<pre>';
var_dump($json);
var_dump($data);
echo '<ol>';
foreach ($data as $key => $item) {
    //printf('<a href="test.php?key=%s>%s</a>', $key, $data['question']);
    //$question = $data['question'];
    //echo "<a href='#'>$key, $question</a>";
    //echo '<li><a href="test.php?question='. $item['question'].'">'.$item.'</a></li><br>';
  echo '<li><a href="#">'.$item['question'].'</a></li><br>';
};

echo '</ol>';
?>



