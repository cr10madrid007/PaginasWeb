function trabajadores(a){

    if(a=='add'){
        
        $(function(){
            $('#contTrabajadores form').remove();
            $("#contTrabajadores").append("<form  id='frmajax'  method='POST' enctype='multipart/form-data' class='formulario' name='frmajax'> <fieldset>"
                +"<legend>Llene todos los campos</legend><div class='contenedor-campos'>"
                +"<div class='campo'><input class='input-text' type='text' placeholder='Nombre' name='nombre'  required> </div>"
                +"<div class='custom-input-file'><input class='input-file' type='file' name='archivo' value='' required>Subir Fotografia <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-bar-up' width='20' height='20' viewBox='0 0 24 24' stroke-width='2.5' stroke='#ffc107' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='12' y1='4' x2='12' y2='14' /><line x1='12' y1='4' x2='16' y2='8' /><line x1='12' y1='4' x2='8' y2='8' /><line x1='4' y1='20' x2='20' y2='20' /></svg> </div>"
                +"</div>"
                +"<div class='cruz'> <input type='button' id='btnguardar' onclick='add();' value='Enviar' name='btnguardar'  class='boton w-sm-100'></div>"
                +"</fildset>"
                +"</form>"
                
                )
          })
    }

    if(a=='del'){
        $(function(){
            $('#contTrabajadores form').remove();
            $("#contTrabajadores").append("<form action='../php/trabajadoresDel.php'  method='POST' enctype='multipart/form-data' class='formulario' name='enviar'> <fieldset>"
                +"<legend>Coloque el ID</legend><div class='contenedor-campos'>"
                +"<div class='campo'><input class='input-text' type='text' placeholder='Ingresa el ID del Empleado' name='id'  required> </div>"
                +"</div>"
                +"<div class='cruz'> <input type='submit' value='Eliminar' name='Eliminar'  class='boton w-sm-100'></div>"
                +"</fildset>"
                +"</form>"
                
                )
          })
      
    }




}


