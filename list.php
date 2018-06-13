<?php

$json = file_get_contents(__DIR__ . '/content.json');
$data = json_decode($json, true);
echo('<pre>');
print_r($data);

echo '<ol>';
foreach ($data as $key => $item) {
  foreach ($item as $avalue) {
    echo '<li><a href="test.php?id='. $key.'">'.$value['question'].'</a></li>'.'<br>';
  };
};
echo '</ol>';
?>



