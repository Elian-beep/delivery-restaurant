<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap - JavaScript Bundle com Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap - CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap - Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS MAIN -->
  <link rel="stylesheet" href="../Styles/main.css">
  <!-- CSS DO FOOTER -->
  <link rel="stylesheet" href="../Styles/footer.css">


  <title>Churrascaria Delivery</title>
</head>

<body>

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
                <a href="" class="btn">Github</a><i class="bi bi-github"></i>
                <a href="" class="btn">Instagram</a><i class="bi bi-instagram"></i>
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