<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php require_once("php/head.php"); ?>
  </head>
  <body>
    <?php require_once("php/topo.php"); ?>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center green-text text-darken-3">Vamos trabalhar juntos?</h1>
        <div class="row center">
          <h5 class="header col s12 light">Desenvolvimento de sistemas com foco em acessibilidade!</h5>
        </div>
        <div class="row center">
          <a href="projetos" class="btn-large waves-effect waves-light green">Projetos</a>
          <a href="#contato" id="download-button" class="btn-large waves-effect waves-light green modal-trigger">Contato</a>
        </div>
      </div>
    </div>

    <div id="contato" class="modal">
      <div class="modal-content">
        <h4 class="header green-text text-darken-3">Contato</h4><br>
        <h4 class="green-text text-darken-3 valign-wrapper"><i class="medium material-icons">email</i>&nbsp;&nbsp;<a href="mailto:edantasn@gmail.com">edantasn@gmail.com</a></h4>
        <h4 class="green-text text-darken-3 valign-wrapper"><i class="medium material-icons">phone</i>&nbsp;&nbsp;<a href="tel:73991428924">(73) 9.9142-8924</a></h4>
        <h4 class="green-text text-darken-3 valign-wrapper"><i class="medium material-icons">phone</i>&nbsp;&nbsp;<a href="tel:73988018557">(73) 9.8801-8557</a></h4>
      </div>
      <div class="modal-footer">
        <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
      </div>
    </div>

    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center red-text text-darken-3"><i class="material-icons">work</i></h2>
              <h5 class="center">Profissionalismo</h5>

              <p class="light">
                  Seguir os padrões universais do desenvolvimento de aplicações para WEB, definidos pelo W3C, e utilizar ferramentas
                  que promovem a democatização da informação. Estes são os parâmetros garantidores da experiência de uso com acessibilidade,
                  usabilidade e navegabilidade do seu cliente com seu sistema!</p>
            </div>
          </div>

          <div class="col s12 m6">
            <div class="icon-block">
              <h2 class="center red-text text-darken-3"><i class="material-icons">perm_device_information</i></h2>
              <h5 class="center">Homogeneidade</h5>

              <p class="light">
                  Os sistemas são feitos de modo semântico para garantir o acesso nos mais diversos dispositivos e respectivas telas,
                  e também aos possíveis utilizadores, sejam eles humanos ou não (como ferramentas utilizadas por deficientes para
                  navegarem na internet, ou motores de busca). É garantido, portanto, um projeto acessível, robusto inovador.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <footer class="page-footer green">
      <?php require_once("php/footer.php"); ?>
    </footer>

    <?php require_once("php/scripts.php"); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });
    </script>
  </body>
</html>
