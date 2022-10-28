<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9">
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
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin</h1>
                                    </div>
                                    <form class="user" action="controller/adm_controller.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite seu e-mail" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Digite sua senha" name="senha" required>
                                        </div>
                                        
                                        <input name="tela" type="hidden" value="loginDoAdm">
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
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
    <div class="modal fade" id="loginModalAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Admin</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5 pt-0">
                <form action="controller/adm_controller.php" method="post">
                    <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="senha" required>
                    <label for="floatingPassword">Senha</label>
                    </div>
                    <input name="tela" type="hidden" value="loginDoAdm">
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Entrar</button>
                </form>
                </div>
            </div>
            </div>
        </div>