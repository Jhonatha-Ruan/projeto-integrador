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
                    <h1 class="display-4 fw-bold">Página do Usuário</h1>
                    <p class="text-muted mt-4">Nesta Página Você Pode Chamar um Prestador de Serviços para Levar Você ao Seu Destino, ou para qualquer outra finalidade que desejar.</p>
                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json"  background="transparent"  speed="1"  style="max-width: 90%"  loop  autoplay></lottie-player>
                </div>
            </div>
        </section>


        <section>
            <div class="container col-xxl-12 px-5 fs-1">
                <div class="row pt-5 mt-3">
                    <div class="col-12">
                        <h2 class="display-7 text-center fw-bold">Dicas para você ter uma ótima experiência na sua viagem:</h2>
                    </div>
                </div>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <!-- <div class="col-6 col-sm-8 col-lg-6" style="width: 12rem;">
                        <img src="//d9hhrg4mnvzow.cloudfront.net/99app.com/99-moto/369a9eab-header-drv_10nf0i70fr0hs04o00f028.png" class="card-img-top">
                    </div> -->
                    <div class="col-lg-12 rounded-5 text-black bg-light py-4 px-4 border border-dark effect">
                        <!-- <h1 class="display-5 fw-bold lh-1 mb-3">Chegou Moto Rápido.</h1> -->
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Antes da corrida iniciar, apresente-se ao motociclista parceiro</p>
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Respeite o motociclista parceiro, seja pontual</p>
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Pergunte para o motociclista parceiro onde você deve se apoiar</p>
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Em curvas, incline o corpo junto com o do motociclista parceiro</p>
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Mantenha as pernas e joelhos alinhados com o quadril e pernas do motociclista parceiro</p>
                        <p class="lead fs-5"> <i class="bi bi-arrow-right-circle-fill"></i> Firme bem os pés nas pedaleiras e busque ficar com a coluna ereta</p>
                        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                            </div> -->
                    </div>
                </div>
            </div>
        </section>


        <!-- Tabela -->
        <section class="py-5 my-5">
            <div class="col-12">
                <h2 class="display-7 text-center fw-bold pb-2">Prestadores de Serviços:</h2>
            </div>
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
                        <th>WhatsApp</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listaPrestador as $list):
                        ?>
                        <tr>
                            <td><?= $list['id']; ?></td>
                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal<?= $list['id']; ?>"><img src="<?= $list['path']; ?>" alt="perfil"></a></td>
                            <td><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal<?= $list['id']; ?>"><?= $list['nome']; ?></a></td>
                            <td><?= $list['email']; ?></td>
                            <td><?= $list['idade']; ?></td>
                            <td><?= $list['modelo']; ?></td>
                            <td><?= $list['cor']; ?></td>
                            <td><a class="nav-link" href="https://wa.me/5581<?= $list['telefone']; ?>" target="_blank"><?= $list['telefone']; ?></a></td>
                            <td><a href="https://wa.me/5581<?= $list['telefone']; ?>" class="btn btn-success"><i class="bi bi-whatsapp"></i> Chamar</a></td>

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

                                                    <a href="https://wa.me/5581<?= $list['telefone']; ?>" target="_blank" class="w-100 btn btn-lg btn-success"> <i class="bi bi-whatsapp"></i> Chamar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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