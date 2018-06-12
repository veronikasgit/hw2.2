<?php

$json = file_get_contents(__DIR__ . '/content1.json');
$data = json_decode($json, true);
echo('<pre>');
print_r($data);

echo '<ol>';
foreach ($data as $item) {

  echo '<li><a href="test.php?id='. $item.'">'.$item['question'].'</a></li>'.'<br>';
};

echo '</ol>';
?>



