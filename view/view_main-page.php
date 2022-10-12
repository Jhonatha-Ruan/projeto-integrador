<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/07277f6fe9.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/img/veterinario.png" type="image/x-icon">
    <title>Moto Rápido</title>
</head>
<body class="bg-light" data-bs-spy="scroll" data-bs-target="#menu">
    <div class="container">
        <!-- Nav -->
        <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
            </a>
      
            <ul id="menu" class="nav nav-pills">

                <li class="nav-item"><a href="#entrar" class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</a></li>
                <li class="nav-item"><a href="#cadastre" class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#cadastroModal">Cadastre-se</a></li>
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#cadastroModalMoto">Seja um prestador de Serviços</a></li>

            </ul>
        </header>

        <section id="home" class="mb-5">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mt-3">
                    <h2 class="mt-5 fs-5">Aqui você tem mais segurança e agilidade</h2>
                    <h1 class="display-2 fw-bold">Moto Rápido</h1>
                    <p class="text-muted mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi itaque ab ipsum libero. Cupiditate, quo labore quibusdam cum atque illum maiores fugiat possimus, reiciendis non quod laudantium, nihil nisi?</p>
                    <a href="#" class="btn btn-primary mt-4 w-40 p-3 fw-bold">Pedir Moto <i class="fa-solid fa-motorcycle ms-1"></i></a>
                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json"  background="transparent"  speed="1"  style="max-width: 90%"  loop  autoplay></lottie-player>
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
                        <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="senha">
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
                        <input type="email" class="form-control rounded-3" id="floatingInput" name="email">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" name="senha">
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
                        <input name="email" type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="senha" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
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
                    <form class="" action="controller/prestador_controller.php" method="post">
                      <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control rounded-3" id="floatingInput" >
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="senha" type="password" class="form-control rounded-3" id="floatingPassword" >
                        <label for="floatingPassword">Senha</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="nome" type="text" class="form-control rounded-3" id="floatingNome" >
                        <label for="floatingInput">Seu Nome</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="idade" type="text" class="form-control rounded-3" id="floatingIdade" >
                        <label for="floatingInput">Sua Idade</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="cor" type="text" class="form-control rounded-3" id="floatingCor" >
                        <label for="floatingInput">Cor da Moto</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="placa" type="text" class="form-control rounded-3" id="floatingPlaca" >
                        <label for="floatingInput">Placa da Moto</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="modelo" type="text" class="form-control rounded-3" id="floatingModelo" >
                        <label for="floatingInput">Modelo da Moto</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input name="chassi" type="text" class="form-control rounded-3" id="floatingChassi" >
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
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">Detalhes »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 mt-5">
                    <img class="shadow border p-4" src="./assets/img/moto.png" alt="moto-taxi">
                    <h2 class="fw-normal mt-3">Moto-Táxi</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">Detalhes »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 mt-5">
                    <img class="shadow border p-4" src="./assets/img/take-away.png" alt="entregas">
                    <h2 class="fw-normal mt-3">Entregas</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">Detalhes »</a></p>
                </div><!-- /.col-lg-4 -->
              </div>
        </section>

        <!-- Ranking -->
        <section id="precos" class="mt-5 py-5">
      <div class="pricing-header pt-5 mt-5 text-center">
        <h2 class="display-5 fw-bold">Ranking</h2>
        <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
      </div>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal"> <i class="bi bi-trophy-fill"></i> Primeiro Lugar</h4>
            </div>
            <div class="card-body">

              <div class="p-4 text-center w-100">
                <img src="https://i.picsum.photos/id/629/200/300.jpg?hmac=YTSnJIQbXgJTOWUeXAqVeQYHZDodXXFFJxd5RTKs7yU" class="rounded-circle" style="width: 90px;" alt="Bootstrap 5 Extended Avatar">
              </div>

              <!-- <img src="https://i.picsum.photos/id/629/200/300.jpg?hmac=YTSnJIQbXgJTOWUeXAqVeQYHZDodXXFFJxd5RTKs7yU" class="rounded-circle" style="width: 150px;" alt="Bootstrap 5 Extended Avatar"> -->

              <h1 class="card-title pricing-card-title">Victor Motos</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Números de corridas: 90</li>
                <li>Pontualidade: Bom</li>
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
                </div>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal"> <i class="fa-solid fa-medal"></i> Segundo Lugar</h4>
            </div>
            <div class="card-body">
              <div class="p-4 text-center w-100">
                <img src="https://i.picsum.photos/id/629/200/300.jpg?hmac=YTSnJIQbXgJTOWUeXAqVeQYHZDodXXFFJxd5RTKs7yU" class="rounded-circle" style="width: 90px;" alt="Bootstrap 5 Extended Avatar">
              </div>
              <h1 class="card-title pricing-card-title">Thiago Motos</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Números de corridas: 85</li>
                <li>Pontualidade: Bom</li>
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
                </div>
              </ul>

              <button type="button" class="w-100 btn btn-lg btn-primary"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal"> <i class="fa-solid fa-award"></i> Terceiro Lugar</h4>
            </div>
            <div class="card-body">
              <div class="p-4 text-center w-100">
                <img src="https://i.picsum.photos/id/629/200/300.jpg?hmac=YTSnJIQbXgJTOWUeXAqVeQYHZDodXXFFJxd5RTKs7yU" class="rounded-circle" style="width: 90px;" alt="Bootstrap 5 Extended Avatar">
              </div>
              <h1 class="card-title pricing-card-title">Taciara Motos</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Números de corridas: 50</li>
                <li>Pontualidade: Bom</li>
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
                </div>
              </ul>

              <button type="button" class="w-100 btn btn-lg btn-primary"> <i class="bi bi-whatsapp"></i> Chamar</button>
            </div>
          </div>
        </div>

      </div>
    </section>

        <!-- FAQ -->
        <section id="faq" class="py-5 mt-5">
            <div class="row pt-5 mt-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold">Perguntas Frequentes</h2>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>

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
                        <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis inventore impedit ad sint! Impedit, numquam laboriosam tempore deserunt blanditiis vero nihil rem perspiciatis quibusdam voluptatibus vitae cum quo fugiat veritatis?</p>
                        <p class="mt-3"><i class="fa-solid fa-phone"></i> (00) 00000-0000</p>
                        <p class="mt-3"><i class="fa-solid fa-envelope"></i> example@email.com</p>  
                        <button class="btn btn-outline-success" type="button"><i class="fa-brands fa-whatsapp"></i> Chamar WhatsApp</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <p>Rua do exemplo, 123, Centro - Cidade</p>
                        <iframe class="m-0 m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31760606.16501001!2d-69.73283242039209!3d-13.656114229270806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1655949962977!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-3 mt-5">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="#servicos" class="nav-link px-2 text-muted">Serviços</a></li>
              <li class="nav-item"><a href="#precos" class="nav-link px-2 text-muted">Preços</a></li>
              <li class="nav-item"><a href="#faq" class="nav-link px-2 text-muted">FAQ</a></li>
              <li class="nav-item"><a href="#contatos" class="nav-link px-2 text-muted">Contatos</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 <i class="fa-solid fa-motorcycle"></i> Moto Rápido — App de Viagens, Inc</p>
        </footer>


    </div>    




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="/assets/js/switch.js"></script>
</body>
</html>