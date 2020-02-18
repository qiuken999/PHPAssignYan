
<!-- 'base' view, other views extend this -->
<!-- Author: Yan Zhang                    -->
<!-- Created Date: Feb 16, 2020           -->
<!-- Modified Date: Feb 17, 2020          -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=”utf-8”> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/SDAssignYZ/home">Movie Inventory</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- active handle using Request -->
                <li class="{{ Request::is('movieInfo') ? 'active' : '' }}">
                    <a class="nav-link" href="http://localhost/SDAssignYZ/movieInfo">Movie Information <span class="sr-only">(current)</span></a>
                </li>
                <li class="{{ Request::is('actorInfo') ? 'active' : '' }}">
                    <a class="nav-link" href="http://localhost/SDAssignYZ/actorInfo">Actor Information </a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="http://localhost/SDAssignYZ/contact">Contact </a>
                </li>
            </ul>
        </div>

    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>
    <br>
</body>

<!-- fixed footer -->
<footer class="page-footer font-small" style="background-color: rgba(158, 158, 158, 0.1); 
    position:fixed; bottom:0; width: 100%;">
    <div class="container-fluid text-center text-md-left">
        <div class="footer-copyright text-center py-3" style="color: black">© 2020 Copyright:
            <a href="http://127.0.0.1:8000/home"> Movie Inventory</a>
        </div>
    </div>
</footer>
</html>