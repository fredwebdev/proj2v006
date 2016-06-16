<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lambillonea</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/css/mdb.css" rel="stylesheet">

    <!-- Template style -->
    <link href="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/css/style.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<nav class="light-green darken-4" role="navigation">
    <div class="container ">
        <a class="white-text" href="{{URL::asset('/')}}">Home</a>
    </div>
</nav>
<!-- contenu principal -->
@yield('contenu')



</body>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/js/bootstrap.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="http://mdbootstrap.com/MDB/live/Simple%20Blog%20Homepage/js/mdb.js"></script>


</body>

</html>