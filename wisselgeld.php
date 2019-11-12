<?php
// Input
$input = $argv[1];
// hele euro's
$hele = intval(floor($input));
//centen euro's
$centen = intval(round(($input - $hele) * 100));
//geld arry
$geld = array(
    500,
    200,
    100,
    50,
    20,
   10,
    5,
    2,
    1,
);
$rest = $input;
foreach($geld as $value) {
    if ($rest >= $value) {
        $aantalgeld = floor($rest / $value);
        $rest %= $value;
        echo "$aantalgeld X $value euro" . PHP_EOL;
    }
}
//centen arry
$centengeld = array(
    50,
    20,
    10,
    5,
    2,
    1,
);
$restcent = $centen;
foreach($centengeld as $value) {
    if ($restcent >= $value) {
        $aantalgeld = floor($restcent / $value);
        $restcent %= $value;
        echo "$aantalgeld X $value cent" . PHP_EOL;
    }
}
?>