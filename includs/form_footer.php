<div class="row bg-form">
              <form action="" id="form_footer" accept-charset="utf-8" method="post">
                  <input type="hidden" name="url" id="hdnurl" value="<?php echo $currentUrl; ?>"/>
                  <input type="hidden" name="titulo" id="hdntitulo" value="<?php echo $titulo; ?>"/>
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombre" class="form-control form-footer" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="Nombre">
                  </div>

                  <div class="columna1">
                      <input type="text" name="tel" id="txttel" class="form-control form-footer" maxlength="10" placeholder="Teléfono">
                  </div>
  
                  <div class="columna2">
                      <input type="email" name="email" id="txtemail" class="form-control form-footer" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="Correo Electrónico">
                  </div>

                  <div class="columna1">
                      <input type="text" name="pais" id="txtpais" class="form-control form-footer" placeholder="País">
                  </div>

                  <div class="columna2">
                      <input type="text" name="estado" id="txtestado" class="form-control form-footer" placeholder="Estado / Provincia">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentarios" class="form-control comentarios" placeholder="Comentarios"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigo" class="form-control form-captcha" placeholder="Escribe el código de la derecha" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_footer.php" class="captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnFooter" name="btnFooter" value="ENVIAR" class="center-block boton_enviar">
                  </div>
                  <div class="columna">
                      <span id="error"></span>
                  </div>
              </form>
            </div>