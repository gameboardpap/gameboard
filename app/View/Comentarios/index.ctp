<?php foreach ($comentarios as $comentario): ?>
    <div class="row">
        <div class="col-md-2 col-sm-2 hidden-xs">
            <div class="thumbnail member-photo">
            <?php if(empty($comentario['Usuario']['avatar'])): ?>
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
            <?php else: ?>
                <?php // echo $this->Html->image('/app/webroot//files/usuario_avatar/'.$comentario['Usuario']['avatar']); ?>
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
            <?php endif; ?>
            <div class="member-name">
                <?php echo $comentario['Usuario']['username']; ?>
                <span>Lorde supremo</span>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="panel panel-default arrow left">
                <div class="panel-body">
                    <div class="comment-post">
                        <div class="row">
                            <div class="col-md-10">
                                <legend>Comentários</legend>
                                <p>
                                    <?php echo $comentario['Comentario']['comentario']; ?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <legend>Nota</legend>
                                <span class="label label-default"><?php echo $comentario['Comentario']['nota']; ?>.0</span>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-6">
                                <legend class="pros">Prós</legend>
                                <p class="pros">
                                    <?php echo $comentario['Comentario']['pros']; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <legend class="contras">Contras</legend>
                                <p class="contras">
                                    <?php echo $comentario['Comentario']['contras']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="comment-user"><i class="fa fa-user"></i> <?php echo $comentario['Usuario']['username']; ?></div>
                        <div class="comment-date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/y H:i',strtotime($comentario['Comentario']['created'])); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <ul class="pagination">
                <?php
                    echo $this->Paginator->numbers(array(
                            'separator' => null,
                            'modulus'=>5,
                            'ellipsis'=>'...',
                            'tag'=>'li',
                            'class '=>'paginacao-comments',
                            'currentTag'=>'a',
                            'currentClass'=>'active'
                            )
                    );
                ?>
            </ul>
        </div>
    </div>
</div>