<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <?php
            if($obj->codigo != null){
                echo 'Actualización';
            }
            else{
                echo 'Nuevo Registro';
                $obj->codigo = -1;
            }
             ?>
        <br>
        <form action="?c=Producto&a=Crear" method="POST">
            <div>
                <label>Codigo</label>
                <input type="text" name="codigo" 
                       value="<?php echo $obj->codigo; ?>"
                >
            </div>
            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" 
                       value="<?php echo $obj->nombre; ?>"
                       placeholder="Ingrese nombre"
                       required>   
            </div>
            <div>
                <label>Precio</label>
                <input type="text" name="precio" 
                       value="<?php echo $obj->precio; ?>"
                       placeholder="Ingrese precio"
                       required>
            </div>            
            <hr />
            <div>
                <button>Guardar</button>
            </div>
        </form>
      
    </body>
</html>
