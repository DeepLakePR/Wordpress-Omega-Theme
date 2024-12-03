<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->
    <link href="slick.css" rel="stylesheet" />
    <script src="slick.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c092b4e18e.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link href="style.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://guifm.dev/public/assets/favicon/favicon.ico" type="image/x-icon">

    <title>Omega Theme - Wordpress</title>
</head>
<body>
    
    <section class="main-top">
        <div class="center">

            <!-- Header -->
            <header>
                <div class="main-top-logo"><img src="public/home/logo.png" /></div> <!-- Logo -->
            </header>

            <ul class="main-top-menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul> <!-- Desktop Menu -->

            <div class="main-top-menu-mobile">

                <i class="fas fa-align-right"></i>

                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div> <!-- Mobile Menu -->

            <div class="clear"></div>

        </div> <!-- Center/Container -->
    </section> <!-- Main Top -->

    <section class="about-team">
        <div class="center">
        
            <div class="w50 team-text">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
            
                <p>Non ad eiusmod laboris labore deserunt sunt ut commodo elit. Ea tempor ipsum in dolor esse aliquip dolore occaecat cillum consequat incididunt laboris mollit et. Nisi duis reprehenderit eu tempor quis mollit occaecat irure irure. Excepteur ut veniam occaecat voluptate ea voluptate consectetur. Aliquip culpa excepteur magna reprehenderit pariatur ullamco dolore incididunt adipisicing consectetur excepteur pariatur tempor mollit. Esse velit enim anim culpa sunt adipisicing commodo non. Laborum non ea reprehenderit magna adipisicing nostrud ea deserunt. Culpa enim cillum Lorem occaecat anim duis ex deserunt elit voluptate. Cillum enim sit consectetur velit et minim officia. Proident laboris qui dolor non proident anim culpa enim sint eu incididunt fugiat magna est.</p>
            </div>

            <div class="w50 team-image">
                <img src="public/about/foto-equipe-01.png" />
            </div>    

            <div class="clear"></div>
        
        </div>
    </section>

    <section class="images-gallery">
        <div class="center">

            <div class="img-gallery">
                <img src="public/about/foto-1.png" />
            </div>
            
            <div class="img-gallery">
                <img src="public/about/foto-2.png" />
            </div>
            
            <div class="img-gallery">
                <img src="public/about/foto-3.png" />
            </div>
            
            <div class="img-gallery">
                <img src="public/about/foto-4.png" />
            </div>

        </div> <!-- Center -->
    </section> <!-- Images Gallery -->

    <section class="metodologia">
        <div class="center">

            <h2>Conheça nossa Metodologia</h2>
            <p>Ad veniam ut voluptate velit nostrud proident deserunt esse id consectetur ex eiusmod. Eu sunt eiusmod sunt velit esse ullamco labore eu esse.</p>

            <a href="#">Entre em contato</a>

        </div> <!-- Center -->
    </section> <!-- Metodologia -->

    <footer>
        <div class="center">

            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="#">Contato</a>
                <a href="#">FAQ</a>
            </div>
            
            <div class="col-footer">
                <h2>Consultoria</h2>
                <a href="#">Contato</a>
                <a href="#">FAQ</a>
            </div>
            
            <div class="col-footer">
                <h2>Empresa</h2>
                <a href="#">Sobre</a>
                <a href="#">Serviços</a>
            </div>
            
            <div class="col-footer" style="width: 50%; text-align: right;">
                <img src="public/home/logo-dummy.png" /> 
            </div>

        </div> <!-- Center -->
    </footer> <!-- Footer -->

    <!-- Scripts -->
    <script>

        // Mobile Menu
        const MobileMenuButton = $('.main-top-menu-mobile i');

        MobileMenuButton.click(()=>{

            $('.main-top-menu-mobile').find('ul').slideToggle();

        })

    </script>

</body>
</html>
