<header>
	<nav class="navbar navbar-inverse navbar-static-top"><!-- navbar-default navbar-fixed-top -->
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo $this->titulo; ?></a>
			</div><!-- .navbar-header -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li<?php if (isset($nav_registroponto)) echo ' class="active"'; ?>>
						<a href="<?php echo (isset($nav_registroponto)) ? '#' : site_url(); ?>">Registro de Ponto</a>
					</li>
                    <li<?php if (isset($nav_infoprodutos)) echo ' class="active"'; ?>>
                        <a href="<?php echo (isset($nav_infoprodutos)) ? '#' : site_url('infoprodutos'); ?>">Infoprodutos</a>
                    </li>
                    <li<?php if (isset($nav_receitas)) echo ' class="active"'; ?>>
                        <a href="<?php echo (isset($nav_receitas)) ? '#' : site_url('receitas'); ?>">Receitas</a>
                    </li>
                    <li<?php if (isset($nav_curriculos)) echo ' class="active"'; ?>>
                    	<a href="<?php echo (isset($nav_curriculos)) ? '#' : site_url('curriculos'); ?>">Currículos</a>
                    </li>
				</ul>

				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
								<?php echo $this->geral_model->usuario_atual(); ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('auth/logout'); ?>">Desconectar</a></li>
							</ul>
						</li><!-- .dropdown -->
					</ul>
				</div><!-- .navbar-right -->
			</div><!-- .collapse -->
		</div>
	</nav>
</header><?php echo PHP_EOL; ?>
