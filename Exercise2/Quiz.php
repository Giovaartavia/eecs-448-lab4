<?php

$score = 0; //Used to keep track of points

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];

//Question 1
echo "<b> Question 1: </b> What is 7*5? <br>";
echo "<b> Your Answer: </b>".$answer1."<br>";
echo "<b> Correct Answer: </b> 35 <br><br>";
if($answer1 == "35"){
  echo "Correct! <br><br><br><br>";
  $score++;
}
else{
  echo "Incorrect. <br><br><br><br>";
}

//Question 2
echo "<b> Question 2: </b> What is 8*8? <br>";
echo "<b> Your Answer: </b>".$answer2."<br>";
echo "<b> Correct Answer: </b> 64 <br><br>";
if($answer2 == "64"){
  echo "Correct! <br><br><br><br>";
  $score++;
}
else{
  echo "Incorrect. <br><br><br><br>";
}

//Question 3
echo "<b> Question 3: </b> What is 9*12? <br>";
echo "<b> Your Answer: </b>".$answer3."<br>";
echo "<b> Correct Answer: </b> 108 <br><br>";
if($answer3 == "108"){
  echo "Correct! <br><br><br><br>";
  $score++;
}
else{
  echo "Incorrect. <br><br><br><br>";
}

//Question 4
echo "<b> Question 4: </b> What is 12*11? <br>";
echo "<b> Your Answer: </b>".$answer4."<br>";
echo "<b> Correct Answer: </b> 132 <br><br>";
if($answer4 == "132"){
  echo "Correct! <br><br><br><br>";
  $score++;
}
else{
  echo "Incorrect. <br><br><br><br>";
}

//Question 5
echo "<b> Question 5: </b> How many times can you subtract 10 from 100? <br>";
echo "<b> Your Answer: </b>".$answer5."<br>";
echo "<b> Correct Answer: </b> One time <br><br>";
if($answer5 == "One time"){
  echo "Correct! <br><br><br><br>";
  $score++;
}
else{
  echo "Incorrect. <br><br><br><br>";
}

//Score
echo "<b>Points: </b>".$score."/5 <br>";
$score = ($score/5)*100;
echo "<b>Final score: </b>".$score."%";

?>
