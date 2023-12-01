<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Yaho Baba')</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 1;
		}
		nav {
			float: left;
			width: 20%;
			background-color: #f1f1f1;
			height: 100vh;
			position: fixed;
			overflow: auto;
			top: 60px;
			bottom: 0;
			left: 0;
			z-index: 1;
		}
		nav ul {
			list-style-type: none;
			padding: 0;
		}
		nav li a {
			display: block;
			color: #000;
			padding: 8px 16px;
			text-decoration: none;
		}
		nav li a.active {
			background-color: #4CAF50;
			color: white;
		}
		article {
			margin-left: 25%;
			padding: 1px 16px;
			height: 1000px;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<header>
		<h1>Header</h1>
        <a class="btn btn-primary" href="{{ route('home')}}" role="button">Home</a>
        <a class="btn btn-secondary" href="{{ route('about')}}" role="button">About</a>
        <a class="btn btn-success" href="{{ route('contact')}}" role="button">Contact</a>
        <a class="btn btn-danger" href="{{ route('blog')}}" role="button">Blog</a>
	</header>
	<nav>
		<ul>
			<li><a class="active" href="{{ route('home')}}">Home</a></li>
			<li><a href="{{ route('about')}}">About</a></li>
			<li><a href="{{ route('contact')}}">Contact</a></li>
			<li><a href="{{ route('blog')}}">Blog</a></li>
		</ul>
	</nav>
	@yield('content')
	<footer>
		<p>Footer</p>
	</footer>

    @stack('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
