<!DOCTYPE html>
<html>
<head>
    <title>Multi</title>
</head>

<body>
  Hello world!
  This is multiplication Table
  
  <?php
		
		echo "<h1> Hello!</h1>";
	
		$rows = 20; // количество строк, tr
		$cols = 20; // количество столбцов, td

		$table = '<table border="1">';

		for ($tr=1; $tr<=$rows; $tr++){
    	$table .= '<tr>';
    	for ($td=1; $td<=$cols; $td++){
        	if ($tr===1 or $td===1){
           		$table .= '<th style="color:white;background-color:green;">'. $tr*$td .'</th>'; // вычислили первую строку или столбец
        	} else{
            	$table .= '<td>'. $tr*$td .'</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
        	}
    	}
    	$table .= '</tr>';
		}

		$table .= '</table>';
		echo $table;
  ?>
  
</body>
</html>
