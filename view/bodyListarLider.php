<?php
  $gestionarUsuario = new GestionarUsuario();
  $listarLider  = $gestionarUsuario->ListarLider();
 ?>
<section class="content-header">
      <h1>
        Lista de Lideres
      </h1>
    </p>
</section>
<div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-1 "></div>
            <div class="col-sm-10 col-md-8">

                <div class="panel panel-primary">
        					<div class="panel-heading">
        						<div class="pull-right">
											<a href="#RegistroProve" data-toggle="modal" class="clickable filter btn btn-success"><i class="fa fa-plus" data-toggle="tooltip" title="Añadir nuevo Producto"></i></a>
        							<span class="clickable filter btn btn-info" data-toggle="tooltip" title="Click aqui para buscar un Producto" data-container="body">
        								<i class="fa fa-search"></i>
        							</span>
        						</div><br><br>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="desk">
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre Completo</th>
                            <th class="text-center">Cedula de Identidad</th>
                            <th class="text-center">Sexo</th>
                            <th class="text-center">País</th>
                            <th class="text-center">Ciudad</th>
                          </tr>
                        </thead>
                      </table>
                    </div>

        					</div>
        					<div class="panel-body" style="display: none">
        						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar Proveedores" />
        					</div>
                  <div class="table-responsive" style="height:350px;overflow-y:scroll;;">
                    <table class="table table-hover" id="dev-table" >

                      <tbody class="text-center">

                        <?php
                          $i = 1;

                          for ($listaL=0; $listaL < count($listarLider) ; $listaL++) :
                              //foreach ($listarLider as $listaL): ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $listarLider[$listaL]->getPrimerNombre(); ?></td>
                            <td><?php //echo $listaL->getPrimerNombre() .' '. $listaL->getSegundoNombre() .' '. $listaL->getPrimerApellido() .' '. $listaL->getSegundoApellido();?></td>
                            <td><?php //echo $listaL->getCi() . ' ' . $listaL->getLugarExpedicionCI();?></td>
                            <td><?php //echo $listaL->getSexo();?></td>
                            <td><?php //echo $listaL->getPais();?></td>
                            <td><?php //echo $listaL->getCiudad();?></td>
                          </tr>
                        <?php
                          //echo $i;
                          $i++;
                          //endforeach;
                          endfor;
                        ?>

                      </tbody>
                    </table>
                  </div>
                  </div>

              </div>
              <div class="col-sm-1 col-md-2"></div>
            </div>
    	  </div>
