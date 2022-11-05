<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php
                                    if (isset($_GET["erro"]) && $_GET["erro"] == "senhaInválida") {
                                        echo '
                                        <div class="alert alert-warning alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Atençao!</strong> Usuário ou senha incorretos.
                                        </div>
                                        ';
                                    }     
                                ?>
                                <div class="p-5 mb-3">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 font-weight-bold mb-1">Admin</i></h1>
                                        <h1 class="h4 text-gray-900 mb-4">Moto Rápido <i class="fa-solid fa-motorcycle"></i></h1>
                                    </div>
                                    <form class="user" action="controller/adm_controller.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user font-weight-bold" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite seu e-mail" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user font-weight-bold" id="exampleInputPassword" placeholder="Digite sua senha" name="senha" required>
                                        </div>
                                        
                                        <input name="tela" type="hidden" value="loginDoAdm">
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold">
                                            Entrar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  