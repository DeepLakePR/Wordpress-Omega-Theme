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

    <section class="contact">
        <div class="center">

            <div class="w50 contact-info">
                <h2>A mais importante, <br />primeira conversa.</h2>
                
                <br/>
                
                <p><b>Telefone:</b> (00) 00000-0000</p>
                <p><b>Telefone:</b> (00) 00000-0000</p>
                <p><b>Telefone:</b> (00) 00000-0000</p>

                <div class="map-container">
                    <div id="map"></div>
                </div> <!-- Map -->

                <div class="clear"></div>
            </div> <!-- Left Side -->


            <div class="w50 contact-form">

                <form>

                    <input type="text" placeholder="Nome" />
                    <input type="text" placeholder="E-mail" />

                    <select>
                        <option>Contato Comercial</option>
                        <option>Contato Pessoal</option>
                    </select>

                    <input type="text" placeholder="Empresa" />

                    <textarea placeholder="Fale mais sobre sua necessidade"></textarea>

                    <input type="submit" name="submit" value="Enviar Formulário" />
                </form>

                <div class="clear"></div>
            </div> <!-- Right Side -->

            <div class="clear"></div>

        </div> <!-- Center -->
    </section> <!-- Contact -->

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
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="map.js"></script>

    <script>

        // Mobile Menu
        const MobileMenuButton = $('.main-top-menu-mobile i');

        MobileMenuButton.click(()=>{

            $('.main-top-menu-mobile').find('ul').slideToggle();

        })

    </script>

</body>
</html>
