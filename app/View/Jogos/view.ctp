<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="product-image-large">
                    <ul class="bxslider">
                        <li><?php echo $this->Html->image("/app/webroot//files/games/imgs/".$jogo['Jogo']['img']); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                <div class="product-image-large">
                    <div id="bx-pager">
                      <a data-slide-index="0" href=""><?php echo $this->Html->image("/app/webroot//files/games/imgs/".$jogo['Jogo']['img']); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>

    <div class="col-md-8 product-details text-left">
        <h2><?php echo h($jogo['Jogo']['nome']); ?></h2>
        <h3>Sinopse</h3>
        <p><?php echo h($jogo['Jogo']['descricao']); ?></p>
        <h3>Informações adicionais</h3>
        <p><?php echo h($jogo['Jogo']['info_adicional']); ?></p>
        
        <hr/>
        
        <h3>Detalhes do jogo</h3>
        <p><strong>Equipe desenvolvedora: </strong><?php echo $this->Html->link('<span class="label label-warning">'.$jogo['Equipe']['nome_equipe'].'</span>', array('controller' => 'equipes', 'action' => 'view', $jogo['Equipe']['id']), array('escape'=>false)); ?></p>
        <p><strong>Última atualização: </strong><?php echo h($jogo['Jogo']['modified']); ?></p>
        <p><strong>Faixa Etária: </strong><?php echo h($jogo['Jogo']['faixa_etaria']); ?></p>
        <p><strong>Gêneros: </strong>
            <?php foreach ($jogo['Genero'] as $genero): ?>
                <?php echo $this->Html->link('<span class="label label-info">'.$genero['nome_genero'].'</span>', array('controller' => 'generos', 'action' => 'view', $genero['id']), array('escape'=>false)); ?>
            <?php endforeach; ?>
        </p>
    </div>
    
</div>

<div class="row">
    
    <div class="col-md-8 text-center">
        <?php echo $this->Html->link("Baixar",array('controller'=>'Jogos', 'action'=>'download/'.$jogo['Jogo']['link']),array("class"=>"btn btn-default btn-lg"));?>
    </div>
    
</div>

<script type="text/javascript">
    $('.bxslider').bxSlider({
      pagerCustom: '#bx-pager'
    });
</script>