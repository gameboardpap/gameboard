<div class="row">
    <div class="col-md-12">
        <legend>RELATÓRIO - TODOS OS FEEDBACKS DO JOGO <?php echo $this->Html->link(strtoupper($relatorios[0]['Jogo']['nome']),array('controller'=>'jogos','action'=>'visualizar',$relatorios[0]['Jogo']['nome'])); ?></legend>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuário Avaliador</th>
                    <th>Nota</th>
                    <th>Comentário</th>
                    <th>Prós</th>
                    <th>Contras</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($relatorios as $relatorio): ?>
                <tr>
                    <td><?php echo $this->Html->link($relatorio['Usuario']['username'],array('controller'=>'jogos','action'=>'visualizar',$relatorio['Usuario']['username'])); ?></td>
                    <td><?php echo $relatorio['Comentario']['nota'];?></td>
                    <td><?php echo $relatorio['Comentario']['comentario'];?></td>
                    <td><?php echo $relatorio['Comentario']['pros'];?></td>
                    <td><?php echo $relatorio['Comentario']['contras'];?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-right">
            <label>Número de feedbacks: <font color="blue"><?php echo sizeof($relatorios); ?></font></label><br/>
            <label>Nota final: <font color="orange"><?php echo $relatorios[0]['Jogo']['nota']; ?></font></label>
        </div>
    </div>
</div>