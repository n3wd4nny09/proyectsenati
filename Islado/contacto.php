<?php include 'header.php' ?>
<link rel="stylesheet" href="contactos.css">
<center>
<div class="formulario">      
  <h1>Formulario de contacto</h1>
    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>


      <form action="submeter-formulario.php" method="post">       

      
            <p>
              <label for="nombre" class="colocar_nombre">Nombre
                <span class="obligatorio">*</span>
              </label>
                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
            </p>
          
            <p>
              <label for="email" class="colocar_email">Email
                <span class="obligatorio">*</span>
              </label>
                <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
            </p>
        
            <p>
              <label for="telefone" class="colocar_telefono">Teléfono
                <span class="obligatorio">*</span>
              </label>
                <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
            </p>    
          
            <p>
              <label for="website" class="colocar_website"> Producto en el que esta interesado
                <span class="obligatorio">*</span>
              </label>
                <input type="text" name="introducir_producto" id="producto" placeholder="Escribe el nombre del producto" required="obligatorio">
            </p>    
          
            <p>
              <label for="asunto" class="colocar_asunto">Asunto
                <span class="obligatorio">*</span>
              </label>
                <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
            </p>    
          
            <p>
              <label for="mensaje" class="colocar_mensaje">Mensaje
                <span class="obligatorio">*</span>
              </label>                     
                                <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                            </p>                    
          
            <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

            <p class="aviso">
              <span class="obligatorio"> * </span>los campos son obligatorios.
            </p>          
        
      </form>
  </div>  
  </div>
</body>
</center>
</html>
<?php include 'footer.php' ?>