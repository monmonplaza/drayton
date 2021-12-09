<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klyne Contracting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="./css/main.min.css">
</head>

<body>

    <div class="hero">

    <header class="header " id="header">
        <div class="container">
            <div class="header__wrapper grid">
                <div class="branding">
                    <img src="./image/logo.svg" alt="">
                </div>

                <nav class="nav ">
                    <ul>
                        <li><a href="#service" class="smooth-scroll">Services</a></li>
                        <li><a href="#about" class="smooth-scroll">About</a></li>
                        <li><a href="#contact " class="smooth-scroll">Contact</a></li>
                    </ul>

                </nav>
                <div class="toggle__menu ">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

        <div class="container">
            <div class="hero__wrapper grid">
                <div class="hero__content">
                    <div class="hero__content__header">
                        <picture>
                            <source srcset="./image/banner-logo-sm.svg" media="(max-width:560px)">
                            <source srcset="./image/banner-logo.svg">
                            <img srcset="./banner-logo.svg" alt="hero image">
                        </picture>
                        <div>
                            <h2>KLYNE</h2>
                            <h3>Contracting</h3>
                        </div>
                    </div>
                    <ul class="hero__skills">
                        <li>Custom Cabinets</li>
                        <li>Finishing Carpentry</li>
                        <li>Interior Renovations</li>
                        <li>Handyman Services</li>
                        <li>Furniture Restorations</li>
                        <li>Custom Furniture</li>
                        <li>Design and Build</li>
                    </ul>

                    <ul class="hero__social">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="banner__img">
                    <div class="img__border">
                        <picture>
                            <source srcset="./image/banner-img-sm.jpg" media="(max-width:560px)">
                            <source srcset="./image/banner-img.jpg">
                            <img srcset="./banner-img.jpg" alt="hero image">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <section class="service" id="service">
        <div class="container">
            <h2 class="block__header">Services <span>Offered</span></h2>
            <div class="service__wrapper grid">
                <div class="service__card">
                    <i class="fas fa-tools"></i>
                    <h3>Custom Cabinets</h3>
                    <p>Apart from classy design and stylish furniture, good carpentry is what transforms a space into
                        your dream house.</p>
                    <a href="#contact" class="smooth-scroll">Get a Quote</a>
                </div>

                <div class="service__card">
                    <i class="fas fa-hammer"></i>
                    <h3>Finishing</h3>
                    <p>Finish carpentry encompasses all work done inside a house after framing, sheathing, wiring,
                        plumbing, insulation and drywall have been installed. </p>
                        <a href="#contact" class="smooth-scroll">Get a Quote</a>
                </div>

                <div class="service__card">
                    <i class="fas fa-toolbox"></i>
                    <h3>Interior Renovations</h3>
                    <p> By studying your brand story and identity, we can implement thoughtful insights and details into
                        every aspect of your interior space.</p>
                        <a href="#contact" class="smooth-scroll">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES END-->


    <!-- ABOUT ME -->
    <section class="about" id="about">
        <div class="container">
            <div class="about__wrapper grid">
                <div class="about__content">
                    <h2 class="block__header">About <span class="highlight">Me</span></h2>

                    <p>Growing up in my Father's Custom cabinet shop and learning at a young age, I have over 20 years
                        experience doing Cabinets and Finishing.</p>

                    <p>Experience Working in Low end and high end homes as well as commercial projects. It is also my
                        delight to refinish Furniture or create new Custom pieces.</p>
                    <p>I have done all kinds of interior renovations and basements. Give me a call for your next
                        project!
                    </p>

                    <div class="social__media">
                        <p>You can check my social</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="about__img">
                    <div class="img__border">
                        <img src="./image/about-desktop.jpg" alt="" class="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT ME END-->

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact__wrapper grid">
                <div class="contact__content">
                    <h2 class="block__header">Get In <span>Touch</span></h2>

                    <div class="contact__block">
                        <h3>Email</h3>
                        <a href="mailto:Mark@klynecontracting.com">Mark@klynecontracting.com</a>
                    </div>


                    <div class="contact__block">
                        <h3>Telephone</h3>
                        <a href="tel:780-898-5555">780-898-5555</a>
                    </div>


                    <div class="contact__block">

                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <h4>Serving Drayton Valley and Surrounding Area</h4>
                </div>

                <div class="form__wrapper">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form">
                        <div class="form__group">
                        <label for="name">Fullname * </label>
                        <input type="text" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"  name="name"/>
                        </div>

                        <div class="form__group">
                            <label for="email">Email *</label>
                            <input type="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>"  name="email"/>
                        </div>

                        <div class="form__group">
                            <label for="tel">Contact</label>
                            <input type="tel" value="<?php echo isset($_POST['tel']) ? $tel : ''; ?>" name="tel"/>
                        </div>

                        <div class="form__group">
                            <label for="message">Message *</label>
                           <textarea name="message" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                        </div>


                        <div class="form__group">
                            <input type="hidden" name="sent" value="1" />
                            <input type="submit" value="SUBMIT" class="btn" name="submit" />
                            <div class="alert alert-danger" style="display:none;"></div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->
    <footer class="footer">
        <div class="container">
            <p>©2021 KLYNE CONTRACTING </p>
        </div>
    </footer>

    <div class="backtotop">
        <a href="#header"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>