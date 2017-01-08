<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>{{$title}} BotMan - Create messaging bots in PHP with ease</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BotMan - Create messaging bots in PHP with ease">
    <meta name="author" content="Marcel Pociot">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-blue">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="/">
                            <div class="botman">
                                <img src="/img/botman-body.png" class="botman-body" height="100" />
                                <img src="/img/botman-leg-left.png" class="botman-leg-left" height="27" />
                                <img src="/img/botman-leg-right.png" class="botman-leg-right" height="26" />
                            </div>
                        </a>
                    </h1>
                </div><!--//branding-->
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                        @yield('content')
                        </div>
                    </div>
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            @include('partials.nav')
                        </nav>
                    </div><!--//doc-sidebar-->
                </div>
            </div>
        </div>

        <!-- Main Javascript -->          
        <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>                                                                
        <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
</body>