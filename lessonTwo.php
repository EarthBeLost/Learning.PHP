<html>
<head>
	<title>Hello World</title>
</head>
<body>
<?php

// As you can see, I've included PHP into this HTML code.

/**
* These are variables in PHP.
* unlike most programming languages, you don't have to delcare datatypes.
* Variables are shown with $ at the start, then = to assign the value.
* As always, when you end a variable, you end it with a semi-colon.
* It's also good practice to take some naming conventions. (I use CamelCase).
*/

$firstVariable = "This is my first Variable.";
$secondVariable = "This is my second variable.";
$thirdVariable = "Let's do some maths!";
$numOne = 6;
$numTwo = 12;
$numThree = $numOne + $numTwo;
$numFour = $numOne * $numTwo;

// this will simply echo out the $firstVariable value.
echo $firstVariable;

// Alternatively, you can still echo out variables within HTML tags, like so.
echo "<h2> $secondVariable </h2>";

// Simply here to echo out the third variable around some H1 tags.
echo "<h1> $thirdVariable </h1>";

// This is a block of code to show off some maths within PHP.
echo "<p> The value of Number 1 = $numOne. </p>";
echo "<p> The value of Number 2 = $numTwo. </p>";
echo "<p> If you add these together, you get = $numThree. </p>";
echo "<p> If you times these together, you get = $numFour. </p>";

// As well as that, you can also add to a variable in an easier way.
echo $numOne += 4;

echo "<br />";

// This also works with other mathamatical operators, like so.
echo $numOne -= 2;

echo "<br />";

//For an easier way to increase the value of a variable, simply use ++.
$numOne = 6;
$numOne++;

echo $numOne;

//As before, you can change the operator to -- to decrease the value by 1.
$numOne--;

echo "<p> $numOne </p>";

?>
</body>
</html>
