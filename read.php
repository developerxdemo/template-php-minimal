<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Lets do this0<br>";

//system('php composer.phar install');
echo "Lets do thisafter install <br>";
require 'vendor/autoload.php' or print("Can't find autoload.php. Did you install dependencies via composer?");

echo "Lets do this0 again<br>";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//  // Load an existing spreadsheet
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('EJEMPLO.xlsx');

echo "Lets do this1<br>";
Calculation::getInstance($spreadsheet)->disableCalculationCache();

echo "Lets do this2<br>";

$sheet = $spreadsheet->getSheetByName('Hoja 1');
// // Retrieve the calculated value of cell C1
// $calculatedValue = $sheet->getCell('J11')->getValue();

// //$calculatedValue = $sheet->getCellByColumnAndRow( 10, 11 )->getValue();
$calculatedValue = $sheet->getCell('A2')->getValue();
echo "Value of A2: $calculatedValue\n";

// // //$calculatedValue = $sheet->getCellByColumnAndRow( 10, 11 )->getCalculatedValue();
// $calculatedValue = $sheet->getCell('W7')->getCalculatedValue();
// echo "Calculated Value of W7: $calculatedValue\n";


// $sheet = $spreadsheet->getSheetByName('Base de datos');
// $calculatedValue = $sheet->getCell('C5')->getValue();
// echo " Value of C5: $calculatedValue\n";
// $calculatedValue = $sheet->getCell('C5')->getCalculatedValue();
// echo "Calculated Value of C5: $calculatedValue\n";


// $sheet = $spreadsheet->getSheetByName('ENTRADA');
// echo "Variable ENTRADA J11: " . $sheet->getCell('J11')->getValue() ."\n";

// $sheet = $spreadsheet->getSheetByName('RESULTADOS');
// echo "Resultado: " . $sheet->getCell('P31')->getCalculatedValue() ."\n";

// $sheet = $spreadsheet->getSheetByName('ENTRADA');
// $sheet->setCellValue('J11', 21);
// echo "Variable ENTRADA J11: " . $sheet->getCell('J11')->getValue() ."\n";

// $sheet = $spreadsheet->getSheetByName('RESULTADOS');
// echo "Nuevo Resultado: " . $sheet->getCell('P31')->getCalculatedValue() ."\n";

// //$writer = new Xlsx($spreadsheet);
// //$writer->save('duplicated.xlsx')