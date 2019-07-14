
<?php include('usersession.php');
$bid=$_GET['billid'];
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Auto Scope</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.flipster.css">
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile" style="font-family: trebuchet ms;">
		<div class="header_left">
			<ul>
				<h1><a  href="userpage.php" "><span >AUTO</span><i class="fa fa-wrench" aria-hidden="true"></i>Scope</a><p class="sub-cap">Get your Service Booked</p></h1>
				
			</ul>
		</div>
		<div class="header_right" style="margin-top: 20px;">
		     <?php include('userheader.php'); ?>

		</div>

		<div class="clearfix"></div>
</div>

<!-- //header -->
<h2 style="text-align: center; margin-top: -75px;">YOUR BILL</h2>
<hr>
			<div class="container">

		<div class="row">
		<div class="col-md-2"></div>
				<div class="well login-container col-md-8" style="margin-top: -8px;">
					<h4 class="text-center">My bills </h4>
					<hr>
					<div id='DivIdToPrint'>
					<table class="table table-bordered table-striped table-hover" style="background-color: white; color: black;margin-top: 50px;">
								<tr>
									<th>Sl No.</th>
									<th>Item</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Tax</th>
									<th>Total</th>
								</tr>
								<?php include('con_db.php');
								$i=1;
									$qry=mysql_query("select * from bill_details where billid='$bid'") or die(mysql_error()); $ntotal=0;
									while($row=mysql_fetch_array($qry))
									{
								 ?>
								 <tr>
								 	<td><?php echo $i++;?></td>
								 	<td><?php echo $row['itemname']; ?></td>
								 	<td><?php echo $row['qty']; ?></td>
								 	<td><?php echo $row['price']; ?></td>
								 	<td><?php echo $row['tax']; ?></td>
								 	<td><?php echo $row['total']; ?></td>
								 </tr>
								 <?php $ntotal= $ntotal + $row['total']; } ?>
								 <tr>
								 	<th colspan="5" style="text-align: right;">Grand Sum</th>
								 	<td colspan="6"><input type="text"  value="<?php echo $ntotal; ?>" id="finalamt" class="form-control" readonly=""></td>
								 </tr>
							</table>
							</div>
							<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
				</div>
			</div>		  
		</div>
	</div>
</div>
</div>
<script>
	function printDiv() 
	{
	 
	 
	 	 var divToPrint=document.getElementById('DivIdToPrint');

	    var htmlToPrint = '<head><title></title><style media="print" >tr{page-break-inside: avoid; }</style><link rel="stylesheet" type="text/css" media="screen,print" href="css/bootstrap.css"><link href="font-awesome/css/font-awesome.min.css" media="screen,print" rel="stylesheet" type="text/css"><link href="css/style.css" media="screen,print" rel="stylesheet"><link href="css/bootstrap.min.css" media="screen,print" rel="stylesheet"></head><body>';

	    htmlToPrint += divToPrint.outerHTML;
	    newWin = window.open("");
	    newWin.document.write(htmlToPrint);
	   newWin.focus();
	  
	 	setTimeout(function() {
      newWin.print();
      newWin.close();
                    }, 100);
	}

	
	</script>
<script type="text/javascript">
		$("#password").password('toggle');
	</script>
<!-- //banner -->

	
<!-- footer -->
	<div class="newsletter">
		<?php include('userfooter.php'); ?>
		</div>
<!-- //footer -->
	
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
		<script type="text/javascript" src="js/dscountdown.min.js"></script>
		<script src="js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->

	<!--//scripts--> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<script src="js/modernizr.custom.js"></script>
		
							
	<script src="js/jquery.flipster.js"></script>
<script>

	$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>	
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>