<!DOCTYPE html>
<html lang="es">
  <head>
    <title>encuestas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <!-- material icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <!-- materialize css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
  </head>
  <body>
    <nav class="nav-wrapper black">
      <a href="#" class="brand-logo center">flash mobile</a>
    </nav>
    <main class="container">
      <header class="center">
        <h1 class="flow-text">encuesta de usuarios flash mobile</h1>
      </header>
      <!--encuesta Flash Mobile-->
      <section>
        <form id="encuesta" class="row">
          <div class="card-content">
          <div class="input-field col s6">
            <label for="caja1">nombre completo</label>
            <input
              type="text"
              id="caja1"
              name="name"
              required
              autocomplete="off"
            />
          </div>
          <!-- lista deplegable 1-->
          <div class="input-field col s6">
            <select id="tipo_documento" class="options" name="tipo_documento">
              <option value="" selected>¿tipo de documento?</option>
              <option value="ti">TI</option>
              <option value="cc">CC</option>
              <option value="ce">CE</option>
            </select>
          </div>
          <div class="input-field col s6">
            <label for="caja2">numero de documento</label>
            <input
              type="number"
              id="caja2"
              name="num"
              required
              autocomplete="off"
            />
          </div>
          <div class="input-field col s6">
            <select id="motivo_llamada" name="motivo_llamada" required>
              <option value="" selected>¿motivo de la llamada?</option>
              <option value="peticion">Petición</option>
              <option value="queja">Queja</option>
              <option value="reclamo">Reclamo</option>
            </select>
          </div>
          <div class="input-field col s6">
            <select id="nivel" name="nivel">
              <option value="" selected required>¿Nivel de satisfacción?</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="input-field col s6">
            <label for="num_llamadas">
              ¿N° llamadas para el problema?
            </label>
            <input
              type="number"
              id="num_llamadas"
              name="num_llamadas"
              required
              autocomplete="off"
            />
          </div>

          <div class="input-field col s6">
            <select id="recomendacion" name="recomendacion">
              <option value="" selected>¿Recomendarías este servicio?</option>
              <option value="si">SI</option>
              <option value="no">NO</option>
            </select>
          </div>
          <div class="input-field col s6">
            <label for="comentarios">comentarios</label>
            <input
              type="text"
              id="comentarios"
              name="comentarios"
              autocomplete="off"
            />
          </div>
        </div>

        <div class="card-action">
          <button class="btn" type="submit">enviar encuesta</button>
        </div>
        </form>
      </section>
    </main>
    <!-- materialize css scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- main script -->
    <script src="js/main.js"></script>
   <?php
	 file_put_contents("php://stderr", "php ajax encuesta\n"); 
    ?>
  </body>
</html>
