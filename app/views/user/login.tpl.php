<div class="container">

<?php include __DIR__ . '/../partials/errorlist.tpl.php'; ?>

  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Se connecter</div>
    <div class="card-body">

      <form method="post" action="">
        <div class="form-group">
          <label for="username">Nom</label>
          <input 
          class="form-control" t
          ype="text" 
          name="username" 
          id="username"
          value="<?= isset($user) ? $user->getName() : ''; ?>"
          >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Se souvenir de moi</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>

      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="<?=$router->generate('user-register') ?>">Pas encore inscrit ? Créer un compte</a>
        <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
      </div>
    </div>

  </div>
</div>