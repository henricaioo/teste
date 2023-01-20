<div class="container mb-5 mt-5">
    <a href="<?php echo '/inserir' ?>" class="btn btn-primary">Adicionar conteúdo</a>
    <a href="<?php echo '/admquestions' ?>" class="btn btn-primary">Questões</a>
    <div class="row mt-5 row-cols-1 row-cols-md-2 g-4">
        <?php
        if (!empty($conteudo)) :
        ?>
            <?php
            foreach ($conteudo as $conteudo_item) :
            ?>
                <div class="col my-4 h-auto">
                    <div class='card h-100 text-bg-dark'>
                        <div class="card-body">
                            <h3 class=''><?php echo $conteudo_item['title_conteudo'] ?></h3>
                            <p class=''><?php echo $conteudo_item['text_curto'] ?></p>
                            <p class='m-0 '>tipo: <?php echo $conteudo_item['type_conteudo'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= $conteudo_item['id_conteudo'] ?>" class="btn btn-success">Saiba mais</a>
                            <a href="edit<?= $conteudo_item['id_conteudo'] ?>" class="btn btn-warning">Editar</a>
                            <a href="delete<?= $conteudo_item['id_conteudo'] ?>" class="btn btn-danger">Excluir</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <h3 class="orange">Sem conteúdo</h3>
            <p class="orange">Não existe conteúdo cadastrado</p>
        <?php endif; ?>
    </div>
</div>