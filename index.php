<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Natural Look</title>    
</head>
<body>
    <main class="main">
        <header class="header">
            <img class="logo" src="../images/main-logo.jpg" alt="">
            <div class="links">
                <a id="inicio" href="#first-section">inicio</a>
                <a id="servicios" href="#second-section">servicios</a>
                <a id="about us" href="#third-section">about us</a>
                <a id="contact" href="#fourth-section">contacto</a>
                <a href="../php/login.php" target="_blank">Log in</a>
            </div>
        </header>
        <section class="first-section" id="first-section">
            <div class="title-big">Peluqueria Natural Look</div>
            <div class="container-img"></div>           
        </section>

        <section class="second-section" id="second-section">
            <div class="section-services">
                <p class="title">Servicios</p>
                <div class="section-services-details">
                    <div class="services-cepillado">
                        <div class="text-cepi">Cepillado</div>
                    </div>
                    <div class="services-maquillaje">
                        <div class="text-maqu">Maquillaje</div>
                    </div>
                    <div class="services-manicure">
                        <div class="text-mani">Manicure</div>
                    </div>
                    <div class="services-pedicure">
                        <div class="text-pedi">Pedicure</div>
                    </div>
                    <div class="services-corte">
                        <div class="text-cort">Corte</div>
                    </div>
                </div>
            </div>
            <div class="section-imgs">  
                <img class="img-cepillado" src="../images/cepillado.png" alt="">
                <!-- <img src="/imaes/maquillaje.jpg" alt="">
                <img src="/image/manicure.png" alt="">
                <img src="/image/pedicure.jpg" alt="">
                <img src="/images/corte-d-pelo.jpg" alt=""> -->
            </div>   

        </section>

        <section class="third-section" id="third-section">
            <div class="container-opi">
                <!-- <img class="opi" src="/imaes/OIP (1).jpg" alt=""> -->
            </div>
            <div class="container-description-about">
                <p class="title-about-us">About us</p>
                <p class="description-about-us">Somos una microempresa que lleva más de 15 años en la industria y/o en el mercado. Actualmente estamos ofreciendo diversidad de servicios y productos,proporcionando así la mejor atención y cuidado a las necesidades de nuestros clientes.</p>
            </div>
        </section>

        <section class="fourth-section" id="fourth-section">
            <div class="container-box">
                <p class="title-contact">Contactanos</p>
                <p class="description-contact">Si  tienes alguna duda o quieres reservar una cita, sientete libre de escribirnos y trataremos de responderte lo mas pronto posible.</p>
                <form method="post">
                    <input class="input name" type="text" placeholder="Name" name="nombre" >
                    <input class="input email" type="email" placeholder="Email" value="Peluqueria_N@gmail.com" name="correo" >
                    <textarea class="input message" type="text" placeholder="Message" maxlength="200" rows="20" name="mensaje"></textarea>
                    <button type="submit" class="button-enviar" name="enviar" >Enviar</button>
                </form>
                <?php
                    include("correo.php");
                ?>
            </div>

            <div class="container-social-medias">
                <div class="social-media-ig">
                    <div class="name-ig">
                        <p>Peluqueria_Natural</p>
                    </div>
                    <div class="logo-ig"></div>
                </div>

                <div class="social-media-fb">
                    <div class="name-fb">
                        <p>Natural Look</p>                        
                    </div>
                    <div class="logo-fb"></div>
                </div>

                <div class="social-media-ms">
                    <div class="name-ms">
                        <p>Peluqueria_N@gmail.com</p>
                    </div>
                    <div class="logo-ms"></div>
                </div>                      
            </div>
        </section>
    </main>
    
    
</body>
</html>