<?php 
include '../base/header.php';
include 'logica-usuario.php';
include '../nav/nav.php';
?>
<body>
	<?php 
	if (usuarioEstaLogado()) { 

		?>
		<main>
			<div class="container container-fluid">
				<h1 class="text-warning text-center">Bem vindo ao Hospital Livre</h1>

				<p class="text-success text-right">Você esta logado como <?= usuarioLogado()?></p> 

				<button class="btn btn-danger text-right"><a href="logout.php">Sair</a></button>




				<?php
				include '../cadastros/content.php';
			} else { ?>
			<h5 class="text-center text-info">Faça login para acessar ao sistema</h5>
			<hr>

			<h2>Login</h2>
			<form action="login.php" method="post">
				<table class="table table-hover">
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control"></td>
					</tr>

					<tr>
						<td>Senha</td>
						<td><input type="password" class="form-control" name="senha"></td>
					</tr>

					<tr>
						<td></td>
						<td><button class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</form>
		</div>
	</main>
</body>
<?php } include '../base/footer.php'; ?>