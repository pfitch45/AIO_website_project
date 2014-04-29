<!DOCTYPE html>
<html lang="es">
  <head>
  	  <meta charset="utf-8">
  	  <title>Comuniquese</title>
  	  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

  	  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>

  	  <link href="css/background.css" type="text/css" rel="stylesheet"/>
  	  <link href="css/footer.css" type="text/css" rel="stylesheet"/>
  	  <link href="css/span_aid.css" type="text/css" rel="stylesheet"/>
  	  <link href="css/form.css" type="text/css" rel="stylesheet"/>
      <style>
        form span {
            font-size: 23px;
            font-family: Helvetica;
        }
    </style>
  </head>
      <body>
        <div id="headPic">
          	<div id="arriba">
    			<div class="eng">
    				<a href="index.php">Website in English</a>
    			</div>
    			<div id="info">
    				<strong>(510)755-2974</strong>
    			</div>     
    			  <div class="lista">
                    <ul>
    			  	<strong>
    				  <li><a href="servi.php">Servicios</a></li>
    				  <li><a href="galeria.php">Galeria</a></li>
    				  <li><a href="recom.php">Recomendacio&#769nes</a></li>
    				  <li><a href="coms.php">Comuniquese</a></li>  
    			</ul>
    		  </div>
                <div id="title">
              <a href="AIOindex_spanish.php"><span>All In One</span></a>
                <h3>Armado e Instalacio&#769n de Muebles</h3>
            </div>
    	   </div>
        </div>
	<div class="main">
		<div id="formContainer">	
			<form id="contact-form" name="contactform" method="post" action="send_form_email.php">
        <h4>Someta sus datos, y nosotros estaremos en contacto dentro de 24 horas.</h4>
        <div>
                <label>
                        <span>Nombre</span>
                        <input type="text" name="Name" tabindex="1" required autofocus>
                </label>
        </div>
        <div>
                <label>
                        <span>Direccio&#769n de correo electro&#769nico: </span>
                        <input type="email" name="Email" tabindex="2" required>
                </label>
        </div>
        <div>
                <label>
                        <span>Tele&#769fono</span>
                        <input type="tel" name="Email" tabindex="3" required>
                </label>
        </div>
        <div>
                <label>
                        <span>Mensage</span>
                        <textarea tabindex="4" name="Message" required></textarea>
                </label>
        </div>
        <div>
                <button name="submit" type="submit" id="contact-submit">Enviar Mensage</button>
        </div>
</form>

		</div>
		</div>
		<script>
            (function() {
             
                // Create input element for testing
                var input = document.createElement('input');
                 
                // Create the supports object
                var supports = {};
                 
                supports.autofocus   = 'autofocus' in input;
                supports.required    = 'required' in input;
                supports.placeholder = 'placeholder' in input;
             
                // Fallback for autofocus attribute
                if(!supports.autofocus) {
                     
                }
                 
                // Fallback for required attribute
                if(!supports.required) {
                     
                }
             
                // Fallback for placeholder attribute
                if(!supports.placeholder) {
                     
                }
                 
                // Change text inside send button on submit
                var send = document.getElementById('contact-submit');
                if(send) {
                    send.onclick = function () {
                        this.innerHTML = '...Sending';
                    }
                }
             
            })();
            </script>	
    </div>        	
		<div class="footer">
			<p>&copy;2014 sitio disen&#771ado por 7-6-2</p>
		</div>   
      </body>
</html>    