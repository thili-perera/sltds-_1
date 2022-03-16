<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.head')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    @include('Layout.sidebar')
                </div>
            </div>

            <!-- top navigation -->
            @include('Layout.nav')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @yield('content')                
            </div>
            <!-- /page content -->

            <!-- footer content -->
            @include('Layout.footer')
            <!-- /footer content -->
        </div>
    </div>

    @include('Layout.foot')

</body>

</html>