<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    
    
    <?php
        echo $this->Html->css(array(
                                'bootstrap.min',
                                'font-awesome.min',
                                'prettyPhoto',
                                'animate.min',
                                'main',
                                'responsive',
                                'bootstrap-notify')
                                ); 
        echo $this->fetch('css');
    ?>
    
    <!-- core CSS -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">-->
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div id="container">
		<div id="header">

                    <nav class="navbar navbar-inverse" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                                <?php echo $this->Html->link('Home','/Inicio',array(
                                                                                    'class'=>'navbar-brand'
                                    
                                                                                    )
                                                            )
                                ?>
                            </div>

                            <div class="collapse navbar-collapse navbar-right">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class=""><?php echo $this->Html->link('Adicionar',array('controller'=>'Usuarios','action'=>'add')); ?></li>
                                            <li><?php echo $this->Html->link('Editar',array('controller'=>'Usuarios','action'=>'edit',$logado['id'])); ?></li>
                                            <li><?php echo $this->Html->link('Visualizar',array('controller'=>'Usuarios','action'=>'view',$logado['id'])); ?></li>
                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="blog-item.html">Blog Single</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="blog-item.html">Blog Single</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li> 
                                    <li><a href="contact-us.html">Contact</a></li>                        
                                </ul>
                            </div>
                        </div>
                    </nav>    
                </div>
		<div id="content">
                    <div class="container">
                        <div class="row">
                            <div class="notifications top-right">
                                
                            </div>
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
		</div>
            
		<div id="footer">
		</div>
	</div>
    <?php
        echo $this->Html->script(array(
                                'jquery',
                                'bootstrap.min',
                                'jquery.PrettyPhoto',
                                'jquery.isotope.min',
                                'main',
                                'wow.min',
                                'bootstrap-notify')
                                );
        echo $this->fetch('script');
    ?>
    <script type="text/javascript">
        $(window).load(function(){
            $('.top-right').notify({
                message: { text: '<?php echo $this->Session->flash(); ?>' },
                type: "danger",
                fadeOut: { enabled: true, delay: 1000 }
            }).show();
        });
    </script>
</body>
</html>