 <div class="login index">
        <h2><?php echo __('Login'); ?></h2>
        
        <?php echo $this->Form->create(false,array('action' => 'login'));  ?>
            <fieldset>
                    <legend><?php echo __('Entrar'); ?></legend>
            <?php
                    echo $this->Form->input('Login.nickname');
                    echo $this->Form->input('Login.password');
            ?>
            </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
        
 </div>

