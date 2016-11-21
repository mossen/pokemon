<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pokemon | @yield('title')</title>


    <link href="{{URL::to('css/all.css')}}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('favicon.ico')}}" />
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" />


    <!-- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="http://jplist.com/content/css/vendor/jquery-ui.css" />
    <link href="http://jplist.com/content/css/jplist.demo-pages.min.css?v=1" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.core.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.history-bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jplist.com/content/css/jplist.jquery-ui-bundle.min.css" rel="stylesheet" type="text/css" />


    <!-- js -->
    <script src="http://jplist.com/content/js/vendor/modernizr.min.js"></script>
    <script src="http://jplist.com/content/js/vendor/jquery.lazyload.min.js"></script>


    <script src="http://jplist.com/content/js/vendor/jquery-ui.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.core.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.filter-dropdown-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.filter-toggle-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.history-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.jquery-ui-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.pagination-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.sort-bundle.min.js"></script>
    <script src="http://jplist.com/content/js/jplist/5.2.0/jplist.textbox-filter.min.js"></script>



    <script src="js/all.js"></script>

        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
        @include('partials.navigation')

        <main class="@yield('classes')">
        @section('main')

        @show
        </main>
        @include('partials.footer')
    

</body>

</html>
