<!DOCTYPE html>
<html>
<head>
    <title>EnjoyHint Demo</title>
	
    <link href="css/enjoyhint.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css">
    
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/enjoyhint.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Turbo Search</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a class="about" href="#about">About</a></li>
            <li><a class="about" href="#contact">Contact Us</a></li>
        </ul>
    </div>
</nav>
    
<div class="featurette">
    <div class="featurette-inner text-center">
        <div class="input-group input-group-lg">
            <input type="text" placeholder="Search" class="form-control" id="mySearchButton" />
            <span class="input-group-btn">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Options <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Images</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">News Articles</a></li>
                    <li class="divider"></li>
                    <li><a href="">Default</a></li>
                </ul>
            </span>
        </div>
    </div>
</div>
    
<footer class="footer">
    <div class="container"></div>
</footer>
    
<script src="js/hint-sequence.js"></script>
</body>
</html>