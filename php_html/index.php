<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
</head>
<body>
    <h1>Actividad 1</h1>
    <p>¿Qué es una API?
API (Application Programming Interface) es un conjunto de reglas, protocolos y herramientas que permiten la comunicación entre diferentes aplicaciones o sistemas. Una API proporciona una forma estructurada de intercambiar información y datos entre distintos programas, lo que permite integrar funcionalidades de diferentes sistemas y desarrollar soluciones más complejas.</p>
    <h1>Actividad 2</h1>
    <p>¿Qué es DOCTYPE HTML?
DOCTYPE HTML es una declaración que se utiliza al inicio de un documento HTML para indicar al navegador web qué tipo de documento HTML se está utilizando. Esta declaración es necesaria para que el navegador pueda interpretar correctamente el código HTML y mostrar la página web de forma adecuada. DOCTYPE HTML se utiliza para indicar que el documento sigue las especificaciones HTML5.</p>
    <h1>Actividad 3</h1>
	<table>
		<thead>
			<tr>
				<th>Nombre y Apellido</th>
				<th>Edad</th>
				<th>Área</th>
				<th>Correo</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$empleados = [
				["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com"],
				["Nombre" => "Alberto", "Apellido"=> "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com"],
				["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl"],
				["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl"],
				["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com"],
				["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com"]
			];
			for ($i = 0; $i < count($empleados); $i++) {
				if ($i % 2 == 1) { // si el índice es impar
					echo "<tr>";
					echo "<td>" . $empleados[$i]["Nombre"] . " " . $empleados[$i]["Apellido"] . "</td>";
					echo "<td>" . $empleados[$i]["Edad"] . "</td>";
					echo "<td>" . $empleados[$i]["Area"] . "</td>";
					echo "<td>" . $empleados[$i]["Correo"] . "</td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>

    <h1>Actividad 4</h1>
    <div>
        <?php

$personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);

$max_edad = max($personas);
$persona_max_edad = array_search($max_edad, $personas);

echo "La persona con mayor edad es " . $persona_max_edad . " con " . $max_edad . " años.";

?>
    </div>

    <h1>Actividad 5</h1>
    <div>
    <?php

function cantidad_caracteres($texto) {
  return strlen($texto);
}

$texto = "Hola Mundo!";
echo "La cantidad de caracteres en \"" . $texto . "\" es " . cantidad_caracteres($texto) . ".";

?>
    </div>
    


</body>
</html>
