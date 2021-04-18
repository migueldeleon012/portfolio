<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="syle.css">
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Miguel de leon</title>
</head>
<body>

    <!-- PRELOADER -->
    <div class="loader full-height d-flex justify-content-center align-items-center" id="loader">
        <img src="img/loader.gif" alt="loader" width="100%">
    </div>
    <!-- HOME -->
    <header id="home">
        <div class="container-fluid full-height img-overlay d-flex justify-content-center">
            <nav>
                <div class="navbar-custom fixed-top">
                    <div class="logo-placeholder d-flex align-items-center">
                        <img src="img/logo.png" alt="logo" height="70%">
                    </div>
                    <ul class="items d-flex justify-content-evenly align-items-center">
                        <li class="px-4"><a class="item active px-4" href="#home">Home</a></li>
                        <li class="px-4"><a class="item px-4" href="#about">About me</a></li>
                        <li class="px-4"><a class="item px-4" href="#projects">Projects</a></li>
                        <li class="px-4"><a class="item px-4" href="#contact">Contact</a></li>
                    </ul>
                    <div class="hamburger-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </nav>

            <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                include 'includes/response.php';
            ?>

            <div class="hero d-flex flex-column align-items-center justify-content-center">
                <h1 class="bottom display-1 text-light text-uppercase">Hi! I'm Miguel de Leon</h1>
                <h3 class="bottom two display-5 text-light my-5">I am a Web Developer</h2>
            </div>
        </div>
    </header>

    <!-- ABOUT ME -->
    <section class="py-4" id="about">
        <h2 class="display-5 py-4 text-center">About me</h2>
        <div class="pt-5"></div>

        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-between">
                    <h3 class="bottom fs-3 fw-normal pb-3 text-center">Personal informations:</h3>
                    <div class="d-flex justify-content-center">
                        <div class="bottom two circle py-4">
                            <img src="img/1.jpg" alt="Miguel de Leon" width="100%">
                        </div>
                    </div>
                    <div class="about-me-title d-flex justify-content-center align-items-center flex-column py-3">
                        <p class="bottom three text-center bottom">
                            Hi! I am Miguel de Leon and I am an aspiring Web Developer with a passion for front-end
                            development and design.
                        </p>
                        <p class="bottom four text-center">
                            When I'm not on the computer, I enjoy playing Basketball and producing music.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <h3 class=" right skills-text fw-normal fs-3 pb-3">Front-end technologies</h3>
                        <div class="right two skills d-flex flex-wrap">
                            <div class="container-img m-3"><img height="100%" src="img/skills/html.png" alt="html"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/css.png" alt="css"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/js.png" alt="js"></div>
                            <div class="container-img m-3"><img height="100%" width="90%" src="img/skills/jquery.png" alt="jquery"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/bootstrap.png" alt="bootstrap"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/sass.png" alt="sass"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/wordpress.png" alt="wordpress"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/react.png" alt="react"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/photoshop.png" alt="photoshop"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/adobexd.png" alt="xd"></div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="right three skills-text fw-normal fs-3 pb-3">Back-end technologies & Databases</h3>
                        <div class="right four skills d-flex flex-wrap">
                            <div class="container-img m-3"><img height="100%" src="img/skills/php.png" alt="php"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/node.png" alt="node"></div>
                            <div class="container-img m-3"><img height="100%" src="img/skills/mysql.png" alt="mysql"></div>
                        </div>
                    </div>

        </div>
        <div class="py-5"></div>
    </section>

    <section class="resume text-center">
        <div class="py-5 img-overlay justify-content-center">
            <h2 class="top display-6 text-light">View my resume</h2>
            <button class="left three btn btn-lg btn-outline-light my-4 mx-5 px-4 py-3">English Resume</button>
            <button class="right three btn btn-lg btn-outline-light my-4 mx-5 px-4 py-3">Italian Resume</button>
        </div>
    </section>


    <!-- PROJECTS -->
    <section class="py-5" id="projects">
        <h2 class="bottom display-5 pt-4 text-center">Projects that i've done</h2>
        <h4 class="bottom two text-center fw-light mb-5">(many more to come)</h4>
        <div class="py-5"></div>
        
        <div class="bottom three container">
            <div class="row g-5 project-wrapper">
            </div>
        </div>
        <div class="py-5"></div>
    </section>

    <!-- CONTACT -->
    <section class="py-5 darker-white" id="contact">
        <h2 class="bottom display-5 py-5 text-center">Feel free to contact me!</h2>
        <div class="py-5"></div>

        <div class="container-fluid">
            <div class="row">
                <form method="POST" action="includes/contact-form.php" class="bottom two col-md-8 col-10 offset-md-2 offset-1 py-3 d-flex flex-column align-items-center  form">
                    <i class="far fa-paper-plane my-3"></i>
                    <div class="form-box d-flex flex-column input my-3">
                        <input class="my-5" id="name" name='name' type="text" placeholder="Name">
                        <label for="name" class="mb-4">Full Name:</label>
                    </div>
                    <div class="form-box d-flex flex-column input my-3">
                        <input class="my-5" id="email" name="email" type="email" placeholder="e-mail">
                        <label for="email" class="mb-4">Email:</label>
                    </div>
                    <div class="form-box d-flex flex-column input my-3">
                        <textarea class="my-5" id="message" name="message" placeholder="Message"></textarea>
                        <label for="message" class="mb-4">Message:</label>
                    </div>

                    <button type="submit" name="submit" class="my-4 btn btn-outline-light submit d-flex align-items-center justify-content-center">Say hello</button>
                </form>
            </div>
        </div>

        <div class="py-5"></div>
    </section>

    <!-- FOOTER -->
    <footer class="container-fluid bg-dark text-white">
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-4 col-xs-5 d-flex justify-content-evenly py-4">
                <a href="https://www.facebook.com/profile.php?id=100009912155567"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/the_lion012/"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/migueldeleon012"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="d-flex justify-content-center pb-4">
            <p>&copy Miguel de Leon 2021</p>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script>
        window.sr = ScrollReveal({mobile: false});
        sr.reveal('.bottom',{
            duration: 2000,
            origin: 'bottom',
            distance: '200px',
        })
        sr.reveal('.top',{
            duration: 2000,
            origin: 'top',
            distance: '200px',
        })
        sr.reveal('.right',{
            duration: 2000,
            origin: 'right',
            distance: '200px',
        })
        sr.reveal('.left',{
            duration: 2000,
            origin: 'left',
            distance: '200px',
        })

        sr.reveal('.two',{
            delay: 200
        })

        sr.reveal('.three',{
            delay: 300
        })

        sr.reveal('.four',{
            delay:400
        })
    </script>
    
</body>
</html>

