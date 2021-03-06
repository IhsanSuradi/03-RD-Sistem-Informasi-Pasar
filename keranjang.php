<?php

	include "koneksi.php";
	include "init_session.php";

?>


<!DOCTYPE html>
<html>
    <head>
      <script src="https://code.jquery.com/jquery-git.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
		
<script type="text/javascript">
        $(window).on('load', function () {
            var doc = new jsPDF('p', 'pt', 'letter');
            var specialElementHandlers = {
                '#bypassme': function (element, renderer) {
                    return true;
                }
            };
			
			
            $('#pdfview').click(function () {
                doc.fromHTML($('#pdfdiv').html(), 15, 15, {
                    'width': 300,
                    'elementHandlers': specialElementHandlers
                });
                doc.save('keranjang.pdf');
            });
        });
    </script>


        <!-- /.website title -->
        <title>KERANJANG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="print.css">
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
                    <div class="col-md-10 col-md-offset-1 text-center">
						<div class="head-btn wow fadeInLeft">
                                  <p>&nbsp;</p>
								  <div align="left"><a href="infobarang.php" class="btn-default"><<< KEMBALI</a>
                                    
                                  </div>
							</div>
                        <!-- /.logo -->
                        <div class="logo wow fadeInDown" style="margin-top: 50px"> <a href=""><img src="images/logo.png" alt="logo"></a></div>

                        <!-- /.main title -->
                        <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                            Keranjang Anda
                        </h2>

                    </div>
                </div> 
            </div> 
        </div>

    <div id="shortcode-table">
            <div class="container" id="pdfdiv">
			<div id="table">
                <table width="78%" class="table table-bg table-bordered">
                    <thead>
                        <tr>
                            <th width="24%" class="text-center">Nama Barang</th>
                            <th width="24%" class="text-center">Nama Toko</th>
                            <th width="15%" class="text-center">Jumlah Barang</th>
                            <th width="37%" class="text-center">Harga Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "basket_query.php"; ?>
						<!--<tr>
                            <td>Cabe</td>
                            <td>Toko Damai Indah </td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- 
                              <input type="submit" name="Submit2" value="Hapus" align="right">
                            </strong>
                                                         </td>
                        </tr>
                        <tr>
                            <td>Tomat</td>
                            <td>Rukoh Toko </td>
                            <td class="text-center"><strong>1 Kg  </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- <input type="submit" name="Submit2" value="Hapus" align="right"></strong></td>
                        </tr>
                        <tr>
                            <td>Toge</td>
                            <td>Lamnyong Toko </td>
                            <td class="text-center"><strong>1 Ons  </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- <input type="submit" name="Submit2" value="Hapus" align="right"> </strong></td>
                        </tr>
                        <tr>
                            <td>Tempe</td>
                            <td>Swalayan</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="Hapus" align="right"></strong></td>
                        </tr>
                        <tr>
                            <td>Ikan</td>
                            <td>Cafe Cafe </td>
                            <td class="text-center"><strong>1 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="Hapus" align="right"></strong></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">TOTAL :  </td>
                          <td class="text-center">Rp. 40.000,- </td>
                        </tr>-->
                    </tbody>
              </table>
			  
			 </div> 
            </div>
			<div id="editor"></div>
            <div class="head-btn wow fadeInLeft">
                                <a href="index.php" class="btn-default" id="cancel">Cancel</a>
                                <a href="#pdfview" class="btn-primary" id="pdfview">Cetak SLIP</a>
                            </div>
			
        </div>
		
        
        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <hr>
                    <div class="text-center wow fadeInUp">
					<p>Copyright Dinas Perdagangan 2017 - SIP</p>
                      <p><a href="" target="_blank">About Us</a></p>
					</div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>	
            </div>	
        </footer>

        <!-- /.javascript files -->

		<script src="print.js"></script>
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