<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Decires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="login.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">DASHBOARD</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login ou criar conta</h5>
                    <p class="text-center small">Digite seu nome de usuário e senha para entrar</p>
                  </div>

                  <form class="row g-3 needs-validation" action="login.php" method="POST" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuário</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text"></span>
                        <input type="text" name="usuario" class="form-control" required>
                        <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" required>
                      <div class="invalid-feedback">Por favor insira sua senha.</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Lembre de mim</label>
                      </div>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-primary" type="submit">
                        <a href="includes/dashboard.php"></a>
                    </button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Não tem conta? <a href="includes/cadastro.php">Criar conta</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Desenvolvido por <a href="">decires</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>