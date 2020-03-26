<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('tituloPagina')</title>
	<meta charset="utf-8">
	<meta name="keywords" content="legendas,legenders,legendas de filmes,legendas de séries,tradução de filmes,tradução de séries">
	<meta name="author" content="Traduvert">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
	<header>
		<div class="container">
			<div class="menu-topo">
				<div class="logo"></div>
				<nav class="desktop">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="series.php">Séries</a></li>
						<li><a href="filmes.php">Filmes</a></li>
						<li><a href="traduzir.php">Faça Parte</a></li>
						<li class="btn-nav"><a href="login_cadastro.php">Login - Cadastro</a></li>
                        <li><div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Pesquisar...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
                        </li>
					</ul>
				</nav><!--desktop-->
				<nav class="mobile">
					<h3><i class="fa fa-bars"></i></h3>
					<ul>
                        <li><a href="index.php">Inicio</a></li>
						<li><a href="series.php">Séries</a></li>
						<li><a href="filmes.php">Filmes</a></li>
						<li><a href="traduzir.php">Faça Parte</a></li>
						<li class="btn-nav"><a href="login_cadastro.php">Login - Cadastro</a></li>
                        <li><div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Pesquisar...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
                        </li>
					</ul>
				</nav><!--mobile-->
				<div class="clear"></div>
			</div><!--menu-topo-->
		</div><!--container-->
	</header>


    <!-- DIFERENTE (conteudo) ABAIXO -->
    @yield('conteudo')

    <!-- Diferente acima -->


  <script src="js/jquery.js"></script>
	<script>
		$('nav.mobile h3').click(function(){
			$('nav.mobile').find('ul').slideToggle();
		})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
