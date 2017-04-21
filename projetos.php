<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php require_once("php/head.php"); ?>
</head>
  <body>
    <?php require_once("php/topo.php"); ?>

    <div class="parallax-container">
      <div class="parallax"><img src="img/parallax1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header">Projetos</h2>
        <p class="grey-text text-darken-3 lighten-3">Em breve você verá meus trabalhos por aqui.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/parallax2.jpg"></div>
    </div>

    <footer class="page-footer green">
      <?php require_once("php/footer.php"); ?>
    </footer>
    <?php require_once("php/scripts.php"); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>
