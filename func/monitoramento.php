<?php
include('backend/equipamentos.php');
include('backend/comandos.php');


?>
<div class="col-xl-6 col-md-2 mb-4 float-left mt-4">
	<div class="card shadow mb-4">
		<a href="#filesystem" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="filesystem">
			<h6 class="m-0 font-weight-bold text-dark">Filesystems</h6>
		</a>

		<div class="collapse hide" id="filesystem">
			<div class="card-body">

			<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
						FileSystems</div></br>
					<div class="h5 mb-0 font-weight-bold text-dark">
						<?php $t = new monitoramento;
						$t->FileSystem(); ?>

					</div>



			</div>
		</div>

	</div>
</div>
<div class="col-xl-6 col-md-2 mb-4 float-right mt-4">
	<div class="card shadow mb-4">
		<a href="#prognotas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="prognotas">
			<h6 class="m-0 font-weight-bold text-dark">Programas de notas</h6>
		</a>

		<div class="collapse hide" id="prognotas">
			<div class="card-body">
				<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
					Programas de notas</div></br>
				<div class="h5 mb-0 font-weight-bold text-dark">
					<?php $t = new monitoramento;
					$t->verificaProg(); ?>

				</div>




			</div>
		</div>

	</div>
</div>

<div class="col-xl-6 col-md-2 mb-4 float-left">
	<div class="card shadow mb-4">
		<a href="#servers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="servers">
			<h6 class="m-0 font-weight-bold text-dark">Status Servidores</h6>
		</a>

		<div class="collapse hide" id="servers">
			<div class="card-body">

			<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
			Servidores</div><hr>
					<div class="h5 mb-0 font-weight-bold text-dark">
						<?php $t = new monitoramento;
						$t->DadosServers(); ?>

					</div>
			



			</div>
		</div>

	</div>
	
</div>

<div class="col-xl-6 col-md-2 mb-4 float-left">
	<div class="card shadow mb-4">
		<a href="#impre" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="impre">
			<h6 class="m-0 font-weight-bold text-dark">Status Impressoras</h6>
		</a>

		<div class="collapse hide" id="impre">
			<div class="card-body">

			<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
			Impressoras</div><hr>
					<div class="h5 mb-0 font-weight-bold text-dark">
						<?php $t = new monitoramento;
						$t->BuscaDadosToners(); ?>

					</div>
			



			</div>
		</div>

	</div>
	
</div>


