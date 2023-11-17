<style>
   div{
      display: inline-block;
   }
   .tela {
      border: 5px solid;
      position: absolute;
      top: 6.5em;
      left: 1em;
      width: 95%;
      height: 80%;

   }

  
</style>
<?php 
include('backend/equipamentos.php');
include('backend/comandos.php');


?>

<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">

		</div>
		<div class="row">
			<div class="col-xl-4 col-md-4 mb-5">
				<div class="card border-left-success shadow h-100 ">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
									Desktops</div></br>
								<div class="h5 mb-0 font-weight-bold text-dark">
                       <?php $t = new Setores;
                       $t->equipamentos($equipamentos_gerencia,'desk');
                       ?>

								
								</div>
								<div class="h7 text-secundary mb1">


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-4 mb-5">
				<div class="card border-left-primary shadow h-100 ">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
									Impressoras</div></br>
								<div class="h5 mb-0 font-weight-bold text-dark">

                        <?php $t = new Setores;
                       $t->equipamentos($equipamentos_gerencia,'impressora');
                       ?>
									
								
								</div>
								<div class="h7 text-secundary mb1">
							


								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-md-4 mb-5">
				<div class="card border-left-warning shadow h-100 ">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h6 font-weight-bold text-primary text-uppercase mb-1">
									Impressoras Zebra </div></br>
							
								<div class="h5 mb-0 font-weight-bold text-dark">
                        <?php $t = new Setores;
                       $t->equipamentos($equipamentos_gerencia,'zebra');
                       ?>
								
								
								</div>
								<div class="h7 text-secundary mb1">
								


								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		