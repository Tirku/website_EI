<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<title>Eagleye InfoTech Company Limited (EI)</title>
<style type="text/css">
<!--
.style1 {color: #004478}
-->
</style>
</head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td>&nbsp;</td>
<td width="950" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="1"><img src="img/header_01.jpg" width="475" height="134" /></td>
<td><img src="img/header_02.jpg" width="475" height="134" /></td>
</tr>
</table>
<table width="100%" height="496" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="169" align="center" valign="top" class="lbg"><table border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="188">&nbsp;</td>
</tr>
<tr>
<td><a href="site-map.html"><img src="img/b-01.jpg" width="153" height="60" border="0" /></a></td>
</tr>
<tr>
<td height="32">&nbsp;</td>
</tr>
<tr>
<td><a href="careers.html"><img src="img/b-02.jpg" width="153" height="60" border="0" /></a></td>
</tr>
<tr>
<td height="31">&nbsp;</td>
</tr>
<tr>
<td><a href="contact-us.html"><img src="img/b-03.jpg" width="153" height="60" border="0" /></a></td>
</tr>
</table></td>
<td valign="top" background="img/bg2.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="44" background="img/menu-tab.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="125" align="center"><a href="index.html" class="menu">Home</a></td>
<td width="127" align="center"><a href="about-us.html" class="menu">About Us</a></td>
<td width="136" align="center"><a href="our-products.html" class="menu">Our Products</a></td>
<td width="135" align="center"><a href="our-services.html" class="menu">Our Services</a></td>
<td width="121" align="center"><a href="quality.html" class="menu">Quality</a></td>
<td  align="center"><a href="clientless.html" class="menu">Clienteles</a></td>
</tr>
</table></td>
</tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="450" align="left" valign="top" background="img/bg.jpg" style="background-repeat:no-repeat"><table width="100%" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td width="100%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="3" align="left" valign="top" background="img/L2.jpg"><img src="img/L1.jpg" width="3" height="3" /></td>
              <td align="left" valign="top" background="img/c1.jpg"><img src="img/c1.jpg" width="1" height="3" /></td>
              <td width="3" align="left" valign="top"><img src="img/R1.jpg" width="3" height="3" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" background="img/L2.jpg">&nbsp;</td>
              <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="450" align="left" valign="top"><table width="100%" border="0" cellspacing="8" cellpadding="0">
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td align="left" valign="top" bgcolor="#ace5eb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="21"><img src="img/bullet.jpg" width="21" height="15" /></td>
                              <td><span class="text14red">Email</span></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="15" align="left" valign="top">
<?
//------------------------------------------------------------------------
require_once(dirname(__FILE__).'/phpmailer/class.phpmailer.php');
$mail=new PHPMailer();
//$mail->IsSMTP();                            // set mailer to use SMTP
//$mail->Host = "mail.westkit.com";        // specify main and backup server
//$mail->SMTPAuth = true;                        // turn on SMTP authentication
//$mail->Username = "deer";    // SMTP username
//$mail->Password = "%vtk87uL";
//$mail->From = "system@westkit.com";
$mail->From = "noreply@eiinfotech.com";
$mail->AddAddress("info@eiinfotech.com");

$mail->FromName=trim($_POST['name']); 
$mail->Subject = trim($_POST['subject']);
$mail->Body =  trim($_POST['message']);
if($_FILES['upfile']['tmp_name'])$mail->AddAttachment($_FILES['upfile']['tmp_name'],$_FILES['upfile']['name']);
$mail->IsHTML(true);
?>
<h3 align="center">
<? if($mail->Send()){?>
Thank you...We have received your message..<br />
<? if($_POST['referer']){?> Wait a moment to return on the previous page... <META HTTP-EQUIV="Refresh" CONTENT="3;URL=<?=$_POST['referer']?>"> <? }?>
<? }else{?>
Sorry, we can not receive your message at this time, please try again...
<? }?>
</h3>
</td>
                        </tr>       
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                
              </table></td>
              <td width="3" align="left" valign="top" background="img/R2.jpg"><img src="img/R2.jpg" width="3" height="1" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" background="img/L2.jpg"><img src="img/L3.jpg" width="3" height="3" /></td>
              <td align="left" valign="top" background="img/c3.jpg"><img src="img/c3.jpg" width="1" height="3" /></td>
              <td width="3" align="left" valign="top"><img src="img/R3.jpg" width="3" height="3" /></td>
            </tr>
          </table></td>
          </tr>
      </table></td>
    </tr>
  </table></td>
</tr>
</table></td>
<td>&nbsp;</td>
</tr>
</table>
</body>

</html>
