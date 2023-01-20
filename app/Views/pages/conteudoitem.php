<div class="container">
<?php
    if(!empty($conteudo)):
    ?>
	<div class="card my-3">
		<div clas="card-body">
			<h3><?php echo $conteudo['title_conteudo']; ?></h3>
			<p class="text-muted"><?php echo $conteudo['text_curto']; ?></p>
			<p><?php echo $conteudo['text_conteudo']; ?></p>
		</div>
		<!-- botão voltar -->
		<div class="card-footer">
			<a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
		</div>
	</div>
    <?php endif;?>
</div>