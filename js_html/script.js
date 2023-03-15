//Actividad 1
const listaNumerosImpares = document.getElementById("numeros-impares");

for (let i = 101; i <= 149; i += 2) {
  const li = document.createElement("li");
  li.textContent = i;
  listaNumerosImpares.appendChild(li);
}

//Actividad 2
function calcular() {
  const input1 = document.getElementById("input1");
  const input2 = document.getElementById("input2");
  const resultado = document.getElementById("resultado");
  const num1 = parseInt(input1.value);
  const num2 = parseInt(input2.value);

  if (Number.isNaN(num1) || Number.isNaN(num2)) {
    resultado.textContent = "Ingrese dos números enteros";
  } else {
    resultado.textContent =
      "Suma: " +
      (num1 + num2) +
      " Resta: " +
      (num1 - num2) +
      " Multiplicación: " +
      num1 * num2 +
      " División: " +
      num1 / num2;
  }
}

//Actividad 4

let vehiculo = [
  { color: "rojo", marca: "bmw", capacidad: 11 },
  { color: "azul", marca: "fiat", capacidad: 2 },
  { color: "negro", marca: "hyundai", capacidad: 6 },
  { color: "amarillo", marca: "jeep", capacidad: 15 },
  { color: "azul", marca: "citroen", capacidad: 20 },
  { color: "azul", marca: "renault", capacidad: 12 },
  { color: "rojo", marca: "ford", capacidad: 4 },
  { color: "gris", marca: "toyota", capacidad: 8 },
];

function filtrarVehiculos(vehiculos) {
  const vehiculosFiltrados = vehiculos.filter(
    (v) => v.color === "azul" && v.capacidad > 10
  );
  vehiculosFiltrados.forEach((v) => {
    const lista = document.getElementById("vehiculos-lista");
    const li = document.createElement("li");
    li.appendChild(
      document.createTextNode(
        `${v.marca} (${v.color}, capacidad: ${v.capacidad})`
      )
    );
    lista.appendChild(li);
  });
}

filtrarVehiculos(vehiculo);
