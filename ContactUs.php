<?php virtual('/sip/Connections/sip.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "contact_us")) {
  $insertSQL = sprintf("INSERT INTO contact (nama, email, pesan) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['message'], "text"));

  mysql_select_db($database_sip, $sip);
  $Result1 = mysql_query($insertSQL, $sip) or die(mysql_error());

  $insertGoTo = "/sip/index.php";
  echo "<html>";
  echo "<head>";
  echo "<script> alert ('Thanks For Your Feedback !!'); </script>";
  echo "<meta http-equiv=\"refresh\"content=\"0; url=index.php\" />";
  echo "</head>";
  echo "</html>";
  
  }

mysql_select_db($database_sip, $sip);
$query_Recordset1 = "SELECT * FROM contact";
$Recordset1 = mysql_query($query_Recordset1, $sip) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="css/css-index.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/HNCK3991.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
							<p>&nbsp;</p>
								<div class="head-btn wow fadeInLeft">
                                  <div align="left"><a href="index.php" class="btn-default"><<< HOME</a>
                                    
                                  </div>
							</div>
                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href="index"><img src="images/logo.png" alt="logo"></a></div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Contact Us !
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInLeft">
                                <p>Jika Anda mengalami banyak kendala dalam penggunaan Sistem Informasi Pasar, Silahkan hubungi kami...</p>
                            </div>				  
							<!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">
                                <h2><span class="highlight">Sistem</span> Informasi Pasar</h2>
                                <ul class="ul-address">
                                    <li><i class="pe-7s-map-marker"></i>Jalan Penayoeng, Daerah Pasar Aceh</br>
                                       
                                    </li>
                                    <li><i class="pe-7s-phone"></i>+62 823 6412 6452</br>
                                     
                                    </li>
                                    <li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">sip@yahoo.com</a></li>
                                    <li><i class="pe-7s-look"></i><a href="#">www.sip.com</a></li>
                                </ul>	

                            </div>
                           
                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                                <form action="<?php echo $editFormAction; ?>" method="POST" id="contact-form" name="contact_us" class="form-horizontal" >
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control wow fadeInUp" placeholder="Nama Lengkap" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                    </div>					
                                    <div class="form-group">
                                        <textarea name="message" rows="20" cols="20" id="message" class="form-control input-message wow fadeInUp"  placeholder="Pesan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="SEND" class="btn btn-success wow fadeInUp" />
                                  </div>
                                                                    
                                    
                                    
                                    <input type="hidden" name="MM_insert" value="contact_us">
                              </form>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                   
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">
					<p>Copyright Dinas Perdagangan 2017 - SIP</p>
                      <p><a href="" target="_blank">About Us</a></p>
					</div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>	
            </div>	
        </footer>

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                    new WOW().init();
        </script>
    </body>
</html>
<?php
mysql_free_result($Recordset1);
?>
