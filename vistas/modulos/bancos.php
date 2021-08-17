<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Bancos
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Bancos</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarBanco">
          Agregar banco
        </button>
      </div>
      <div class="box-body">
      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Banco</th>
           <th>Nro. Cuenta</th>
           <th>Tipo</th>
           <th>Moneda</th>
           <th>Nro. CBU</th>
           <th>Acciones</th>
         </tr> 
        </thead>
        <tbody>
          
          <?php
            $item = null;
            $valor = null;
            $bancos = ControladorBancos::ctrMostrarBancos($item, $valor);
            
            foreach($bancos as $key => $value) {
              echo '<tr>
                <td>'.($key+1).'</td>
                <td>'.$value["banco"].'</td>
                <td>'.$value["cuenta"].'</td>
                <td>'.$value["tipo"].'</td>
                <td>'.$value["moneda"].'</td>
                <td>'.$value["cbu"].'</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>  
                </td>
              </tr>';
            }

          ?>

        </tbody>

       </table>
      </div>
    </div>
  </section>

</div>

<!--=====================================
MODAL AGREGAR BANCO
======================================-->
<div id="modalAgregarBanco" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar banco</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-university"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevoBanco" placeholder="Ingresar banco" required>
              </div>
            </div>
            <!-- ENTRADA PARA LA CUENTA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-crosshairs"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevaCuenta" placeholder="Ingresar número de cuenta" required>
              </div>
            </div>
            <!-- ENTRADA PARA LA CUENTA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevoCbu" placeholder="Ingresar número de CBU" required>
              </div>
            </div>
            <!-- ENTRADA PARA SELECCIONAR EL TIPO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                <select class="form-control input-lg" name="nuevoTipo">
                  <option value="">Selecionar tipo</option>
                  <option value="Caja de Ahorros">Caja de Ahorros</option>
                  <option value="Cuenta Corriente">Cuenta Corriente</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA SELECCIONAR LA MONEDA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-anchor"></i></span> 
                <select class="form-control input-lg" name="nuevaMoneda">
                  <option value="">Selecionar moneda</option>
                  <option value="Pesos">Pesos</option>
                  <option value="Dolares">Dolares</option>
                  <option value="Euros">Euros</option>
                </select>
              </div>
            </div>

          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar banco</button>
        </div>
        <?php
          $crearBanco = new ControladorBancos();
          $crearBanco->ctrCrearBanco();
        ?>
      </form>
    </div>
  </div>
</div>


