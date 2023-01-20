<div class="container mb-6">
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <?php
        if (!empty($questions)) :
        ?>
            <?php
            foreach ($questions as $conteudo_item) :
            ?>
                <div class="col my-4 h-auto">
                    <div class='card h-100 text-bg-dark'>
                        <div class="card-body">
                            <p class=''><?php echo $conteudo_item['enunciado'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="question<?= $conteudo_item['id_question'] ?>" class="btn btn-success">Saiba mais</a>
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