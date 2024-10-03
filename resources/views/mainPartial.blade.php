<!doctype html>
<html lang='en'>
    <head>
        <title>Form Test Demo</title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="body">
        <header>
            <!-- Side Navbar -->
            <nav id="sidebarMenu" class="collapse navbar-collapse d-lg-block sidebar collapse navbarExtras">
                <div class="position-sticky">
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <a href="/" class="navbarExtra list-group-item-action ripple" aria-current="true">
                            <i class="fas fa-chart-line fa-fw me-3"></i><span class="nav-text">Home / Admin</span>
                        </a>            
                        <a href="/createNewCustomer" class="navbarExtra list-group-item-action ripple">
                            <i class="fas fa-chart-line fa-fw me-3"></i><span class="nav-text">Create New Customer</span>
                        </a>
                        <a href="/viewCustomers" class="navbarExtra list-group-item-action ripple">
                            <i class="fas fa-chart-line fa-fw me-3"></i><span class="nav-text">View Customers</span>
                        </a>
                        <a href="/" class="navbarExtra list-group-item-action ripple">
                            <i class="fas fa-chart-line fa-fw me-3"></i><span class="nav-text">etc</span>
                        </a>
                        <a href="" class="list-group-item list-group-item-action py-2 ripple"><span class="text-danger">Logout</span></a>
                    </div>
                </div>
            </nav>

            <!-- Top Navbar -->
            <nav id="main-navbar" class="navbar navbar-ontop navbar-expand-lg navbar-light fixed-top">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="sideBarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon navbar-light"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="" height="50" alt="Logo" loading="lazy"/>
                    </a>

                    <!-- Search form -->
                    <form class="d-none d-md-flex input-group w-auto my-auto">
                        <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search' style="min-width: 225px;"/>
                    </form>
                </div>
            </nav>
        </header>

        <main>
            @yield('page-content')
        </main>
    </body>
</html>