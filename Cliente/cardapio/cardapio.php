<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="../../assets/logomarca-restaurante2.svg" type="image/x-icon">

  <!-- Bootstrap - JavaScript Bundle com Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap - CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap - Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS MAIN -->
  <link rel="stylesheet" href="../Styles/main.css">
  <!-- CSS DO NAVBAR -->
  <link rel="stylesheet" href="navbar.css">
  <!-- CSS DO SLIDER -->
  <link rel="stylesheet" href="slider.css">
  <!-- CSS DO CABEÇALHO -->
  <link rel="stylesheet" href="cabecalho.css">
  <!-- CSS DA AREA SCROLL DO CARDAPIO -->
  <link rel="stylesheet" href="area-cardapio-scroll.css">
  <!-- CSS DO CARDAPIO -->
  <link rel="stylesheet" href="cardapio.css">
  <!-- CSS DO FOOTER -->
  <link rel="stylesheet" href="../Styles/footer.css">


  <title>Churrascaria Delivery</title>
</head>

<body>


  <!-- INICIO: NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container py-3">

      <a href="#" class="navbar-brand">
        <!-- <img src="../../assets/logomarca-restaurante2.svg" alt="churras" width="60" height="40" class="d-inline-block align-text-top logo-restaurante"> -->
        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="40" x="0px" y="0px" class="logo-restaurante" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
          <g>
            <path d="M14,4c-0.6,0-1,0.4-1,1v22.1c0,1.6,1.3,2.9,2.9,2.9c0.8,0,1.6-0.4,2.2-1c0.5-0.6,0.8-1.4,0.7-2.2l-0.5-5c-0.1-0.8,0.4-1.6,1.1-1.9c0.4-0.2,0.6-0.5,0.6-0.9v-9C20,6.7,17.3,4,14,4z" />
            <path d="M27.7,17.6c-0.1-1,0.2-2,0.9-2.8c0.9-1,1.4-2.5,1.4-4.3C30,6.8,28.2,4,26,4s-4,2.8-4,6.5c0,1.9,0.5,3.4,1.4,4.3c0.7,0.8,1,1.8,0.9,2.8l-1,9.3c-0.1,0.8,0.1,1.6,0.6,2.2c0.5,0.6,1.3,0.9,2.1,0.9s1.5-0.3,2.1-0.9c0.5-0.6,0.8-1.4,0.6-2.1L27.7,17.6z" />
          </g>
          <path d="M10,10.5V5c0-0.6-0.4-1-1-1S8,4.4,8,5v5.5c0,0.2,0,0.4,0,0.5H7V5c0-0.6-0.4-1-1-1S5,4.4,5,5v6H4c0-0.2,0-0.4,0-0.5V5c0-0.6-0.4-1-1-1S2,4.4,2,5v5.5c0,1.9,0.5,3.4,1.4,4.3c0.7,0.8,1,1.8,0.9,2.8l-1,9.3c-0.1,0.8,0.1,1.6,0.6,2.2C4.5,29.7,5.2,30,6,30s1.5-0.3,2.1-0.9c0.5-0.6,0.8-1.4,0.6-2.1l-1-9.3c-0.1-1,0.2-2,0.9-2.8C9.5,13.8,10,12.3,10,10.5z" />
        </svg>
        <span>Churrascaria Delivery</span>
      </a>

      <!-- Formação do botão sanduiche -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbar-items">
        <!-- Item que será afetado pelo botão sanduiche -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">Cardápio</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Minha conta</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Pedir pelo Whatsapp</a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">Sair</a>
          </li>
        </ul>
      </div>

    </div>
  </nav> <!-- FIM: NAVBAR -->


  <!-- INICIO: SLIDER -->
  <div class="carrousel-slider">
    <div class="container" id="slider-container">
      <div class="carousel slide carousel-fade" id="slider" data-bs-ride="carousel">

        <!-- Indicadores inferiores do Carousel -->
        <div class="carousel-indicators">
          <button type="button" class="active" data-bs-target="#slider" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Imagens e suas skills do Carousel -->
        <div class="carousel-inner" id="slider-inner">

          <div class="carousel-item active ">
            <img src="../../assets/churras-1.jpg" alt="churras 1" class="d-block w-100">
            <div class="carousel-caption">
              <p>Não me leve a sério, me leve para almoçar na Churrascaria Kihan!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../assets/churras-2.jpg" alt="churras 2" class="d-block w-100">
            <div class="carousel-caption">
              <p>Aqui podemos até passar do ponto, mas a carne nunca!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../assets/churras-3.jpg" alt="churras 3" class="d-block w-100">
            <div class="carousel-caption">
              <p>Não deixe para amanhã o que você pode comer hoje!</p>
            </div>
          </div>

        </div>
        <!-- Botões bilaterais de transição do Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
          <i class="bi bi-chevron-compact-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
          <i class="bi bi-chevron-compact-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div> <!-- FIM: SLIDER -->


  <!-- INICIO: CABEÇALHO DO CARDÁPIO -->
  <div class="container" id="cab-cardapio">
    <center>
      <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4">
          <!-- titulo de cardápio -->
          <h1 class="title">CARDÁPIO</h1>
        </div>

        <div class="col-md-4 ms-auto">
          <!-- botão da lista de pedidos -->
          <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Meus pedidos
          </button>


        </div>

      </div>
    </center>
  </div><!-- FIM: CABEÇALHO DO CARDÁPIO -->


  <!-- INICIO: CARDAPIO -->
  <div class="container">

    <div class="fundo-cardapio-scroll color-A01">
      <div class="cardapio-scroll">

        <!-- INICIO: items do cardapio (01) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato1.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 1" loading="lazy">
                </div>

                <div class="cardapio-info">
                  <h5>Filé Mignon</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 65,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (02) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato2.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 2">
                </div>

                <div class="cardapio-info">
                  <h5>Guisado de Porco</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 35,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (03) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato3.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 3">
                </div>

                <div class="cardapio-info">
                  <h5>Misto Especial</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 40,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (04) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato4.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 4">
                </div>

                <div class="cardapio-info">
                  <h5>Misto</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 12,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (05) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato5.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 5">
                </div>

                <div class="cardapio-info">
                  <h5>Petiscos</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 30,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (06) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato6.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 6">
                </div>

                <div class="cardapio-info">
                  <h5>Alcatra</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 85,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (07) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato7.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 7">
                </div>

                <div class="cardapio-info">
                  <h5>Contra Filé</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 78,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (08) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato8.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 8">
                </div>

                <div class="cardapio-info">
                  <h5>Abrasileirado</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 50,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->

        <!-- INICIO: items do cardapio (09) -->
        <div id="cardapio-items">
          <center>
            <form action="#">
              <div class="row">

                <div class="cardapio-info">
                  <img src="../../assets/prato9.jpg" class="img-thumbnail img-fluid" alt="Prato tipico 9">
                </div>

                <div class="cardapio-info">
                  <h5>Canoada</h5>
                  <div class="dropdown acompanhamento-mobile">
                    <button class="dropdown-toggle btn btn-outline-secondary btn-sm" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Complemento
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                      </p>
                    </div>
                  </div>
                  <p class="acompanhamento-desktop">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, enim non totam ipsum incidunt eveniet!
                  </p>
                </div>

                <div class="cardapio-info">
                  <p>R$: 20,00</p>
                  <button class="btn btn-success btn-sm">+</button>
                </div>

              </div>
            </form>
          </center>
          <hr>

        </div> <!-- FIM: items do cardapio -->


      </div>
    </div>

  </div><!-- FIM: CARDAPIO -->


  <!-- INICIO: FOOTER -->
  <div class="container-fluid color-A01" id="footer">

    <!-- INICIO: SESSÕES -->
    <center>
      <div class="sessoes-footer">

        <!-- INICIO: sessao do titulio -->
        <div class="sessao-part sessao-1">
          <p class="title-session">
            Churrascaria
            Delivery
          </p>
          <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="40" x="0px" y="0px" class="sessao-1" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
            <g>
              <path d="M14,4c-0.6,0-1,0.4-1,1v22.1c0,1.6,1.3,2.9,2.9,2.9c0.8,0,1.6-0.4,2.2-1c0.5-0.6,0.8-1.4,0.7-2.2l-0.5-5c-0.1-0.8,0.4-1.6,1.1-1.9c0.4-0.2,0.6-0.5,0.6-0.9v-9C20,6.7,17.3,4,14,4z" />
              <path d="M27.7,17.6c-0.1-1,0.2-2,0.9-2.8c0.9-1,1.4-2.5,1.4-4.3C30,6.8,28.2,4,26,4s-4,2.8-4,6.5c0,1.9,0.5,3.4,1.4,4.3c0.7,0.8,1,1.8,0.9,2.8l-1,9.3c-0.1,0.8,0.1,1.6,0.6,2.2c0.5,0.6,1.3,0.9,2.1,0.9s1.5-0.3,2.1-0.9c0.5-0.6,0.8-1.4,0.6-2.1L27.7,17.6z" />
            </g>
            <path d="M10,10.5V5c0-0.6-0.4-1-1-1S8,4.4,8,5v5.5c0,0.2,0,0.4,0,0.5H7V5c0-0.6-0.4-1-1-1S5,4.4,5,5v6H4c0-0.2,0-0.4,0-0.5V5c0-0.6-0.4-1-1-1S2,4.4,2,5v5.5c0,1.9,0.5,3.4,1.4,4.3c0.7,0.8,1,1.8,0.9,2.8l-1,9.3c-0.1,0.8,0.1,1.6,0.6,2.2C4.5,29.7,5.2,30,6,30s1.5-0.3,2.1-0.9c0.5-0.6,0.8-1.4,0.6-2.1l-1-9.3c-0.1-1,0.2-2,0.9-2.8C9.5,13.8,10,12.3,10,10.5z" />
          </svg>
        </div>

        <!-- INICIO: sessao do contato -->
        <div class="sessao-part sessao-2">
          <div class="contatos">
            <p class="title-session">Contato:</p>

            <button type="button" class="btn ">
              <i class="bi bi-telephone-fill"><span>Telefone</span></i>
            </button>

            <button class="btn " type="button">
              <i class="bi bi-whatsapp"><span>Whatsapp</span></i>
            </button>

            <button class="btn " type="button">
              <i class="bi bi-instagram"><span>Instagram</span></i>
            </button>

          </div>
        </div>

        <!-- INICIO: sessao do endereço -->
        <div class="sessao-part">
          <p class="title-session">Endereço:</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </center>
    <hr>

    <!-- INICIO: CRÉDITOS AO DESENVOLVEDOR -->
    <div class="creditos">
      <center>
        <div class="col-12">
          <div class="row justify-content-between">

            <div class="col-12 col-md-3">
              <p>Developer Elian Batista (beep) <img src="../../assets/marca.png" alt=""> </p>
            </div>

            <div class="col-12 col-md-3">
              <p>
                <a href="https://github.com/Elian-beep" class="btn">Github</a><i class="bi bi-github"></i>
                <a href="https://www.instagram.com/e_lianb/" class="btn">Instagram</a><i class="bi bi-instagram"></i>
                <a href="" class="btn">Linkedin</a><i class="bi bi-linkedin"></i>
              </p>
            </div>

          </div>
        </div>
      </center>
    </div>
  </div><!-- FIM: FOOTER -->


  <!-- INICIO: MODAL DA LISTA DE PEDIDOS -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Header Modal -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Meus pedidos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body Modal -->
        <div class="modal-body">

          <div class="pedidos">

            <p>
              Filé Mignon <span>R$ 65,00</span>
            </p>

            <p>
              Filé Mignon <span>R$ 65,00</span>
            </p>

            <p>
              Misto <span>R$ 12,00</span>
            </p>

          </div>

        </div>

        <!-- Footer Modal -->
        <div class="modal-footer">
          <p>
            Total: R$ 142,00
          </p>
          <form action="">
            <button type="button" class="btn btn-primary">Fechar Pedido</button>
          </form>
        </div>

      </div>
    </div>
  </div><!-- FIM: MODAL DA LISTA DE PEDIDOS -->


</body>

</html>