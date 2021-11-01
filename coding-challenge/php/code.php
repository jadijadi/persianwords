<?php
$csv = fopen("../../persian_dict_19k.csv", "r");
    while(!feof($csv)) {
        $data = fgetcsv($csv);
        $firstWord = explode(":",$data[0]);
            if (str_starts_with($firstWord[0], 'من')) {
                echo "به من نگو " . mb_substr($firstWord[0], 2) . ", " . $firstWord[0] . " تو نیستم." . "<br>";
            }
            if (str_starts_with($firstWord[0], 'ما')) {
                echo "به ما نگو " . mb_substr($firstWord[0], 2) . ", " . $firstWord[0] . " تو نیستیم." . "<br>";
            }
    }
fclose($csv);