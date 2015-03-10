<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
    <?php
        echo $this->Html->css(array(
                                'bootstrap',
                                'main',
                                'custom',
                                'http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800',
                                'icomoon-social',
                                'fibt-awesome.min',
                                'bootstrap-notify')
                                ); 
        echo $this->fetch('css');
    ?>
    <?php
        echo $this->Html->script(array(
            'http://use.edgefonts.net/bebas-neue.js',
            'modernizr'   
        ));
    ?>
    
</head>
<body>
	<div id="container">
		<div id="header">
                    <header class="navbar navbar-inverse" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html">
                                    <img src="img/logo.png" alt="Basica">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a href="index.html">Inicio</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">Sobre</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jogos <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Dropdown Menu 1</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 3</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 4</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 5</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms of Use</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Dropdown Menu 1</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 3</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 4</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 5</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms of Use</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Contato</a>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pesquisar">
                                    </div>
                                    <button type="submit" class="btn btn-default">Pesquisar</button>
                                </form>
                                <ul class="nav navbar-nav"></ul>
                            </div>
                        </div>
                    </header>
                </div>
		<div id="content">
                    <div class="container">
                        <div class="row">
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
		</div>
            
		<div id="footer" class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-footer col-md-4 col-xs-6">
                                <h3>Contact Us</h3>
                                <p class="contact-us-details"><b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/><b>Phone:</b> +1 123 45678910<br/><b>Fax:</b> +1 123 45678910<br/><b>Email:</b><a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a></p>
                            </div>
                            <div class="col-footer col-md-4 col-xs-6">
                                <h3>Our Social Networks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                <div>
                                    <img src="img/icons/facebook.png" width="32" alt="Facebook">
                                    <img src="img/icons/twitter.png" width="32" alt="Twitter">
                                    <img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
                                    <img src="img/icons/rss.png" width="32" alt="RSS Feed">
                                </div>
                            </div>
                            <div class="col-footer col-md-4 col-xs-6">
                                <h3>About Our Company</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-copyright">&copy; 2014 
                                    <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/">Basica</a> Bootstrap HTML Template. By 
                                    <a href="http://www.vactualart.com">Vactual Art</a>.
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
	</div>
    <?php
        echo $this->Html->script(array(
                                'jquery',
                                'bootstrap.min',
                                'jquery.easing.min',
                                'scrolling-nav')
                                );
        echo $this->fetch('script');
    ?>
    <script type="text/javascript">

    </script>
</body>
</html>