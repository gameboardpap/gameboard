<div class="row">
    <div class="col-md-12">
        <legend>RELATÓRIO - JOGOS MELHORES AVALIADOS </legend>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jogo</th>
                    <th>Desenvolvedora</th>
                    <th>Nota</th>
                    <th>Número de avaliações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relatorios as $relatorio): ?>
                <tr>
                    <td><?php echo $this->Html->link($relatorio['Jogo']['nome'],array('controller'=>'jogos','action'=>'visualizar',$relatorio['Jogo']['nome'])); ?></td>
                    <td><?php echo $this->Html->link($relatorio['Jogo']['Equipe']['nome_equipe'],array('controller'=>'desenvolvedoras','action'=>'visualizar',$relatorio['Jogo']['Equipe']['nome_equipe'])); ?></td>
                    <td><?php echo $relatorio['Jogo']['nota']; ?></td>
                    <td><?php echo $relatorio['Comentario']['total_feed']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<!--        <div class="text-right">
            <label>Número total de jogos no portal: <font color="blue">3</font></label><br/>
        </div>-->
    </div>
</div>