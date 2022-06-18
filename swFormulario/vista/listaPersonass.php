<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="correo" placeholder="Correo">

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label class="label-radio hombre" for="hombre">Hombre</label>

					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label class="label-radio mujer" for="mujer">Mujer</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		 <table class="content-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Sexo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->crud->Listar() as $item) :?>
                    <tr>;
                        <td><?php echo $item->nombre;?></td>
                        <td><?php echo $item->correo;?></td>
                        <td><?php echo $item->sexo;?></td>
                       <!-- adf   <td> 
                            <a href="?c=Producto&a=Formulario&codigo=
                                <?php echo $item->codigo;?>">Editar</a>
                        </td>
                        <td>
                            <a onclick="javascript: return confirm('\
                                ¿Esta seguro de eliminar este producto?';)"
                                href="?c=Producto&a=Eliminar&codigo=
                                <?php echo $item->codigo;?>">Eliminar</a>
                        </td>  -->
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>    
	</div>
	<script src="formulario.js"></script>
</body>
</html>
