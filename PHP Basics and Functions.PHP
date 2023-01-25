<?php
/*

 MVC- design pattern used in lot of app deveoplment
    m - Model this is your data, database, stored data, variables and content
    V - View this this the HTML, keep as much PHP OUT of the view as possible
    C - Controller this is the program bussines logic, where most of the work is 

1. Keep as much PHP cose at the top of the page as possible 
2. define and assign variables at the top of the page
    */

$firstName = "mary";
$lastName = "Smith";

$schoolName = "Dmacc";

define("SCHOOLNAME",$schoolName);//this cahnge name each user

$schoolName ="ISU";

function displayNames(){
    //PHP will always look for a local version of the variable 
    // tell the funtion to use global version  of variable
    global  $firstName , $lastName;// this will work and call the global variable 
    echo $firstName;
    echo $lastName;
    echo $SCHOOLNAME;
}

function displayInputs($infirstName){
    echo $infirstName;
}

$deliveryDate = date_create("2023-03-20");

$formatDevilveryDate = date_format($deliveryDate, 'l n/d/Y' );
//PHP will process $variables even inside of QUOTES!!!
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP homework</title>
    <meta name="keywords" content=" jacob, web development homework">
    <meta name="Author:" value="Jacob Scroggins">
    <meta name="destription" content="homework ">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

    </style>

    <script>
    
    </script>

</head>

<body >
    <header>
        <h1>PHP Basics  and Functions</h1>
    </header>
    <p>welcome <?php echo $firstName; echo $lastName ; ?>, </p>
    <p>welcome <?php echo $firstName." ". $lastName ; ?>, </p>
    <p>welcome <?php echo "$firstName  $lastName" ; ?>, </p>
    <p>thank you to<?php displayNames(); ?></p>
    <p> first name: <?php displayInputs("Randy");?></p>
    <p> today is <?php echo date("l n/d/Y  " ); ?></p>
    <p>delivery date <?php  echo $formatDevilveryDate ;?></p>
   
</body>

</html>