<?php
//access the global array called $_POST to get the values from the text fields
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];

$Grade = 0;

    echo "Question 1: What is the sum of 2+2?<br>";
    echo "Your answered: ";
    if ($Q1 == "1"){
        echo "a). 2,823,564";
    }
    if ($Q1 == "2"){
        echo "b). 5,312,809";
    }
    if ($Q1 == "3"){
        echo "c). 4";
        $Grade += 20;
    }
    if ($Q1 == "4"){
        echo "d). 5"; 
    }
    echo "<br>Correct answer: c). 4<br><br>";

    echo "Question 2: What is the first letter of the alphabet?<br>";
    echo "Your answered: ";
    if ($Q2 == "1"){
        echo "a). A";
        $Grade += 20;
    }
    if ($Q2 == "2"){
        echo "b). M";
    }
    if ($Q2 == "3"){
        echo "c). Z";
    }
    if ($Q2 == "4"){
        echo "d). F"; 
    }
    echo "<br>Correct answer: a). A<br><br>";

    echo "Question 3: Are you alive?<br>";
    echo "Your answered: ";
    if ($Q3 == "1"){
        echo "a). Yes";
        $Grade += 20;
    }
    if ($Q3 == "2"){
        echo "b). No";
    }
    if ($Q3 == "3"){
        echo "c). I don't know";
    }
    if ($Q3 == "4"){
        echo "d). I don't want to tell you"; 
    }
    echo "<br>Correct answer: a). Yes<br><br>";

    echo "Question 4: What are you doing right now?<br>";
    echo "Your answered: ";
    if ($Q4 == "1"){
        echo "a). Eating";
    }
    if ($Q4 == "2"){
        echo "b). Sleeping";
    }
    if ($Q4 == "3"){
        echo "c). Taking a boring quiz";
        $Grade += 20;
    }
    if ($Q4 == "4"){
        echo "d). In class"; 
    }
    echo "<br>Correct answer: c). Taking a boring quiz<br><br>";

    echo "Question 5: Is this quiz easy?<br>";
    echo "Your answered: ";
    if ($Q5 == "1"){
        echo "a). Yes";
        $Grade += 20;
    }
    if ($Q5 == "2"){
        echo "b). I don't know";
    }
    if ($Q5 == "3"){
        echo "c). No";
    }
    if ($Q5 == "4"){
        echo "d). Really Hard"; 
    }
    echo "<br>Correct answer: a). Yes<br><br>";
$N = $Grade/20;
echo "Your do $N/5 question correctly!<br>";
echo "Your Grade is $Grade/100 !";
// echo "Q1: " . $Q1 . "<br>";
// echo "Q2: " . $Q2 . "<br>";
// echo "Q3: " . $Q3 . "<br>";
// echo "Q4: " . $Q4 . "<br>";
// echo "Q4: " . $Q5 . "<br>";
?>