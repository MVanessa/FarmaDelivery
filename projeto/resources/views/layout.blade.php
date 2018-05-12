<!DOCTYPE html>
<html>
<head>
	<title>FarmaDelivery</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
<body>
	<header class="topo">
		<div class="container">
			<h1 class="titulo"><span id="nome">Farma</span>Delivery</h1>
			<nav>
				<ul>
					<li><a href="contato.html">Contato</a></li>
					<li><a href="sobre.html">Quem Somos</a></li>
					<li><a href="{!! url('/pedidos') !!}">Meus Pedidos</a></li>
					<li><a href="{!! url('/login') !!}">Login</a></li>
					<li><a href="{!! url('/logout') !!}">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="box"></div>
	<div class="container">
		@section('conteudo')@show
	</div>
</body>
</html>