<div>
              <form action="" id="form_tour_movil" accept-charset="utf-8" method="post">
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombretm" class="form-control form-contacto-tour" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="Nombre">
                  </div>

                  <div class="columna1">
                      <input type="text" name="tel" id="txtteltm" class="form-control form-contacto-tour" maxlength="10" placeholder="Teléfono">
                  </div>
  
                  <div class="columna2">
                      <input type="email" name="email" id="txtemailtm" class="form-control form-contacto-tour" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="Correo Electrónico">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentariostm" class="form-control comentarios-contacto-tour" placeholder="Comentarios"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigotm" class="form-control form-captcha-contacto-tour" placeholder="Escribe el código de la derecha" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_tour.php" class="captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnTour" name="btnTour" value="ENVIAR" class="center-block boton_enviar_tours">
                  </div>
                  <div class="columna">
                      <span id="error_tourm"></span>
                  </div>
              </form>
            </div>