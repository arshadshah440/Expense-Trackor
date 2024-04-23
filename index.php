<?php 

define('ROOT', dirname(__FILE__));

// fetching data file
include ROOT.'/functions/datamanipulate.php';


// adding data to file
writeinfile();

// storing the data
$filename=ROOT.'/expensesfiles/dummy.csv';

$transactions= getdatafromcsv($filename);


// displaying the data

include ROOT.'/html/Xhtml.php';
