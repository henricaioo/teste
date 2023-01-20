<div class="container">
    <!-- caixa de dialogo -->
    <div class="alert-primary my-3 bg-dark orange p-3 rounded">
        <p>Aqui aparecerão os erros ao inserir ou editar um conteúdo</p>
        <?=//o sinal de = substitui o echo 
        \config\Services::validation()->listErrors();?>
    </div>
    <form action="<?= '/gravar'?>" method="post" class="bg-dark p-3 rounded orange">
        <div class="form-group">
           <label for="titulo" class="fs-4">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= isset($conteudo['title_conteudo']) ? $conteudo['title_conteudo'] : set_value('title_conteudo') ?>">
        </div> 
        <div class="form-group">
            <label for="texto_curto" class="fs-4">Resumo</label>
            <input type="text" class="form-control" name="texto_curto" value="<?=
                isset($conteudo['text_curto']) ? $conteudo['text_curto'] : set_value('title_curto') ?>">
        </div>
        <div class="form-group" >
            <label for="texto_completo" class="fs-4">Texto completo</label>
            <textarea name="texto_completo" class="form-control" rows="8"><?=
                isset($conteudo['text_conteudo']) ? $conteudo['text_conteudo'] : set_value('text_conteudo') ?></textarea>
        </div>
        <div class="form-group">
           <label for="tipo" class="fs-4">Tipo do conteúdo</label>
           <select class="form-select" aria-label="Default select example" name="tipo">
            <option value="noticia">Notícia</option>
            <option value="material">Material</option>
           </select>
        </div> 
        <!-- hidden variavel oculta para salvar o id -->
        <input type="hidden" name="id" value="<?= isset($conteudo['id_conteudo']) ? $conteudo['id_conteudo'] : set_value('id_conteudo') ?>">
        <div class="my-3">
            <div class="card-footer">
                <input type="submit" name="submit" class="btn orange-bg fs-5" value="salvar">
                <a href="javascript:history.back()" class="btn orange-bg fs-5">voltar</a>
            </div>
        </div>
    </form>
</div>