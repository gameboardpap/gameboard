<table class="table table-striped">
    <thead>
        <tr>
            <th> - </th>
            <th>Nome do jogo</th>
            <th>Desenvolvedora</th>
            <th>Feedback realizado?</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($downloads as $download): ?>
            <tr class="<?php if($download['Download']['feedback']==1) { ?> Sim <?php } else { ?> Não  <?php } ?> ">
                <td>
                    <?php echo $this->Html->image("/app/webroot//files/games/imgs/".$download["Jogo"]["img"],array("class"=>"img-responsive img-thumbnail img-index-game")); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($download['Jogo']['nome'], array('controller' => 'jogos', 'action' => 'visualizar', $download['Jogo']['nome_amigavel'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($download['Jogo']['Equipe']['nome_equipe'], array('controller' => 'equipes', 'action' => 'visualizar', $download['Jogo']['Equipe']['nome_amigavel'])); ?>
                </td>                
                <td>
                    <?php if($download['Download']['feedback']==1) { ?> Sim <?php } else { ?> Não  <?php } ?> 
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
