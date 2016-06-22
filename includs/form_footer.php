<div class="row bg-form">
              <form action="" id="form_footer" accept-charset="utf-8" method="post">
                  <input type="hidden" name="url" id="hdnurl" value="<?php echo $currentUrl; ?>"/>
                  <input type="hidden" name="titulo" id="hdntitulo" value="<?php echo $titulo; ?>"/>
                  <div class="columna">
                      <input type="text" name="nombre" id="txtnombre" class="form-control form-footer" data-validation-engine="validate[required,custom[minSz2Nm]]" data-validation-placeholder="Escriba su nombre" placeholder="<?php if($_SESSION['lang']=='en'){echo'Name*';}else{echo'Nombre';} ?>">
                  </div>

                  <div class="columna1">
                      <input type="text" name="tel" id="txttel" class="form-control form-footer" maxlength="10" placeholder="<?php if($_SESSION['lang']=='en'){echo'Phone number';}else{echo'Teléfono';} ?>">
                  </div>
  
                  <div class="columna2">
                      <input type="email" name="email" id="txtemail" class="form-control form-footer" data-validation-engine="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico" placeholder="<?php if($_SESSION['lang']=='en'){echo'Email adress';}else{echo'Correo Electrónico';} ?>">
                  </div>

                  <div class="columna1">
                      <input type="text" name="pais" id="txtpais" class="form-control form-footer" placeholder="<?php if($_SESSION['lang']=='en'){echo'Country';}else{echo'País';} ?>">
                  </div>

                  <div class="columna2">
                      <input type="text" name="estado" id="txtestado" class="form-control form-footer" placeholder="<?php if($_SESSION['lang']=='en'){echo'State / province';}else{echo'Estado / Provincia';} ?>">
                  </div>
                  
                  <div class="columna">
                      <textarea name="comentarios" id="txtcomentarios" class="form-control comentarios" placeholder="<?php if($_SESSION['lang']=='en'){echo'Comments';}else{echo'Comentarios';} ?>"></textarea>
                  </div>
  
                  <div class="columna-codigo">
                      <input type="text" name="codigo" id="txtcodigo" class="form-control form-captcha" placeholder="<?php if($_SESSION['lang']=='en'){echo'Tipe the code shown';}else{echo'Escribe el código de la imagen';} ?>" autocomplete="off">
                  </div>
  
                  <div class="img-captcha">
                      <img src="Clases/imagen_captcha_footer.php" class="captcha center-block"/>
                  </div>
  
                  <div class="columna">
                      <input type="submit" id="btnFooter" name="btnFooter" value="<?php if($_SESSION['lang']=='en'){echo'SEND';}else{echo'ENVIAR';} ?>" class="center-block boton_enviar">
                  </div>
                  <div class="columna">
                      <span id="error"></span>
                  </div>
              </form>
            </div>