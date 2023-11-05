<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asientos</title>
    <link rel="stylesheet" href="StyleA.css">
</head>
<body>
    <!--Inicio header-->
    <header class="header">
        <!--Inicio menu-->
        <div class="menu contenedor">
            <a href="#" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="../imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../Nosotros.php">Nosotros</a></li>
                    <li><a href="../Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
                    <a href="../LoginYRegistro.php" class="btn-1">Login</a>
        </div>
        <!--Fin menu-->        
     </header>
     <!--Fin header-->
     <br><br><br>
    <!--Fin header-->
     <hr>
    <!--Inicio asientos-->

    <div class="movie-container">
        <label>Seleccione una película y hora:</label>
        <select id="movie">
            <?php
            // Conectar a la base de datos (reemplaza con tus credenciales)
            $db_host = 'localhost';
            $db_user = 'id21441003_rodrigomacias08';
            $db_pass = 'Mara081103*';
            $db_name = 'id21441003_cine';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Realizar una consulta para obtener datos de la tabla Funcion
            $sql = "SELECT id_funcion, nombre, horarios, precio FROM Funcion";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id_funcion = $row['id_funcion'];
                    $nombre = $row['nombre'];
                    $horarios = $row['horarios'];
                    $precio = $row['precio'];

                    // Generar una opción para cada registro en la base de datos
                    echo "<option value='$precio'>$nombre ($horarios)</option>";
                }
            } else {
                echo "<option value='0'>No hay funciones disponibles</option>";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </select>
    </div>
  
      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>Disponible</small>
        </li>
        <li>
          <div class="seat selected"></div>
          <small>Seleccionado</small>
        </li>
        <li>
          <div class="seat sold"></div>
          <small>Vendido</small>
        </li>
      </ul>
      <div class="container">
        <div class="screen"></div>
  
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
  
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
      </div>
      
      <p class="text">
        Ha seleccionado <span id="count">0</span> asiento(s) por el precio de: <span id="total"> 0 </span>
      </p>
     
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <div id="paypal-button-container"></div>
    <script>
const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

populateUI();

let ticketPrice = +movieSelect.value;

// Guardar el índice y el precio de la película seleccionada
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Actualizar total y recuento
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
  


  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Obtener datos de localstorage y rellenar la interfaz de usuario
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }
}
console.log(populateUI())
// Evento de selección de película
movieSelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Evento de clic de asiento
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    function updateSeatStatus() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  selectedSeats.forEach((seat) => {
    seat.classList.remove("selected");
    seat.classList.add("sold");
  });
}
    
    updateSelectedCount();
  }
});

// Recuento inicial y conteo total
updateSelectedCount();

const monto = parseInt(total.innerText);

        paypal.Buttons({
        createOrder: (data, actions) => {
        return actions.order.create({
        purchase_units: [{
        amount: {
                value: monto
                        }
                    }]
                });
            },
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData){
                    updateSeatStatus();
                    alert ('transaccion exitosa')
                    console.log(orderData)
                });
            }
        }).render('#paypal-button-container');
        
        function redirigirConValor() {
            window.location.href = "../PDF.php?miValor=" + monto;
        }
    </script>
    <a onclick="redirigirConValor()"class="btn-1">Comprobante de pago</a>
      <!--Inicio footer-->
      <footer class="footer container">
        <h3>TecNopolis</h3>
   
        <ul>
           <li><a href="../index.php">Inicio</a></li>
           <li><a href="../Nosotros.php">Nosotros</a></li>
           <li><a href="../Formulario.php">Contactanos</a></li>
        </ul>
       </footer>
     <!--Fin footer-->
      
</body>
</html>