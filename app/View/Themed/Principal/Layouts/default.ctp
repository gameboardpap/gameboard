<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php 
        echo $this->Html->meta('icon');
    ?>
    <?php
        echo $this->Html->css(array(
                                'bootstrap.min',
                                'main',
                                'custom',
                                'http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800',
                                'icomoon-social',
                                'font-awesome.min',
                                'bootstrap-notify',
                                'gameboard',
                                'jquery.bxslider',
                                'comments',
                                'bootstrap-lightbox.min',
                                'cs-rows',
                                'dropzone',
                                )); 
        echo $this->fetch('css');
    ?>
    <?php
        echo $this->Html->script(array(
            'http://use.edgefonts.net/bebas-neue.js',
            'modernizr'   
        ));
    ?>
    <title><?php echo $this->fetch('title'); ?></title>
</head>
<body>
	<div id="container">
		<div id="header">
                    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php echo $this->Html->link('Inicio', array('controller'=>' ','action'=>'/'),array('class'=>'navbar-brand')); ?>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <?php echo $this->Html->link('Inicio', array('controller'=>'','action'=>'/')); ?>
                                    </li>
                                    <li>
                                        <a href="about-us.html">Sobre</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jogos <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <?php echo $this->Html->link('Todos os jogos', array('controller'=>'jogos','action'=>'/')); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link('Adicionar um novo jogo', array('controller'=>'novojogo','action'=>'/')); ?>
                                            </li>
<!--                                            <li>
                                                <a href="#">Dropdown Menu 3</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 4</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Menu 5</a>
                                            </li>-->
                                            <li class="divider"></li>
<!--                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms of Use</a>
                                            </li>-->
                                        </ul>
                                    </li>
                                      <li>
                                        <a href="contact-us.html">Contato</a>
                                        
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <?php if($logado){ ?>
                                        <li class="dropdown">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar <i class="fa fa-angle-down"></i></a>
                                           <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                              <li>
                                                 <div class="row">
                                                    <div class="col-md-12"> 
                                                        <legend>Buscar</legend>
                                                        <?php 
                                                            echo $this->Form->create('Busca',
                                                                array(
                                                                    'class'=> 'form',
                                                                    'role' => 'form',
                                                                    'inputDefaults' => array(
                                                                        'before' => '<div class="form-group">',
                                                                        'between' => '',
                                                                        'after' => '</div>',
                                                                        'class'=>'form-control'
                                                                    ),
                                                                    'action'=>'buscar'
                                                                )
                                                            ); 
                                                        ?>
                                                        <?php
                                                            echo $this->Form->input('pesquisa', array(
                                                                'Placeholder' => "Pesquisa",
                                                                'label'=>array(
                                                                    'class'=>'sr-only'
                                                                )
                                                            ));
                                                        ?>
                                                        <?php
                                                            echo $this->Form->input('tipo', array(
                                                                'options' => array('jogo'=>'Jogo','usuario'=>'Usuário','equipe'=>'Equipe'),
                                                                'label'=>'Buscar um: ',
                                                            ));
                                                        ?>
                                                        <?php echo $this->Form->end(array('label'=>'Pesquisar','class'=>'btn btn-default')); ?>
                                                    </div>
                                                 </div>
                                              </li>
                                           </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem vindo, <?php echo $logado['username']; ?>  <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <?php echo $this->Html->link('<i class="fa fa-cogs"></i> Configurações',array('controller'=>'','action'=>'Config'),array('escape'=>false)); ?>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <?php echo $this->Html->link('Sair',array('controller'=>'','action'=>'Sair'),array('escape'=>false)); ?>
                                                </li>
                                            </ul>
                                        </li>                                            
                                    <?php } else { ?>
                                        <li>
                                            <?php echo $this->Html->link('Cadastrar',array('controller'=>'','action'=>'Cadastrar')); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Login',array('controller'=>'','action'=>'Login')); ?>
                                        </li>
<!--                                        <li class="dropdown">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                                           <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                              <li>
                                                 <div class="row">
                                                    <div class="col-md-12">-->
                                                     
                                                        
<!--                                                       <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                          <div class="form-group">
                                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                          </div>
                                                          <div class="form-group">
                                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                          </div>
                                                          <div class="checkbox">
                                                             <label>
                                                             <input type="checkbox"> Remember me
                                                             </label>
                                                          </div>
                                                          <div class="form-group">
                                                             <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                                          </div>
                                                       </form>-->
<!--                                                    </div>
                                                 </div>
                                              </li>-->
                                    <?php } ?>                                    
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
		<div id="content">
                    <div class="section section-breadcrumbs">
                        <div class="container">
                            <h1><?php echo $this->fetch('title'); ?></h1>
                        </div>
                    </div>
                    <div class="container">
                            <?php echo $this->fetch('content'); ?>
                    </div>
		</div>
            
		<div id="footer" class="footer">
                    <div class="container">
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
                                'scrolling-nav',
                                'modernizr',
                                'jquery.bxslider.min',
                                'bootstrap-lightbox.min',
                                'dropzone',
                                )
                                );
        echo $this->fetch('script');
    ?>
</body>
</html>