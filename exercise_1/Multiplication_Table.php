<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multiplication Table</title>
</head>
<style>
table {
  overflow: hidden;
}

td, th {
  position: relative;
  outline: 0;
}

tr:hover {
  background-color: yellow;
}


td:hover::after,
thead th:not(:empty):hover::after,
td:focus::after,
thead th:not(:empty):focus::after { 
  content: '';  
  height: 10000px;
  left: 0;
  position: absolute;  
  top: -5000px;
  width: 100%;
  z-index: -1;
}

td:hover::after,
th:hover::after {
  background-color: yellow;
}

td:hover{
  background-color: #99d6ff;
}
.GoTo{
    border-radius: 12px;
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.Presenting{
    border-radius: 12px;
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<div style="width:100%;overflow:hidden;height:60px">
        <button class = "GoTo" onclick="window.location.href = 'https://people.eecs.ku.edu/~x398d159/EECS448/Lab04/main.html';">Main Page</button>
        <button class = "Presenting" onclick="window.location.href = 'https://people.eecs.ku.edu/~x398d159/EECS448/Lab04/exercise_1/Multiplication_Table.php';">Exercise 1</button>
        <button class = "GoTo" onclick="window.location.href = 'https://people.eecs.ku.edu/~x398d159/EECS448/Lab04/exercise_2/Quiz.html';">Exercise 2</button>
        <button class = "GoTo" onclick="window.location.href = 'https://people.eecs.ku.edu/~x398d159/EECS448/Lab04/exercise_3/customerFrontend.html';">Exercise 3</button>
</div>  
</body>
</html>

<?php
  echo '<table border = "2">';
  for ($i=0; $i <=100 ; $i++) {
    echo "<tr>";
    for ($j=0; $j <= 100; $j++) {
      if ($i == 0 && $j == 0){
        echo "<td>&nbsp</td>";
      }
      else if ($i == 0 && $j != 0){
        echo "<td bgcolor=#e0ebeb> $j </td>";
      }
      else if ($j == 0 && $i != 0){
        echo "<td bgcolor=#e0ebeb> $i </td>";
      }
      else{
        echo "<td>".$i*$j."</td>";
      }
    };
    echo "</tr>";
  };
  echo "</table>";
?>
