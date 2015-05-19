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
                                'pnotify.custom.min',
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
                                <?php echo $this->Html->link($this->Html->image('logos/logo-nav30.png',array('class'=>'logo-nav')), array('controller'=>' ','action'=>'/'),array('class'=>'navbar-brand','escape'=>false)); ?>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jogos <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <?php echo $this->Html->link('Todos os jogos', array('controller'=>'jogos','action'=>'/')); ?>
                                            </li>
                                            <li><a>Buscar por gênero:</a></li>
                                            <li class="divider"></li>
                                            <li>
                                                <?php echo $this->Html->link('Adicionar um novo jogo', array('controller'=>'novojogo','action'=>'/')); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link('Editar um jogo meu', array('controller'=>'editarmeusjogos','action'=>'')); ?>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <?php echo $this->Html->link('Meus Downloads', array('controller'=>'meusdownloads','action'=>'/')); ?>
                                            </li>                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desenvolvedoras <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <?php echo $this->Html->link('Todos as desenvolvedoras', array('controller'=>'equipes','action'=>'/')); ?>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <?php echo $this->Html->link('Adicionar uma nova desenvolvedora', array('controller'=>'novaequipe','action'=>'/')); ?>
                                            </li>                                            
                                            <li>
                                                <?php echo $this->Html->link('Editar uma desenvolvedora minha', array('controller'=>'editarminhaequipe','action'=>'')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Relatórios', array('controller'=>'Relatorios','action'=>'/')); ?>
                                    </li>                                    
                                    <li>
                                        <a href="contact-us.html">Contato</a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <?php if($logado) { ?>
                                    <?php if(
                                               strtolower($this->params['controller'])=="jogos"
                                            || strtolower($this->params['controller'])=="usuarios"
                                            || strtolower($this->params['controller'])=="equipes"
                                            ) { 
                                    ?>
                                        <!--<li class="dropdown">-->
                                           <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar <i class="fa fa-angle-down"></i></a>-->
                                           <!--<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">-->
                                              <!--<li>-->
                                                 <!--<div class="row">-->
                                                    <!--<div class="col-md-12">--> 
                                                        <!--<legend>Buscar</legend>-->
                                                        <?php 
                                                            echo $this->Form->create('',
                                                                array(
                                                                    'class'=> 'navbar-form navbar-left',
                                                                    'role' => 'search',
                                                                    'div'=>false,
                                                                    'inputDefaults' => array(
                                                                        'before' => '<div class="form-group">',
                                                                        'between' => '',
                                                                        'after' => '</div>',
                                                                        'class'=>'form-control',
                                                                        'div'=>false,
                                                                        'label'=>false
                                                                    ),
                                                                    'action'=>'index'
                                                                )
                                                            ); 
                                                        ?>
                                                        <?php
                                                            echo $this->Form->input('pesquisa', array(
                                                                'Placeholder' => "Buscar"
                                                                )
                                                            );
                                                        ?>
                                                        <?php echo $this->Form->button('<i class="fa fa-search"></i>',array('class'=>'btn btn-default','div'=>false)); ?>
                                                        <?php echo $this->Form->end(); ?>
                                                    <!--</div>-->
                                                 <!--</div>-->
                                              <!--</li>-->
                                           <!--</ul>-->
                                        <!--</li>-->
<!--                                              <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
                                    <?php } ?>
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
                    <?php // if(!$this->params['controller']=="home") { ?>
                    
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
                                'pnotify.custom.min',
                                )
                                );
        echo $this->fetch('script');
        
    ?>
    <?php 
        if($this->Session->check('Message.sucesso')) {
            $mensagem=$this->Session->flash('sucesso');
            $titulo="Tudo certo!";
            $type="success";
        } else if($this->Session->check('Message.erro')) {
            $mensagem=$this->Session->flash('erro');
            $titulo="Try Again...";
            $type="error";
        } else if($this->Session->check('Message.aviso')) {
            $mensagem=$this->Session->flash('aviso');
            $titulo="Stop! Wait a minute!";
            $type="";
        } else {
            $mensagem=NULL;
        }
    ?>
    <?php
        if($mensagem) {
            echo $this->Html->scriptBlock(
                "   new PNotify({
                    title: '".$titulo."',
                    text: '".$mensagem."',
                    type: '".$type."'
                });"
            );
        }
    ?>
</body>
</html>