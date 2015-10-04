<!DOCTYPE html>
<html>
	<head>

		<title>@yield('title')</title>

		{!! Helpers::css() !!}
		{!! Helpers::js()  !!}

		<link rel="stylesheet" type="text/css" href="/jumbotron-narrow.css">

		<style>
			body {
				background-image: url(subtle-pattern.png);
			}

			.container {
				background-color: white;
				border: 1px solid #333;
				border-radius: 10px;
				box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, .75);
			}

			label {
				display: block;
				margin: 0;
			}

			.help-block {
				margin-top: 0;
				margin-bottom: 0;
				font-size: .75em;
			}

			div .radio-inline:last-child {
				margin-left: 0;
				padding-left: 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header clearfix">
				<h1 class="text-muted">@yield('title')</h1>
			</div>

			<div class="row marketing">
				<div class="col-lg-12">
					@yield('content')
				</div>
			</div>

			<footer class="footer">
				<p>© AAACEC 2015</p>
			</footer>
		</div>
	</body>
</html>
