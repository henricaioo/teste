<div class="container">
    <!-- caixa de dialogo -->
    <div class="alert-primary my-3 bg-dark orange p-3 rounded">
        <?=//o sinal de = substitui o echo 
        \config\Services::validation()->listErrors();?>
    </div>
    <form action="User/saveAdm" method="post" class="bg-dark p-3 rounded orange">
        <h2>Digite a senha secreta</h2>
        <div class="form-group">
            <label for="secret" class="fs-4">Senha secreta</label>
            <input type="password" class="form-control" name="secret">
        </div>
        <!-- hidden variavel oculta para salvar o id -->
        <input type="hidden" name="segredo" value="ahjb765">
        <input type="hidden" name="id" value="<?= isset($user['id_user']) ? $user['id_user'] : set_value('id_user') ?>">
        <div class="my-3">
            <div class="card-footer">
                <input type="submit" name="submit" class="btn orange-bg fs-5" value="salvar">
                <a href="javascript:history.back()" class="btn orange-bg fs-5">voltar</a>
            </div>
        </div>
    </form>
</div>