<?php



function getdatafromcsv($filename)
{
  

    if (file_exists($filename)) {

        $file = fopen($filename, 'r');

        $transactionlist = [];

        while (($row = fgetcsv($file)) !== false) {
            $transactionlist[] = $row;
        }
    } else {
        return 'File not found';
    }
    return    $transactionlist;
}

function writeinfile()
{
    $filename = ROOT . '/expensesfiles/dummy.csv';
    file_put_contents($filename, '');
    // Initial values
    $baseNumber = 1;
    $baseName = "arshad";
    $baseAge = 24;
    $baseGender = "male";

    // Print 30 lines with incremental changes
    for ($i = 0; $i < 30; $i++) {
        // Generate a new line with slightly altered values
        $newNumber = $baseNumber + $i;
        $newName = $baseName . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 1); // Add random letter to the name
        $newAge = $baseAge + ($i % 3); // Increment age by 0, 1, or 2
        $newGender = ($i % 2 == 0) ? "male" : "female"; // Alternate gender for variety

        // Output the line
        file_put_contents($filename, "$newNumber,$newName,$newAge,$newGender\n", FILE_APPEND);
    }
}
