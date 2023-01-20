<div class="container mt-5">
    <form action="<?= 'User/login'?>" method="post" class="bg-dark p-3 rounded orange">
        <h3>Log-in</h3>
        <div class="form-group">
            <label for="user" class="fs-4">Usuário</label>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="form-group">
            <label for="senha" class="fs-4">Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="my-3">
            <div class="card-footer">
                <input type="submit" name="submit" class="btn orange-bg fs-5" value="log-in">
            </div>
        </div>
    </form>
</div>