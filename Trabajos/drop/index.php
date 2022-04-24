<!DOCTYPE html>
<html>
<head>
	<title>Drop</title>
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="files/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="files/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Dropzone -->
  <link rel="stylesheet" href="files/plugins/dropzone/dropzone.css">


  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="files/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



  <!-- SweetAlert 2 https://sweetalert2.github.io/-->
  <script src="files/plugins/sweetalert2/sweetalert2.all.js"></script>

 
   <!-- Dropzone http://www.dropzonejs.com/-->
  <script src="files/plugins/dropzone/dropzone.js"></script>
</head>
<body>


<div class="box-header with-border">
         
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar Producto

        </button>

      </div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Imagenes</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

           


            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================-->

            <div class="form-group agregarMultimedia"> 

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO VIRTUAL
              ======================================-->
              
              <div class="input-group multimediaVirtual" style="display:none">
                
                <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span> 
              
                 <input type="text" class="form-control input-lg multimedia" placeholder="Ingresar código video youtube">

              </div>

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO FÍSICO
              ======================================-->
              
              <div class="multimediaFisica needsclick dz-clickable">

                <div class="dz-message needsclick">
                  
                  Arrastrar o dar click para subir imagenes.

                </div>

              </div>

            </div>

          
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarProducto">Guardar estas imagenes</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>
</body>
<script src="js.js"></script>
</html>