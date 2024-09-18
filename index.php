<?php

include 'includes/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- AOS CSS sin integridad -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" crossorigin="anonymous" />
    <!-- AOS JS sin integridad -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" crossorigin="anonymous"></script>
    <!-- Tu archivo de estilos personalizados -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icono.png" type="image/png" sizes="32x32">
</head>
<body>
    <div>
        <div data-aos="fade-down" data-aos-duration="1500" class="container mt-4 " id="home">
            <h1>Hola, <br> Soy <span style="color: #4CB8FF">Carlos</span> <br> Desarrollador Full Stack</h1>
            <!-- Aquí va mi foto -->
             
            <a href="https://drive.google.com/file/d/1pc6xHZWcyQ8syLB6D8GxbulD3VfIod_w/view?usp=drive_link" target="_blank"><button class="btn btn-home mt-3">Resumen</button></a>
            <div class="icons-container">
                <div class="icon">
                <a href="https://www.linkedin.com/in/carlosgonzalezmorgado/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>  
                </div>
                <div class="icon">
                    <a href="https://github.com/carlostort23" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
                <div class="icon">
                    <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=gm.carlos097@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>
                </div>
            </div>   
        </div>

        <div data-aos="fade-down" data-aos-duration="1500" class="container mt-5" id="sobreMi">
            <h2 class="">Sobre mí</h2>
            <div class="underline1 mb-4"></div>
            
            <div  data-aos="zoom-in" class="row mt-2">
                <div class="col-md-5 d-flex align-items-center about__img">
                    <img src="img/foto.png" alt="Imagen sobre mí" class="about__img">
                </div>
                <div class="col-md-7 sobreMi">
                    <h2 class="sobre-titulo">Yo soy Carlos</h2>
                    <p class="sobre-texto">¡Hola! Soy Carlos, un desarrollador Full Stack apasionado de los deportes y las tecnologías. Tengo experiencia en el desarrollo de aplicaciones web utilizando tecnologías como PHP, Java, JavaScript, y frameworks como Angular y Bootstrap. A continuación, verás los proyectos que he realizado hasta el momento y algunos más que publicaré muy pronto. Que lo disfrutes!</p>
                </div>
            </div>
        </div>

        <div class="container mt-5" id="proyectos">
            <h2 data-aos="fade-down" data-aos-duration="1500" class="">Proyectos</h2>
            <div class="underline1 mb-4"></div>

            <div data-aos="fade-down" data-aos-duration="1500" class="row">
                <div class="projects__links col-md-6">
                        <img src="img/portafolio.png" class="img-proyectos img-fluid">
                    <div class="titulo-proyecto mt-2">
                        <h2 class="titulo-proyecto">Mi portfolio</h2>
                    </div>
                    <div class="icons-container2">
                        <div class="icon mt-3">
                            <i class='bx bxl-github'></i>
                        </div> 
                        <div class="icon mt-3">
                            <i class='bx bx-world'></i>
                        </div> 
                    </div>
                </div>
                <div class="projects__links col-md-6">
                        <img src="img/proyectoTienda.png" class="img-proyectos img-fluid">
                    <div class="titulo-proyecto mt-2">
                        <h2 class="titulo-proyecto">Mi portfolio</h2>
                    </div>
                    <div class="icons-container2">
                        <div class="icon mt-3">
                            <i class='bx bxl-github'></i>
                        </div> 
                        <div class="icon mt-3">
                            <i class='bx bx-world'></i>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" id="skills">
            <h2 data-aos="fade-down" data-aos-duration="1500" class="">Skills</h2>
            <div class="underline1 mb-4"></div>
            <h2 data-aos="fade-down" data-aos-duration="1500" class="skill-subtitle">Mis lenguajes, frameworks, tecnologías y herramientas:</h2>

            <div class="skill-tittle mt-3">
                <h3 data-aos="fade-down" data-aos-duration="1500">Lenguajes</h3>

                <div data-aos="fade-down" data-aos-duration="1500" class="icons-container-skills">
                    <div class="icon">
                        <i class='bx bxl-php'></i>
                        <span class="skill-name" style="display: none;">PHP</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-java' ></i>
                        <span class="skill-name" style="display: none;">Java</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-postgresql' ></i>
                        <span class="skill-name" style="display: none;">SQL</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-javascript' ></i>
                        <span class="skill-name" style="display: none;">JavaScript</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-html5' ></i>
                        <span class="skill-name" style="display: none;">HTML 5</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-css3' ></i>
                        <span class="skill-name" style="display: none;">CSS</span>
                    </div>
                </div>
            </div>

            <div class="skill-tittle mt-3">
                <h3 data-aos="fade-down" data-aos-duration="1500">Frameworks y librerias</h3>
                <div data-aos="fade-down" data-aos-duration="1500" class="icons-container-skills">
                    <div class="icon">
                        <i class='bx bxl-bootstrap' ></i>
                        <span class="skill-name" style="display: none;">Bootstrap</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-angular' ></i>
                        <span class="skill-name" style="display: none;">Angular</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxl-php'></i>
                        <span class="skill-name" style="display: none;">Composer</span>
                    </div>
                </div>
            </div>

            <div class="skill-tittle mt-3">
                <h3 data-aos="fade-down" data-aos-duration="1500">Tecnologías y herramientas</h3>
                <div data-aos="fade-down" data-aos-duration="1500" class="icons-container-skills">
                    <div class="icon">
                        <i class='bx bxl-github'></i>
                        <span class="skill-name" style="display: none;">GitHub</span>
                    </div>
                    <div class="icon">
                        <img width="90" height="90" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/96/external-npm-a-package-manager-for-the-javascript-programming-language-logo-bold-tal-revivo.png" alt="external-npm-a-package-manager-for-the-javascript-programming-language-logo-bold-tal-revivo"/>
                        <span class="skill-name" style="display: none;">npm</span>
                    </div>
                    <div class="icon">
                        <i class='bx bxs-square-rounded'></i>
                        <span class="skill-name" style="display: none;">NetiflyApp</span>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-down" data-aos-duration="1500" class="container mt-5" id="contacto">
            <h2 class="">Contactame</h2>
            <div class="underline1 mb-4"></div>
            <div class="contact">
                <p>Llámame, escríbeme un e-mail, o conecta y escríbeme en Linkedin.</p>
                <div class="sobre-contacto">
                    <div>
                    <i class='bx bxl-gmail'></i>
                    <p class="text-contact"><a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=gm.carlos097@gmail.com" target="_blank">gm.carlos097@gmail.com</a></p>
                    </div>
                    <div>
                    <i class='bx bx-mobile'></i>
                    <p class="text-contact">+34 640271402</p>
                    </div>
                    <div>
                    <i class='bx bxs-location-plus'></i>
                    <p class="text-contact">Rivas vaciamadrid, Madrid</p>
                    </div>  
                </div>
                </div>         
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-GpJdL2lcKCFZj9gEZU7RbbgMFQwTBpgy1bCO4NhqjOcK5pHgGrYPBpjlW/fL/NrdPAtX2/OsCnp0AesSZpt9w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        AOS.init();
    </script>
</body>
<?php
include 'includes/footer.php'; 
?>
</html>