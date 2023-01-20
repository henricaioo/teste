<div class="container">
    <!-- caixa de dialogo -->
    <div class="alert-primary my-3 bg-dark orange p-3 rounded">
        <p>Aqui aparecerão os erros ao inserir ou editar um conteúdo</p>
        <?=//o sinal de = substitui o echo 
        \config\Services::validation()->listErrors();?>
    </div>
    <form action="<?= '/gravarquestao'?>" method="post" class="bg-dark p-3 rounded orange mb-5">
        <div class="form-group" >
            <label for="anuncio" class="fs-4">Enunciado da questão</label>
            <textarea name="anuncio" class="form-control" rows="8"><?=
                isset($questions['enunciado']) ? $questions['enunciado'] : set_value('enunciado') ?></textarea>
        </div>
        <div class="form-group">
           <label for="a" class="fs-4">Alternativa A</label>
            <input type="text" class="form-control" name="a" value="<?= isset($questions['a_answer']) ? $questions['a_answer'] : set_value('a_answer') ?>">
        </div> 
        <div class="form-group">
           <label for="b" class="fs-4">Alternativa B</label>
            <input type="text" class="form-control" name="b" value="<?= isset($questions['b_answer']) ? $questions['b_answer'] : set_value('b_answer') ?>">
        </div> 
        <div class="form-group">
           <label for="c" class="fs-4">Alternativa C</label>
            <input type="text" class="form-control" name="c" value="<?= isset($questions['c_answer']) ? $questions['c_answer'] : set_value('c_answer') ?>">
        </div> 
        <div class="form-group">
           <label for="d" class="fs-4">Alternativa D</label>
            <input type="text" class="form-control" name="d" value="<?= isset($questions['d_answer']) ? $questions['d_answer'] : set_value('d_answer') ?>">
        </div> 
        <div class="form-group" >
            <label for="correcao" class="fs-4">Correção</label>
            <textarea name="correcao" class="form-control" rows="8"><?=
                isset($questions['correct']) ? $questions['correct'] : set_value('correct') ?></textarea>
        </div>
        <!-- hidden variavel oculta para salvar o id -->
        <input type="hidden" name="id" value="<?= isset($questions['id_question']) ? $questions['id_question'] : set_value('id_question') ?>">
        <div class="my-3">
            <div class="card-footer">
                <input type="submit" name="submit" class="btn orange-bg fs-5" value="salvar">
                <a href="javascript:history.back()" class="btn orange-bg fs-5">voltar</a>
            </div>
        </div>
    </form>
</div>