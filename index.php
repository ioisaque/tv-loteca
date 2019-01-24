<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TV Loteca</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<?php $url = 'http://www.sige.pro.br/padraoWeb/divulgacao_online/'; ?>
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?=$url;?>favicon.png">
		<link rel="apple-touch-icon" href="<?=$url;?>favicon_60x60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?=$url;?>favicon_76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?=$url;?>favicon_120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?=$url;?>favicon_152x152.png">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

		<!-- Global Scripts -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>

		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<?php include('pages/default/navbar.html'); ?>

		<div id="wrapper">
			<?php (isset($_GET['do']) && file_exists('pages/'.$_GET['do'].'.php')) ? include('pages/'.$_GET['do']).'.php' : include('pages/default/index.html'); ?>
		</div>
		
		<?php include('pages/default/footer.html'); ?>

		<script type="text/javascript" src="js/bootstrap.js"></script> 
		<script type="text/javascript" src="js/SmoothScroll.js"></script> 
		<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
		<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
		<!-- <script type="text/javascript" src="js/contact_me.js"></script>  -->
		<script type="text/javascript" src="js/main.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script type="text/javascript" src="js/teste/jquery.prettyPhoto.js"></script> 
		<script type="text/javascript" src="js/teste/jquery.isotope.js"></script> 
		<!-- Javascripts --> 
		<script type="text/javascript" src="js/teste/main.js"></script>
		<!-- Notify --> 
		<script type="text/javascript" src="js/sendMail.js"></script>
		<script type="text/javascript" src="notify/bootstrap-notify.min.js"></script>

		<!-- fotos cidades fim -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

		<script>
		  $(document).ready(function(){			  
			  
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});

		  $(document).ready(function(){
			$('.resultado-loterias').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: false,
				dots: false,
				pauseOnHover: false,
			});
		});		
		</script>
	</body>
</html>