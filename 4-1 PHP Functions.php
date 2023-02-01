<?php


    $testDate = date_create("2023-01-28");

   function formatUsDate($inDate){
    echo date_format($inDate, 'n/d/Y' );
   } 

    function formatInternationalDate($inInternationalDate){
        echo date_format($inInternationalDate, 'd/n/Y');
    } 

    $testStringUppercase = "I am attending DMACC";

    $testStringLowercase = "I am attending dmacc";

    $testString = "I am attening ISU";

    function stringFormat($inString){

	 	echo strlen($inString);	

        echo trim($inString);
        
        if (str_contains($inString,"DMACC")){
            echo " string contains DMACC";
        }

        
        if (str_contains($inString,"dmacc")){
            echo " string contains dmacc";
          
        }

        else{
            echo "string dosent contain DMACC";
           
        }

    }

    $testPhoneNumber = +1234567890;

    function phoneNumberFormat($inPhoneNumber){
        echo substr($inPhoneNumber, -10, -7) . "-" .
        substr($inPhoneNumber, -7, -4) . "-" .
        substr($inPhoneNumber, -4);

    }

    $testCurrenyAmount= 123456;

    function currencyFormat($inCurrency){
       
       $numberFormat = number_format($inCurrency);
       echo "$".$numberFormat;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP homework</title>
    <meta name="keywords" content=" jacob, web development homework">
    <meta name="Author:" value="Jacob Scroggins">
    <meta name="destription" content="homework ">
    <meta charset="UTF-8">
    <meta name="viewprt" content="width=device-width, initial-scale=1.0">

    <style>

    </style>

    <script>
    
    </script>

</head>

<body >
    <header>
        <h1> 4-1: PHP Functions</h1>
    </header>

 
    <p> <?php   formatUsDate($testDate) ?> </p>
    <p> <?php  formatInternationalDate($testDate) ?></p>
    <p>test steing with uppercase DMACC: <?php  stringFormat($testStringUppercase) ?></p>
    <p>test steing with lowercase dmacc: <?php  stringFormat($testStringLowercase) ?></p>
    <p>test string without dmacc: <?php  stringFormat($testString) ?></p>
    <p>test phone number format <?php  phoneNumberFormat($testPhoneNumber) ?></p>
    <p>test currency format format <?php currencyFormat($testCurrenyAmount)   ?></p>
    
        
   
</body>

</html>