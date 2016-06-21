<div>
              <form action="" id="form_contacto" accept-charset="utf-8" method="post">
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombrec" class="form-control form-contacto" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="Nombre">
                  </div>

                  <div class="columna1">
                      <input type="text" name="tel" id="txttelc" class="form-control form-contacto" maxlength="10" placeholder="Teléfono">
                  </div>
  
                  <div class="columna2">
                      <input type="email" name="email" id="txtemailc" class="form-control form-contacto" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="Correo Electrónico">
                  </div>

                  <div class="columna1">
                      <input type="text" name="pais" id="txtpaisc" class="form-control form-contacto" placeholder="País">
                  </div>

                  <div class="columna2">
                      <input type="text" name="estado" id="txtestadoc" class="form-control form-contacto" placeholder="Estado / Provincia">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentariosc" class="form-control comentarios-contacto" placeholder="Comentarios"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigoc" class="form-control form-captcha-contacto" placeholder="Escribe el código de la derecha" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_contacto.php" class="captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnContacto" name="btnContacto" value="ENVIAR" class="center-block boton_enviar_contacto">
                  </div>
                  <div class="columna">
                      <span id="error_contacto"></span>
                  </div>
              </form>
            </div>