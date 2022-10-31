  <div class="container">
    <!-- Nav -->
    <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
      </a>

      <ul id="menu" class="nav nav-pills">
        <li class="nav-item"><a href="#entrar" class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</a></li>
        <li class="nav-item"><a href="#cadastre" class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#cadastroModal">Cadastre-se</a></li>
        <li class="nav-item"><a href="#prestador" class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#cadastroModalMoto">Seja um prestador de Serviços</a></li>
        <li class="nav-item"><a href="http://localhost/motorapido/?pagina=4" class="nav-link" aria-current="page">Admin</a></li>
      </ul>
    </header>
    <?php
      if (isset($_GET["cadastro"]) && $_GET["cadastro"] == "sucesso") {
        echo '
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Cadastrado</strong> com sucesso, agora faça o login para entrar.
        </div>
        ';
      }     
    ?>
    <?php
      if (isset($_GET["cadastro"]) && $_GET["cadastro"] == "usuarioExiste") {
        echo '
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Email Já Cadastrado</strong> Atenção este email já está cadastrado.
        </div>
        ';
      }     
    ?>
    <?php
      if (isset($_GET["cadastro"]) && $_GET["cadastro"] == "erro") {
        echo '
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Erro</strong> Algo deu errado.
        </div>
        ';
      }     
    ?>
    <?php
      if (isset($_GET["erro"]) && $_GET["erro"] == "senhaInválida") {
        echo '
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Atenção</strong> Email ou senha está incorreto, verifique e tente novamente.
        </div>
        ';
      }     
    ?>
    <?php
      if (isset($_GET["erro"]) && $_GET["erro"] == "nãoLogado") {
        echo '
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Atenção</strong> Você não pode acessar outras páginas sem estar logado.
        </div>
        ';
      }     
    ?>
    <section id="home" class="mb-5">
      <div class="row text-center text-md-start">
        <div class="col-md-6 mt-3">
          <h2 class="mt-5 fs-5">Aqui você tem mais segurança e agilidade</h2>
          <h1 class="display-2 fw-bold">Moto Rápido</h1>
          <p class="text-muted mt-4">Moto rápido é um website que permite os usuários realizarem viagens, entregas e delivery com nossos motociclistas parceiros. Usando nossos serviços você tem mais economia, praticidade e segurança.</p>
          <a href="#entrar" class="btn btn-primary mt-4 w-40 p-3 fw-bold" data-bs-toggle="modal" data-bs-target="#loginModal">Pedir Moto <i class="fa-solid fa-motorcycle ms-1"></i></a>
        </div>

        <div class="col-md-6">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json" background="transparent" speed="1" style="max-width: 90%" loop autoplay></lottie-player>
        </div>
      </div>
    </section>

    <section>
      <!-- MODAL LOGIN USUARIO-->
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h2 class="fw-bold mb-0">Login Usuário</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form action="controller/usuario_controller.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" required>
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="senha" required>
                  <label for="floatingPassword">Senha</label>
                </div>
                <input name="tela" type="hidden" value="loginDoUsuario">
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Entrar</button>
                <small class="text-muted">Se é um prestador de serviços <a href="#entrar" class="color-primary" aria-current="page" data-bs-toggle="modal" data-bs-target="#loginModalMoto">Clique aqui </a></small>


              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <!-- MODAL LOGIN MOTO -->
      <div class="modal fade" id="loginModalMoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h3 class="fw-bold mb-0">Login Prestador de Serviços</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form action="controller/prestador_controller.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" name="email" required>
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" name="senha" required>
                  <label for="floatingPassword">Senha</label>
                </div>
                <input name="tela" type="hidden" value="loginDoPrestador">
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Entrar</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MODAL LOGIN ADMIN-->
    <!-- <div class="modal fade" id="loginModalAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div> -->


    <section>
      <!-- Modal CADASTRO USUARIO-->
      <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h2 class="fw-bold mb-0">Cadastro</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form class="" action="controller/usuario_controller.php" method="post">
                <div class="form-floating mb-3">
                  <input name="email" type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="senha" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" required>
                  <label for="floatingPassword">Senha</label>
                </div>
                <input name="tela" type="hidden" value="cadastroDeUsuario">

                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Cadastrar</button>
                <small class="text-muted">Ao clicar em cadastrar você aceita com os termos e uso.</small>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <!-- Modal CADASTRO MOTO-->
      <div class="modal fade" id="cadastroModalMoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h4 class="fw-bold mb-0">Cadastro Prestadores de Serviços</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form action="controller/prestador_controller.php" enctype="multipart/form-data" method="post">
                <div class="form-floating mb-3">
                  <input name="email" type="email" class="form-control rounded-3" id="floatingInput" required>
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="senha" type="password" class="form-control rounded-3" id="floatingPassword" required>
                  <label for="floatingPassword">Senha</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="nome" type="text" class="form-control rounded-3" id="floatingNome" required>
                  <label for="floatingInput">Seu Nome</label>
                </div>
                <div id="fileInput" >
                  <input name="idImagem" type="file" id="formFile" required>
                  <label for="formFile" class="form-label">Foto de Perfil</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="idade" type="text" class="form-control rounded-3" id="floatingIdade" required>
                  <label for="floatingInput">Sua Idade</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="telefone" type="text" maxlength="9" class="form-control rounded-3" id="floatingIdade" required>
                  <label for="floatingInput">Telefone</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="cor" type="text" class="form-control rounded-3" id="floatingCor" required>
                  <label for="floatingInput">Cor da Moto</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="placa" type="text" class="form-control rounded-3" id="floatingPlaca" required>
                  <label for="floatingInput">Placa da Moto</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="modelo" type="text" class="form-control rounded-3" id="floatingModelo" required>
                  <label for="floatingInput">Modelo da Moto</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="chassi" type="text" class="form-control rounded-3" id="floatingChassi" required>
                  <label for="floatingInput">Chassi da Moto</label>
                </div>
                <input name="tela" type="hidden" value="cadastroDePrestador">

                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Cadastrar</button>
                <small class="text-muted">Ao clicar em cadastrar você aceita com os termos e uso.</small>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Serviços -->
    <section id="servicos" class="text-center py-5 my-5">
      <div class="row pt-5 mt-3">
        <div class="col-12">
          <h2 class="display-5 fw-bold">Serviços Prestados</h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 mt-5">
          <img class="shadow border p-4" src="./assets/img/entrega-rapida.png" alt="delivery">
          <h2 class="fw-normal mt-3">Delivery</h2>
          <p>Na Moto Rápido nossos prestadores de serviços realiza entregas de compras realizadas pela internet, aplicativos ou telefone diretamente onde o cliente deseja.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 mt-5">
          <img class="shadow border p-4" src="./assets/img/moto.png" alt="moto-taxi">
          <h2 class="fw-normal mt-3">Moto-Táxi</h2>
          <p>Os usuários podem solicitar esse tipo de viagem pelo próprio site da Moto Rápido com rapidez e segurança.</p> 
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 mt-5">
          <img class="shadow border p-4" src="./assets/img/take-away.png" alt="entregas">
          <h2 class="fw-normal mt-3">Entregas</h2>
          <p>Nossos prestadores de serviços realiza entregas de qualquer tipo de produtos onde o cliente desejar.</p>        
        </div><!-- /.col-lg-4 -->
      </div>
    </section>


    <!-- Vantagens -->
    <section id="vantagens" class="py-5 my-5">
      <!-- bg-warning  border border-warning-->
      <div class="container col-xxl-12 px-5 rounded">
        <div class="row pt-5 mt-3 text-center">
          <div class="col-12">
            <h2 class="display-5 fw-bold">Com a Moto Rápido Você Tem Vantagem</h2>
          </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="list-group w-auto">
            <div class="list-group-item d-flex gap-3 py-3" aria-current="true">
              <img src="//d9hhrg4mnvzow.cloudfront.net/99app.com/99-moto/56ddf51b-icon-02_102e02f02e02e000000028.png" alt="twbs" class="rounded flex-shrink-0" width="45" height="45">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="fw-bold mb-0">Economia</h6>
                  <p class="mb-0 opacity-75">Economize ainda mais no seu dia a dia</p>
                </div>
              </div>
            </div>
            <div class="list-group-item d-flex gap-3 py-3" aria-current="true">
            <i class="bi bi-clock fs-1 ms-1"></i>
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="fw-bold mb-0">Praticidade</h6>
                  <p class="mb-0 opacity-75">Chegue em menos tempo ao encurtar o seu destino e ainda evite o trânsito intenso da cidade.</p>
                </div>
              </div>
            </div>
            <div class="list-group-item d-flex gap-3 py-3" aria-current="true">
              <img src="//d9hhrg4mnvzow.cloudfront.net/99app.com/99-moto/fb4c5386-lp-icon-06_102o02o02o02n000000028.png" alt="twbs" class="rounded flex-shrink-0" width="45" height="45">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="fw-bold mb-0">Segurança</h6>
                  <p class="mb-0 opacity-75">Conte com o recursos de segurança da Moto Rápido. Passageiros e passageiras, assim como motociclistas parceiros e parceiras têm direito ao seguro de proteção contra acidentes.</p>
                </div>
              </div>
            </div>
          </div> 
      </div>
    </section>

    <!-- Ranking -->
    <section id="precos" class="mt-1 py-1">
      <div class="pricing-header pt-5 mt-5 text-center">
        <h2 class="display-5 fw-bold">Ranking</h2>
        <p class="fs-5 text-muted">Nossos prestadores de serviços com mais corridas feitas na nossa plataforma.</p>
      </div>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

        <div class="col">
          <div class="card border-light mb-3 mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-dark border-light">
              <h5 class="my-0 fw-normal"> <i class="bi bi-trophy-fill"></i> Primeiro Lugar</h5>
            </div>
            <div class="card-body">

              <div class="p-4 text-center w-100">
                <img src="https://thumbs.dreamstime.com/b/retrato-delantero-del-hombre-latino-hermoso-contra-el-fondo-blanco-inicial-cercano-133383508.jpg" class="rounded-circle"  width="130" height="100" alt="Bootstrap 5 Extended Avatar">
              </div>

              <h3 class="card-title pricing-card-title">Victor Motos</h3>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Corridas Realizada: 25</li>
                <!-- <li>Pontualidade: Bom</li> -->
                <!-- <div class="container-rating">
                  <div class="review-rating">
                    <div class="left-review"> -->
                      <!-- <div class="review-title">Avaliação 3.5</div>
                      <div class="review-star">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                        <span class="fa fa-star-o"></span>
                      </div> -->
                      <!-- <div class="review-people"><i class="fa fa-user"></i> 8,445,600 total</div> -->
                    <!-- </div>
                  </div>
                </div> -->
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border-light mb-3 mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-dark border-light">
              <h5 class="my-0 fw-normal"> <i class="fa-solid fa-medal"></i> Segundo Lugar</h5>
            </div>
            <div class="card-body">
              <div class="p-4 text-center w-100">
                <img src="https://thumbs.dreamstime.com/b/hombre-con-barba-y-su%C3%A9ter-blanco-casual-joven-apuesto-barbudo-posa-en-estudio-sobre-fondo-164205623.jpg" class="rounded-circle"  width="130" height="100" alt="Bootstrap 5 Extended Avatar">
              </div>
              <h3 class="card-title pricing-card-title">Thiago Motos</h3>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Corridas Realizada: 19</li>
                <!-- <li>Pontualidade: Bom</li>
                <div class="container-rating">
                  <div class="review-rating">
                    <div class="left-review">
                      <div class="review-title">Avaliação 3.5</div>
                      <div class="review-star">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                        <span class="fa fa-star-o"></span>
                      </div>
                      <div class="review-people"><i class="fa fa-user"></i> 8,445,600 total</div>
                    </div>
                  </div>
                </div> -->
              </ul>

              <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border-light mb-3 mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-dark border-light">
              <h5 class="my-0 fw-normal"> <i class="fa-solid fa-award"></i> Terceiro Lugar</h5>
            </div>
            <div class="card-body">
              <div class="p-4 text-center w-100">
                <img src="https://thumbs.dreamstime.com/b/retrato-de-hombre-mirando-la-c%C3%A1mara-sobre-el-fondo-blanco-158750254.jpg" class="rounded-circle"  width="105" height="100" alt="Bootstrap 5 Extended Avatar">
              </div>
              <h3 class="card-title pricing-card-title">Taciara Motos</h3>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Corridas Realizada: 10</li>
                <!-- <li>Pontualidade: Bom</li>
                <div class="container-rating">
                  <div class="review-rating">
                    <div class="left-review">
                      <div class="review-title">Avaliação 3.5</div>
                      <div class="review-star">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-o"></span>
                        <span class="fa fa-star-o"></span>
                      </div>
                      <div class="review-people"><i class="fa fa-user"></i> 8,445,600 total</div>
                    </div>
                  </div>
                </div> -->
              </ul>

              <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- FAQ
    <section id="faq" class="py-5 mt-5">
      <div class="row pt-5 mt-5">
        <div class="col-12 text-center">
          <h2 class="display-5 fw-bold">Conheça as vantagens da Moto Rápido</h2>
        </div>
      </div>
      <div class="row mt-3 mb-5">
        <div class="col-12">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <i class="bi bi-cash-coin"></i> 
                  Economia
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                Economize ainda mais no seu dia a dia.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Praticidade
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  Chegue em menos tempo ao encurtar o seu destino e ainda evite o trânsito intenso da cidade
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">         
                  Segurança
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                Conte com o recursos de segurança da Moto Rápido. Passageiros e passageiras, assim como motociclistas parceiros e parceiras têm direito ao seguro de proteção contra acidentes.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contatos -->
    <section id="contatos" class="py-4 mt-5">
      <div class="row pt-5 mt-5">
        <div class="col-12 text-center">
          <h2 class="display-5 fw-bold">Contato</h2>
        </div>
      </div>

      <div class="row align-items-md-stretch text-center mt-3">
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Fale Conosco</h2>
            <p class="p-5">Por aqui você pode entrar em contato com a nossa equipe e também se quiser esclarecer qualquer dúvida estamos a sua disposição</p>
            <p class="mt-3"><i class="fa-solid fa-phone"></i> (81) 98106-5794</p>
            <p class="mt-3"><i class="fa-solid fa-envelope"></i> suporte.motorapido@gmail.com</p>
            <a class="btn btn-outline-success" href="https://wa.me/5581981065794" target="_blank"><i class="fa-brands fa-whatsapp"></i> Chamar WhatsApp</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3">
            <p>ETE, 123, Centro - Vitoria de Santo Antão</p>
            <iframe class="m-0 m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31760606.16501001!2d-69.73283242039209!3d-13.656114229270806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1655949962977!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

   