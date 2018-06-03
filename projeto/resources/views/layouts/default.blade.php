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
		<h1 class="titulo"><span id="nome">Farma</span>Delivery</h1>
		<div class="container">
			<nav>
				<ul>
					<li><a href="{!! url('/home') !!}">Home</a></li>
					<li><a href="{!! url('/medicamentos') !!}">Medicamentos</a></li>
					@can ('doPerfil',1)
						<li><a href="{!! url('/pedidos') !!}">Meus Pedidos</a></li>
					@endcan
					<li>
					@if (!Auth::check())
						<a href="{!! url('/login') !!}">Login</a>
					@else
						<a href="{!! url('/logout') !!}">Logout</a>
					@endif
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="box"></div>
	<div class="container">
		@section('conteudo')@show
	</div>

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/exibecampos.js"></script>
	<script type="text/javascript" src="/js/buscar.js"></script>
</body>
</html>
