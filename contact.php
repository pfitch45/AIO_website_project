<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
   	<title>All In One Services: Contact Us</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="css/upper.css" type="text/css" rel="stylesheet"/>
 	<link href="css/background.css" type="text/css" rel="stylesheet"/>
 	<link href="css/footer.css" type="text/css" rel="stylesheet"/>
    <link href="css/form.css" type="text/css" rel="stylesheet"/>
    <style type="text/css">
        form span {
            font-size: 23px;
            font-family: Helvetica;
        }
    </style>
  </head>
    <body>
        <div id="headPic">	
            <div id="upper">
    			<div class="esp">
    				<a href="AIOindex_spanish.php">Sitio en Espan&#771;ol</a>
    			</div>
    			<div class="numbers">
    				<strong>(510)755-2974</strong>
    			</div>     
    			  <div class="menu">
                    <ul>
        			  <li><a href="services.php">Services</a></li>
        			  <li><a href="gallery.php">Gallery</a></li>
        			  <li><a href="testimonials.php">Testimonials</a></li>
        			  <li><a href="contact.php">Contact Us</a></li>
    			    </ul>
    		      </div>
                 <div id="title">
               <a href="index.php"><span>All In One</span></a>
               <h3>Furniture Assembly and Installation Solutions</h3>
            </div>
            </div>
        </div>    
	<div class="main">
			<br>
        <div id="formContainer">
            <form id="contact-form" name="contactform" method="post" action="send_form_email.php">
			<!-- <form id="contact-form" action="/" method="post"> -->
        <h3>Get in touch</h3>
        <h4>Fill in the form below, and we'll get back to you within 24 hours.</h4>
        <div>
                <label>
                        <span>Name:</span>
                        <input type="text" name="name" tabindex="1" required autofocus>
                </label>
        </div>
        <div>
                <label>
                        <span>Email:</span>
                        <input type="email" name="email" tabindex="2" required>
                </label>
        </div>
        <div>
                <label>
                        <span>Telephone:</span>
                        <input type="tel" name="telephone" tabindex="3" required>
                </label>
        </div>
        <div>
                <label>
                        <span>Message:</span>
                        <textarea tabindex="4" name="message" required></textarea>
                </label>
        </div>
        <div>
                <button name="submit" type="submit" id="contact-submit">Send Email</button>
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
			<div id="footer-menu">
                    <ul>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                      <li><a href="testimonials.php">Testimonials</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                </ul>
                </div>
                <div id="footer-text">
                <p>&copy;2014 Website design by 7-6-2</p>
                </div>
		</div>    
    </body>
</html>
