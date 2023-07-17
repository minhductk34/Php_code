<?php
$dateString = 'Faburuary 4 2020 12:45:35';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo'<pre>';
var_dump($parsedDate);
echo'</pre>';

echo date('d/m/Y H:i:s');
?>