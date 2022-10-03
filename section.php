<?php


function showHome(){
    require_once "templates/header.php";
    echo '
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <div class="contenido">
            <div class="catalogo">
              <h1>Nuestros productos</h1>
                <p>
                Nuestros productos son artesanales, siempre buscamos lo natural y que
                sea amigable con el medio ambiente; si bien tenemos nuestra linea
                definida, trabajamos muchas veces con la opiñon de nuestros clientes
                que eligen en base a las opciones que les damos, y a sus necesidades.
                Al ser una tienda online con tienda conceptual, te encontras en un
                lugar donde las ideas innovadoras se unen para mejorar la experiencia.
                Combinamos de manera ecléctica, una variedad de productos y líneas de
                diseño cuidadosamente elaboradas, con el objetivo de perfeccionar e
                innovar en producto.
                </p>
                <p class="oferta">No te pierdas nuestra <span class="textoItalica">Hot-Week</span> en CORTINAS DE GASA!!!</p>
            </div>
            
              <div class="formulario">
                <form id="formTabla">
                  <div class="formFila">
                    <div class="formEtiqueta">
                      <label for="producto">Producto</label>
                    </div>
                    <div class="formValor">
                      <select name="producto" id="producto">
                        <option value="Cortinas">Cortinas</option>
                        <option value="Mantas">Mantas</option>
                        <option value="Pie de cama">Pies de cama</option>
                      </select>
                    </div>
                  </div>
                  <div class="formFila">
                    <div class="formEtiqueta">
                      <label for="variedad">Variedad</label>
                    </div>
                    <div class="formValor">
                      <select name="" id="variedad">
                        <option value="Pintura con relieve">Pintura con relieve</option>
                        <option value="Pintura sin relieve">Pintura sin relieve</option>
                        <option value="Sin pintar">Sin pintar</option>
                        <option value="Terminacion con flecos">Terminacion con flecos</option>
                        <option value="Terminacion con borlas">Terminacion con borlas</option>
                      </select>
                    </div>
                  </div>
                  <div class="formFila">
                    <div class="formEtiqueta">
                      <label for="material">Material</label>
                    </div>
                    <div class="formValor">
                      <select name="" id="material">
                        <option value="Gasa">Gasa</option>
                        <option value="Nido de abeja">Nido de abeja</option>
                        <option value="Tusor">Tusor</option>
                      </select>
                    </div>
                  </div>
                  <div class="formFila">
                    <div class="formEtiqueta">
                      <label for="medida">Medida</label>
                    </div>
                  
                  
                  <div class="formFila">
                    <div class="formEtiqueta">
                      <label for="colores">Colores</label>
                    </div>
                    <div class="formValor">
                      <select name="" id="colores">
                        <option value="Acqua">Acqua</option>
                        <option value="Avellana">Avellana</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Canela">Canela</option>
                        <option value="Cemento">Cemento</option>
                        <option value="Grafito">Grafito</option>
                        <option value="Gris">Gris</option>
                        <option value="Verde">Verde</option>
                      </select>
                    </div>
                  </div>
                  <div class="botonesTabla">
                    <input type="button" class="jsComportamiento" id="agregar1" value="Agregar">
                    <input type="button" class="jsComportamiento" id="agregar3" value="Agregar x 3">
                  </div>
                </form>
              </div>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Variedad</th>
                  <th>Material</th>
                  <th>Medida</th>
                  <th>Colores</th>
                  <th></th>
                </tr>
              </thead>
            <tbody id="insertarTabla">
            </tbody>
            </table>
      
      <div class="formContenedor" id="formContenedor">
        <div id="editarFila" class="formulario ocultar"></div>
      </div>
    </div>  
  </nav>
  ';
    require_once "templates/footer.php";
}

function showProducts($tabla){
    require_once "templates/header.php";
    $limite = $tabla;

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    for ($i = 1; $i <= $limite; $i++) {

        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        for ($j = 1; $j <= $limite; $j++) {
            $multiplicacion = ($i * $j);
            echo "<td> $multiplicacion </td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  echo '<a href="home">volver</a>';
}

