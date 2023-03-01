<?php 
$firstName= $_POST["first_name"];
$lastName= $_POST["last_name"];
$schoolName= $_POST["school_name"];
$email=$_POST["email"];
$academicStanding= $_POST["academicStanding"];
$major=$_POST["major"];
$contactMe=$_POST["contactMe"];
$contactAdvisor=["contactAdvisor"];
$comments=$_POST["comments"];

$date= date('n/d/Y');

$to=$email;

$subject = "thank you for contacting us ";
$subjectRecived="$email has contacted you";

$message = 
"<html>
   <head>
   <title> thank you for contacting us </title>
   </head>
   <body style='background-color:rgb(107, 138, 165); color:black;'>
      <h1>thank you for your subbmision</h1>
      <p>we will be in touch within three to five bussnies days as of $date /p>
      <p>have a wonderful day</p>
   </body>
</html>";


$headers = "From: JaScroggins.com <jacobscroggins@jascroggins.com>"."\r\n";

$headers .= "Content-type:text/html\r\n";

$headerRecived= "From: <$email>\r\n";
$headerRecived.="Reply to: $email\r\n";
$headerRecived .= "content-type: text/htmlp;\r\n";




if (isset($_POST["academicStanding"] ) ){
    $academicStanding=$_POST["academicStanding"];
 }
 else{
	$academicStanding= " no academic standing ";
 }


 if (isset($_POST["contactMe"] ) ){
    $contactMe=$_POST["contactMe"];
 }
 else{
	$contactMe= " do not contact me with information";
 }


 if (isset($_POST["contactAdvisor"] ) ){
    $contactAdvisor=$_POST["contactAdvisor"];
 }
 else{
	$contactAdvisor= " i do not wish to speeak to an advisor";
 }

$userContactInfo=
   "date Submited $date\n
   Name $firstName $lastName \n
   school Name $schoolName\n
   email $email\n
   academic Standing $academicStanding\n
   majors $major\n
   contact me $contactMe\n
   contact advisor $contactAdvisor\n
   comments $comments"
    ;

mail($to,$subject,$message,$headers);

mail("jacobscroggins@jascroggins.com",$subjectRecived,$userContactInfo,$headerRecived);


?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
<style>
   body {
      align-items: center;
      text-align: center;
      justify-content: center;
      height: 100vh;
      background-image:url("pexels-pixabay-256490.jpg") ;
   }

   main{
      width:600px;
		height: 600px;
      padding: 20px;
		background-color:rgb(107, 138, 165);	
      margin: auto;
      margin-top: 10%;
      box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, .2);
   }
</style>
</head>

<body>
   <main>
      <h2>Dear <?php echo $firstName ?>,</h2>

      <p>Thank for you for your interest in DMACC.</p>  

      <p>We have you listed as an <?php echo $academicStanding ?> starting this fall. </p>

      <p>You have declared <?php echo $major ?> as your major. </p>

      <p>Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $email ?>.</p>


      <p><?php echo $contactMe ?></p>

      <p><?php echo $contactAdvisor ?></p>

      You have shared the following comments which we will review:
      <p><?php echo $comments ?></p>

      <a href="emailForm.html"><p> back to contact From</p></a>
   </main>

</body>
</html>
