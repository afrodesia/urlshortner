<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie ieold ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="ie ieold ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie ieold ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">


<title>URL Shortner</title>

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet" href="{{asset("assets/css/reset.normalize.css")}}" type="text/css" />
<link rel="stylesheet" href="{{asset("assets/css/font-awesome/css/font-awesome.min.css")}}" type="text/css" />
<link rel="stylesheet" href="{{asset("assets/css/core.css")}}" type="text/css" />
<link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" type="text/css" />

</head>
<body id="index" class="home">
     
    <section id="header-wrapper">
    	<header class="header-section">
    		<h1>URL Shortner</h1>	
    	</header>
	</section>


	<section id="global-wrapper">
        <h2>Shorten a URL...</h2>

        @if($errors->has('url'))
            <p>{{$errors->first('url') }}</p>
        @endif

        <form action="{{URL::action('make')}}" method="post">
            <input class="url-input" type="url" name="url" placeholder="Enter a URL" autocomplete="off" 
            />
            <!-- {{(Input::on('url')) ? ' value="'. Input::old('url'). '" : '' '}} -->
            <input type="submit" value="Shorten" />
        </form>

	</section>

<!-- SCRIPTS -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="{{asset("assets/js/app.js")}}"></script>

</body>
</html>