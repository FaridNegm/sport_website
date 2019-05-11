<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Css Files -->
    <link href="{{ url('website') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/slick-slider.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/fancybox.css" rel="stylesheet">
    <link href="{{ url('website') }}/style.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/color.css" rel="stylesheet">
    <link href="{{ url('website') }}/css/responsive.css" rel="stylesheet">
    <!--/!--[if lte IE 9]--> <link rel="stylesheet" href="../../css/chosen.html"> <!--[endif]--//-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('header')
</head>
<body>

    @include('website/nav')

    @yield('content')

    @include('website/footer')


    <!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="{{ url('website') }}/script/jquery.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/slick.slider.min.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/fancybox.pack.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/isotope.min.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/progressbar.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/counter.js"></script>
    <script type="text/javascript" src="{{ url('website') }}/script/functions.js"></script>


    @yield('footer')

</body>
</html>
