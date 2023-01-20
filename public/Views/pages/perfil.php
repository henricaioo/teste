<div class="container">
    <!-- caixa de dialogo -->
    <div class="alert-primary my-3 bg-dark orange p-3 rounded">
        <?=//o sinal de = substitui o echo 
        \config\Services::validation()->listErrors();?>
    </div>
    <form action="User/gravarEditUser" method="post" class="bg-dark p-3 rounded orange">
        <h2>Editar Usuário</h2>
        <div class="form-group">
            <label for="user" class="fs-4">Usuário</label>
            <input type="text" class="form-control" name="user" value="<?= isset($user['user']) ? $user['user'] : set_value('user') ?>">
        </div>
        <div class="form-group">
            <label for="senha" class="fs-4">Senha Nova</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="form-group">
            <label for="atual" class="fs-4">Senha Atual</label>
            <input type="password" class="form-control" name="atual">
        </div>
        <a href="becomeadm" class="orange">Tornar-se adm.</a>
        <!-- hidden variavel oculta para salvar o id -->
        <input type="hidden" name="id" value="<?= isset($user['id_user']) ? $user['id_user'] : set_value('id_user') ?>">
        <div class="my-3">
            <div class="card-footer">
                <input type="submit" name="submit" class="btn orange-bg fs-5" value="salvar">
                <a href="javascript:history.back()" class="btn orange-bg fs-5">voltar</a>
            </div>
        </div>
    </form>
</div>