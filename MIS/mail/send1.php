<?php






$name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $city=$_POST['city'];
  $cources=$_POST['cources'];
  $subject=$_POST['subject'];
  
  // $message1=$_POST['message'];
  

$to = "Leads@jbcollege.in";
$subject = "REPEAT INQUIRY ";

$message = "
<html>
<head>
<title>Leads</title>
</head>
<body>
<table rules='all' style='border-color:#666;width:100%;font-family:Helvetica,Arial,sans-serif;background-color:#f7f7f7;color:#333;padding:0;margin:0'>
             <tbody><tr>
             <td>
             <table style='width:80%;background:#ffffff;margin:15px auto;font-size:12px;line-height:18px' cellpadding='10'>
             <tbody><tr>
             </tr><tr><td>Name : $name</td></tr>
             <tr><td>Mobile: $mobile</td></tr>	
             <tr><td>City  : $city</td></tr>	
             <tr><td>course: $cources</td></tr>
             <tr><td>SourCe: $subject</td></tr>
             
             


            
             <tr>
             <td style='padding:0 5px'>
             <table style='font-size:12px;line-height:18px;margin:0;padding:0'>
             </table>
             </td>
             </tr>
             </tbody></table>
             </td></tr></tbody></table></body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Leads@jbcollege.in>' . "\r\n";

$ok=mail($to,$subject,$message,$headers);

if ($ok){
      
 //die();

   //echo '1';
   //exit;
  header("Location: https://www.jbcollege.in/apply/thank-you.html");
  die();
}else{
   
    echo "Your form is not submitted call 9999888321 now";
}














?>
