    <div class="container">

        <!-- Nav -->
        <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
            </a>
      
            <ul id="menu" class="nav nav-pills">
                <span class="fs-5 pe-4">Bem-Vindo <?=$_SESSION["prestadorName"]?> </span>  
                <li class="nav-item"><a href="controller/prestador_controller.php/?sair=true" class="nav-link active" >Sair</a></li>    
            </ul>
        </header>

        <section id="home" class="mb-5">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mt-3">
                    <h1 class="display-4 fw-bold">Página do Prestador de Serviços</h1>
                    <p class="text-muted mt-4">Nesta Página Você Pode Ver o Seu Perfil Como um Prestador de Serviços para Editar ou Modificar do Jeito Que Você Quiser.</p>
                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json"  background="transparent"  speed="1"  style="max-width: 90%"  loop  autoplay></lottie-player>
                </div>
            </div>
        </section>

        <section class="py-5 my-5">
            <div class="col-12">
                <h2 class="display-7 text-center fw-bold pb-2">Seu Status:</h2>
            </div>
            <table class="table table-striped align-middle">
                    <thead>
                        <th>Id</th>
                        <th>Foto de Perfil</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Modelo da Moto</th>
                        <th>Cor da Moto</th>
                        <th>Placa</th>
                        <th>Chassi</th>
                        <th>Viagens Realizadas</th>
                        <th>Número</th>
                        <th>Editar</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($list as $list):
                        ?>
                        <tr>
                            <td><?= $list['id']; ?></td>
                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal<?= $list['id']; ?>"><img class="rounded-circle" src="<?= $list['path']; ?>" alt="perfil"></a></td>
                            <td><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal<?= $list['id']; ?>"><?= $list['nome']; ?></a></td>
                            <td><?= $list['email']; ?></td>
                            <td><?= $list['idade']; ?></td>
                            <td><?= $list['modelo']; ?></td>
                            <td><?= $list['cor']; ?></td>
                            <td><?= $list['placa']; ?></td>
                            <td><?= $list['chassi']; ?></td>
                            <td><?= $list['viagens']; ?></td>
                            <td><a class="nav-link" href="https://wa.me/5581<?= $list['telefone']; ?>" target="_blank"><?= $list['telefone']; ?></a></td>
                            <td><a href="#" class="btn btn-primary p-2" aria-current="page" data-bs-toggle="modal" data-bs-target="#updateModalMoto"><i class="bi bi-pencil"></i></a></td>

                            <!-- Modal -->
                            <div class="modal fade" id="modal<?= $list['id']; ?>" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card border-light">
                                                <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?= $list['path']; ?>" class="rounded-circle"  width="350" height="350">
                                                    </div>
                                                    <h2 class="card-title pricing-card-title pt-2 pb-3"><?= $list['nome']; ?></h2>
                                                    <ul class="list-unstyled">
                                                        <li><b>Email:</b> <?= $list['email']; ?></li>
                                                        <li><b>Idade:</b> <?= $list['idade']; ?></li>
                                                        <li><b>Modelo da Moto:</b> <?= $list['modelo']; ?></li>
                                                        <li><b>Cor da Moto:</b> <?= $list['cor']; ?></li>
                                                        <li><b>Corridas Realizada:</b> 19</li>
                                                        <li><b>Número:</b> <?= $list['telefone']; ?></li>                                    
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        <!-- Modal CADASTRO MOTO-->
                        <div class="modal fade" id="updateModalMoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-4 shadow">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <h4 class="fw-bold mb-0">Atualizar Cadastro</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body p-5 pt-0">
                                        <form action="controller/prestador_controller.php" enctype="multipart/form-data" method="post">
                                            <div class="form-floating mb-3">
                                                <input name="email" type="email" class="form-control rounded-3" id="floatingInput" value="<?= $list['email']; ?>" required>
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="senha" type="password" class="form-control rounded-3" id="floatingPassword" required>
                                                <label for="floatingPassword">Senha</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="nome" type="text" class="form-control rounded-3" id="floatingNome" value="<?= $list['nome']; ?>" required>
                                                <label for="floatingInput">Seu Nome</label>
                                            </div>
                                            <!-- <div id="fileInput" >
                                                <input name="idImagem" type="file" id="formFile" required>
                                                <label for="formFile" class="form-label">Foto de Perfil</label>
                                            </div> -->
                                            <div class="form-floating mb-3">
                                                <input name="idade" type="text" class="form-control rounded-3" id="floatingIdade" value="<?= $list['idade']; ?>" required>
                                                <label for="floatingInput">Sua Idade</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="telefone" type="text" maxlength="9" class="form-control rounded-3" id="floatingIdade" value="<?= $list['telefone']; ?>" required>
                                                <label for="floatingInput">Telefone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="cor" type="text" class="form-control rounded-3" id="floatingCor" value="<?= $list['cor']; ?>" required>
                                                <label for="floatingInput">Cor da Moto</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="placa" type="text" class="form-control rounded-3" id="floatingPlaca" value="<?= $list['placa']; ?>" required>
                                                <label for="floatingInput">Placa da Moto</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="modelo" type="text" class="form-control rounded-3" id="floatingModelo" value="<?= $list['modelo']; ?>" required>
                                                <label for="floatingInput">Modelo da Moto</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="chassi" type="text" class="form-control rounded-3" id="floatingChassi" value="<?= $list['chassi']; ?>" required>
                                                <label for="floatingInput">Chassi da Moto</label>
                                            </div>
                                            <input name="tela" type="hidden" value="updatePrestador">
                                            <input name="emailOriginal" type="hidden" value="<?= $list['email']; ?>">


                                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Atualizar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                </tbody>
            </table>
            
            


        
    </div>   