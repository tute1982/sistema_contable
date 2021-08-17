<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">
        
      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Categoría</th>
           <th>Stock</th>
           <th>Precio Compra</th>
           <th>Precio Venta</th>
           <th>Agregado</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>0001</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>Lorem ipsum</td>
            <td>20</td>
            <td>$ 5.00</td>
            <td>$ 10.00</td>
            <td>2021-08-02 12:05:35</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>  
            </td>

          </tr>
          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>0001</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>Lorem ipsum</td>
            <td>20</td>
            <td>$ 5.00</td>
            <td>$ 10.00</td>
            <td>2021-08-02 12:05:35</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>  
            </td>

          </tr>
          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>0001</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>Lorem ipsum</td>
            <td>20</td>
            <td>$ 5.00</td>
            <td>$ 10.00</td>
            <td>2021-08-02 12:05:35</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>  
            </td>

          </tr>
          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>0001</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>Lorem ipsum</td>
            <td>20</td>
            <td>$ 5.00</td>
            <td>$ 10.00</td>
            <td>2021-08-02 12:05:35</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>  
            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->
<div id="modalAgregarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
        <div class="modal-body">
          <div class="box-body">
            <!-- ENTRADA PARA EL CODIGO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>
              </div>
            </div>
            <!-- ENTRADA PARA LA DESCRIPCION -->
             <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
              </div>
            </div>
            <!-- ENTRADA PARA SELECCIONAR LA CATEGORIA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                <select class="form-control input-lg" name="nuevaCategoria">
                  <option value="">Selecionar categoría</option>
                  <option value="Taladros">Taladros</option>
                  <option value="Andamios">Andamios</option>
                  <option value="Equipos">Equipos</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA STOCK -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 
                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
              </div>
            </div>
            
            <div class="form-group row">
              <!-- ENTRADA PARA PRECIO COMPRA -->
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 
                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio Compra" required>
                </div>
              </div>
            <!-- ENTRADA PARA PRECIO VENTA -->
              <div class="col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio Venta" required>
                </div>
                <br>
                <!-- CHECK PARA PORCENTAJE -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <label><input type="checkbox" class="minimal porcentaje" checked> Utilizar Porcentaje</label>
                  </div>
                </div>
                <!-- ENTRADA PARA PORCENTAJE -->
                <div class="col-xs-6" style="padding:0">
                  <div class="input-group">
                  <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40">
                  <span class="input-group-addon"><i class="fa fa-percent"></i></span> 
                  </div>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->
             <div class="form-group">
              <div class="panel">SUBIR IMAGEN</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-block">Peso máximo de la foto 2 MB</p>
              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>
          </div>
        </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar producto</button>
        </div>

      </form>

    </div>

  </div>

</div>


