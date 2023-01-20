<div class="container">
<?php
    if(!empty($questao)):
    ?>
	<div class="card my-3">
		<div class="card-body">
			<h3>Questão: <?php echo $questao['id_question']; ?></h3>
			<p><?php echo $questao['enunciado']; ?></p>
            <p>A) <?php echo $questao['a_answer']; ?></p>
            <p>B) <?php echo $questao['b_answer']; ?></p>
            <p>C) <?php echo $questao['c_answer']; ?></p>
            <p>D) <?php echo $questao['d_answer']; ?></p>
            <button onclick="showCorrect()" class="btn btn-success">Mostrar correção</button>
            <div id="a" class="hide">
                <div class="d-flex mt-2">
                    <p><?php echo $questao['correct']; ?></p>
                    <button class="btn btn-danger ms-2" onclick="hideCorrect()">X</button>
                </div>
            </div>
		</div>
		<!-- botão voltar -->
		<div class="card-footer mt-2">
			<a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
		</div>
	</div>
    <?php else : ?>
            <h3 class="orange">Sem conteúdo</h3>
            <p class="orange">Não existe conteúdo cadastrado</p>
    <?php endif;?>
</div>
<script src='js/controle.js'></script>