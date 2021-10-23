<!DOCTYPE html>
<html>
<head>
    <title>Multi</title>
  
<style type="text/css">
body {
  font-size:15px;
}
  
table{
  border-collapse: collapse;
}
th {
  background: #AD0000 ;
  color: white;
} 
  
td {
  height: 20px;
  text-align: center;
  width: 20px;
}

td.common{
  background-color: #DFFBFF;
  }
                
td.dial {
  background-color: orange;
}

td.rows_cols {
  background-color: yellow;
}
td.first{
  background-color: #FFDEA1;
}
td.white {
  background-color: #fff;
}
                
td a {
  display: block;
}
                
td a:hover {
  background-color: pink;
}
  
</style>
</head>

<body>

  <table border="1">
                
<?php 

  $rows = 10;
  $cols = 10;

	if($rows===$cols){

		for($r = 1; $r <= $rows; $r++){
      echo "<tr>"; //<th> $r </th>
      
      for($c = 1; $c <= $cols; $c++){
        $bg = "common";
        if($c === $r){ 
          $bg = "dial";
        } 
        if ($r===1) {$bg = "rows_cols";}
        if ($c===1) {$bg = "rows_cols";}
        if ($r===1 and $c===1) {$bg = "first";}
        //($c == 1) ? $bg = "pink" : $bg = "white";
        echo "<td class='$bg'><a href='#' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>";
        
      }
      
      
      
      echo  "</tr>";
    }
    
  }
                
    ?>

</table>

</body>
</html>