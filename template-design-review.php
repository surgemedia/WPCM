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
	$v_boom = explode('v=',$url)[1];
	$v = explode('?',$v_boom)[0];
	$page = explode('page=',$url)[1];

    $designs = get_field('design',18); 
    $count = count(get_field('design',18));
    $max_page = count(get_field('design',18)[$v]['file'])-1; 
    debug($max_page);
    ?>
        <div class="text-center">
            <img style="width:100%;" src="<?php echo get_field('design',18)[$v]['file'][$page]['url']; ?>" alt="">
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
        document.onkeydown = checkKeycode;
        function checkKeycode()
		{
  		var keycode;
 		 if (window.event)
   		 keycode = window.event.keyCode;
  		else
   		 if (e) keycode = e.which;

  		switch (keycode)
 		 {
    		case 37:  // left arrow
      		if(<?php echo $page-1 ?> != -1){
      		new_url = window.location.href.split('page=')[0]+"page="+"<?php echo $page-1 ?>";
      		document.location.href = new_url;
      		}
    		break;

    		case 39:  // right arrow
    		
      		new_url = window.location.href.split('page=')[0]+"page="+"<?php echo $page+1 ?>";
      		document.location.href = new_url;
    		break;
  		}
		}
		checkKeycode(e);
        function nextImg(max){
        	$('img').click(function(event) {
        	var current;
        	var new_url;
        	current = window.location.href
        	if(max != <?php echo $page ?>){
        	new_url = window.location.href.split('page=')[0]+"page="+"<?php echo $page+1 ?>";
        	} else {
        	new_url = window.location.href.split('page=')[0]+"page="+<?php echo 0 ?>;
        	}
        	console.log(new_url)
        	document.location.href = new_url;
        	});
        }
        nextImg(<?php echo $max_page ?>);
        </script>
    </body>
</html>