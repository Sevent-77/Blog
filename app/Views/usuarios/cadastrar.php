<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preecha o formulário abaixo para fazer seu cadastro</small></p>

            <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/cadastrar" class="mt-4">
                <div class="form-group">
                    <label for="username">Nome: <sup class="text-danger">*</sup></label>
                    <input type='text' name='username' id='username' value='<?=$dados['nome']?>' class='form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type='text' name='email' id='email' value='<?=$dados['email']?>' class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='password' id='password' value='<?=$dados['senha']?>' class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type='password' name='confirm-password' id='confirm-password' value='<?=$dados['confirma_senha']?>'class='form-control <?= $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados['confirma_senha_erro'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="<?= URL ?>/usuarios/login">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>