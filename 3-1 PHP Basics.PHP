<?php

    $yourName = "Jacob";

    $number1=21;

    $number2=32;

    $total= $number1 + $number2;

    $codeLang = array('PHP', 'HTML', 'Javascript');

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
       <?php echo "<h1>  3-1: PHP Basics </h1>"; ?>
    </header>
    <h2><?php echo $yourName; ?></h2>

    <p><?php echo $number1; ?></p>
    <p><?php echo $number2; ?></p>
    <p><?php echo $total;?></p>
<script>
    <?php 
    foreach($codeLang as $codeValue){
        echo "document.write('<p>' + '$codeValue' + '</p>');";
    }
    ?>
</script>   
</body>

</html>