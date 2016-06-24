<div>
              <form action="" id="form_tour" accept-charset="utf-8" method="post">
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombret" class="form-control form-contacto-tour" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="<?php if($_SESSION['lang']=='en'){echo'Name*';}else{echo'Nombre';} ?>">
                  </div>

                  <div class="columna1">
                      <input type="text" name="tel" id="txttelt" class="form-control form-contacto-tour" maxlength="10" placeholder="<?php if($_SESSION['lang']=='en'){echo'Phone number';}else{echo'Teléfono';} ?>">
                  </div>
  
                  <div class="columna2">
                      <input type="email" name="email" id="txtemailt" class="form-control form-contacto-tour" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="<?php if($_SESSION['lang']=='en'){echo'Email adress';}else{echo'Correo Electrónico';} ?>">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentariost" class="form-control comentarios-contacto-tour" placeholder="<?php if($_SESSION['lang']=='en'){echo'Comments';}else{echo'Comentarios';} ?>"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigot" class="form-control form-captcha-contacto-tour" placeholder="<?php if($_SESSION['lang']=='en'){echo'Tipe the code shown';}else{echo'Escribe el código de la imagen';} ?>" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_tour.php" class="captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnTour" name="btnTour" value="<?php if($_SESSION['lang']=='en'){echo'SEND';}else{echo'ENVIAR';} ?>" class="center-block boton_enviar_tours">
                  </div>
                  <div class="columna">
                      <span id="error_tour"></span>
                  </div>
              </form>
            </div>