<?php
/**
* Template Name: Design Review
*/
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Design Review Page</title>
        <style>
        main {position: initial !important;}
		header.banner { display: none;}
		.content-info .container {display: none;}
		#approval_overlay {display: block;}

		.text-center {
			position: absolute;
			top:1em;
			left:0em;
			width:100%;
			z-index: 1;
		}
        </style>
        <script type='text/javascript'>
       	<?php //get bugherd ?>
        </script>
        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php 
    $url = $_SERVER[REQUEST_URI];
	$v = explode('v=',$url)[1];
	$page = explode('page=',$url)[1];

    $designs = get_field('design',18); 
    $count = count(get_field('design',18)); 
    debug($v)
    ?>
        <div class="text-center">
            <img style="width:100%;" src="<?php echo get_field('design',18)[$view]['file'][$page]['url']; ?>" alt="">
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>