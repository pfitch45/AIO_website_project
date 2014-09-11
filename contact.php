<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>All In One Services: Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name ="description" content="If you need someone to handle your home or office furniture assembly or installation needs, don't hesitate to call AIO for fast and professional service.">
        <meta property="og:site_name" content="All In One Services">
        <meta property="og:url" content="http://www.bayareafurnitureassembly.com">
        <meta property="og:locale" content="en_US">
        <meta property="og:description" content="AIO can help assemble and install your furniture reliably! Call us for fast and professional service. Located in the San Francisco Bay Area">
        <link rel="icon" type="image/ico" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/radio_bg.css">
        <link rel="stylesheet" type="text/css" href="css/rollyourown.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href='http://fonts.googleapis.com/css?family=Cantarell:700' rel='stylesheet' type='text/css'>        
    </head>
        <body>
            <nav class="menu">
                <nav id="index-menu">
                    <ul>
                        <li><a href="services.php">SERVICES AND INFORMATION</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
                </nav>    
            </nav>
            <div class="content">
                <div id="outer-content-contact">
                    <div id="contact-text">
                        <h3>Get in touch with All In One.</h3>
                    </div>
                       <div id="formContainer">
                        <form id="contact-form" name="contactform" method="post" action="send_form_email.php">
                                <!-- <form id="contact-form" action="/" method="post"> -->
                            <div>
                                    <label>
                                            <span>Name</span><br>
                                            <input type="text" name="name" tabindex="1" required autofocus>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Email</span><br>
                                            <input type="email" name="email" tabindex="2" required>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Phone Number</span><br>
                                            <input type="tel" name="telephone" tabindex="3" required>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Message</span><br>
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
            <nav class="footer-contact">
                <a href="index.php">HOME</a>
            </nav>
        </body>
</html>