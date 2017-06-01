<section class="content-header">
      <h1>
        Registrar Colportor
      </h1>
    </p>
    </section>
<section class="content">
<div class="col-md-10">
          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Registrar</a></li>
              <li><a href="#timeline" data-toggle="tab">Editar</a></li>
              <li><a href="#timeline" data-toggle="tab">Dar de Baja</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="settings">
                <form class="form-horizontal" action="menuCoordinador.php?modo=InserColportor" method="POST">
                  <div class="form-group">
                    <label for="primerNombre" class="col-sm-2 control-label">Primer Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="primerNombre" name="primerNombre" placeholder="Primer Nombre">
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="segundoNombre" class="col-sm-2 control-label">Segundo Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" placeholder="Segundo Nombre">
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="primerApellido" class="col-sm-2 control-label">Primer Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Primer Apellido">
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="segundoApellido" class="col-sm-2 control-label">Segundo Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="SegundoApellido">
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="ci" class="col-sm-2 control-label">Cedula de Identidad</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de Identidad">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="expedicionCI" name="expedicionCI" placeholder="Expedito">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="fechaNacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="lugarNacimiento" class="col-sm-2 control-label">Lugar de Nacimiento</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" placeholder="Lugar de Nacimiento">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sexo" class="col-sm-2 control-label">Genero</label>
                    <div class="col-sm-10">
                      <select id="sexo" name="sexo" class="form-control">
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pais" class="col-sm-2 control-label">Pais</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pais" name="pais" placeholder="País">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gradoAcademico" class="col-sm-2 control-label">Grado Académico</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="gradoAcademico" name="gradoAcademico" placeholder="Grado Académico">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="universidad" class="col-sm-2 control-label">Universidad</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="universidad" name="universidad" placeholder="Universidad">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="facultad" class="col-sm-2 control-label">Facultad</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facultad" name="facultad" placeholder="Facultad">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="carrera" class="col-sm-2 control-label">Carrera</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Carrera">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="celular" class="col-sm-2 control-label">Celular</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Subir Fotografia</label>
                    <div class="col-sm-10">
                      <input type="file" id="InputFile">
                    </div>
                  </div>

                  <div class="form-group" align="center">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
</div>
</section>
</div>
