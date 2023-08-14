<link rel="stylesheet" href="/public/css/estilos.css">
<div class="cadastro" style="margin: 70px;">
<div class="card">
  <div class="card-header">
    <div class="text-header">Register</div>
  </div>
  <div class="card-body">
    <form action="#" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input required="" class="form-control" name="username" id="username" type="text" value="<?=$dados['nome']?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input required="" class="form-control" name="email" id="email" type="email" value="<?=$dados['email']?>">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input required="" class="form-control" name="password" id="password" type="password" value="<?=$dados['senha']?>">
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input required="" class="form-control" name="confirm-password" id="confirm-password" type="password" value="<?=$dados['confirma_senha']?>">
      </div>
    <input type="submit" class="btn" value="submit">    </form>
  </div>
</div>
</div>