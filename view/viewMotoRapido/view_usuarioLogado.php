    <div class="container">

        <!-- Nav -->
        <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
            </a>
      
            <ul id="menu" class="nav nav-pills">
                <span class="fs-5 pe-4">Bem-Vindo <?=$_SESSION["usuarioName"]?> </span>  
                <li class="nav-item"><a href="controller/usuario_controller.php/?sair=true" class="nav-link active" >Sair</a></li>    
            </ul>
        </header>

        <section id="home" class="mb-5">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mt-3">
                   
                    <h1 class="display-2 fw-bold">Usuário Logado</h1>
                    
                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json"  background="transparent"  speed="1"  style="max-width: 90%"  loop  autoplay></lottie-player>
                </div>
            </div>
        </section>

        <!-- Tabela -->
        <section>
            <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Foto de Perfil</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Idade</th>
                        <th>Modelo da Moto</th>
                        <th>Cor da Moto</th>
                        <th>Número</th>
                        <th>Chamar</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listaPrestador as $list):
                        ?>
                        <tr>
                            <td><?= $list['id']; ?></td>
                            <td><a target="_blank" href="<?= $list['path']; ?>"><img src="<?= $list['path']; ?>" alt="perfil"></a></td>
                            <td><a class="nav-link" target="_blank" href="<?= $list['path']; ?>"><?= $list['nome']; ?></a></td>
                            <td><?= $list['email']; ?></td>
                            <td><?= $list['idade']; ?></td>
                            <td><?= $list['modelo']; ?></td>
                            <td><?= $list['cor']; ?></td>
                            <td><a class="nav-link" href="https://wa.me/5581<?= $list['telefone']; ?>" target="_blank"><?= $list['telefone']; ?></a></td>
                            <td><a href="https://wa.me/5581<?= $list['telefone']; ?>" class="btn btn-success"><i class="bi bi-whatsapp"></i> Chamar</a></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                </tbody>
            </table>

            <nav class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $_GET['page'] - 1; ?>">Anterior</a></li>
                    <?php for($i = 1; $i<= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $i; ?>"><?= $i; ?></a></li>   
                    <?php endfor; ?>              
                    <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $_GET['page'] + 1; ?>">Próximo</a></li>
                </ul>
            </nav>
        </section>
        

        
    </div>    