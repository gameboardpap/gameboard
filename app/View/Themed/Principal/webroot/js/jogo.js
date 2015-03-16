/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $(".form-add-jogo").submit(function() {
        var dados = $(this).serialize();
        var url = "<?php echo $this->Html-> ?>";
        $.ajax({
          type: 'post',
          data: dados,
          url: url ,
          success: function(retorno){
            $('#resposta').html(retorno);  
          }
        });
    });
});