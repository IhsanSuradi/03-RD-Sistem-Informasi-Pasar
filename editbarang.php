<?php
include "getedit_barang.php";
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>PROFILE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="css/css-app.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-app-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1325" data-diff="100">

            
							<p align="left">&nbsp;</p>
							<p align="left"><a align="left" href="profile.php" class="btn-default"><< Kembali</a> </p>
							<p align="left">&nbsp;</p>
							<p align="left">&nbsp;</p>
							<!-- Name Section -->
  
 
	  
      <p>&nbsp;</p>
    <div class="row">
    <div class="col-md-8 col-md-offset-1">
	  <?php
		if (isset($_GET["edit"])){
			echo "<script>";
			echo "alert('Barang berhasil diubah!')";
			echo "</script>";
		}
	  ?>
      <form method="POST" action="doedit_barang.php" name="tambahbarang">
        <input type="hidden" name="idlist" value="1">
		<input type="hidden" name="origin" value="editbarang.php?edit=1">
		<table width="638" align="center">
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="namabarang" value="<?php print $nama_barang; ?>" size="32" placeholder="Nama Barang" class="form-control">
            </p>
            </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="jumlahstock" value="<?php print $jumlah_barang; ?>" size="32" placeholder="Jumlah Stock (KG)" class="form-control">
            </p>
             </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="hargabarang" value="<?php print $harga_barang; ?>" size="32" placeholder="Harga Barang ( Per Kg )" class="form-control">
            </p>
            </td>
          </tr>
		  <tr valign="baseline">
            <td><div align="right">
              <input type="reset" value="Batal" class="btn btn-primary">
              <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
            </div></td>
			<td>&nbsp;</td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="tambahbarang">
      <input type="hidden" name="id">
</form>
	  </div>
     </div>
      <p>&nbsp;</p>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->



      
        <!-- /.footer -->
        
					<p align="center">Copyright Dinas Perdagangan 2017 - SIP</p>
                      <p align="center"><a href="" target="_blank">About Us</a></p>
				 

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/ekko-lightbox-min.js"></script>
        <script type="text/javascript">
            $( document ).delegate( '*[data-toggle="lightbox"]', 'click', function ( event ) {
                event.preventDefault();
                $( this ).ekkoLightbox();
            } );
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
