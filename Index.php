<?php

var_dump($_GET);

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Navbar</span>
      <a href="?Pagina=Filme">Link</a>
    </div>
  </nav>
  <main>
  <?php
    if(!empty($_GET)){
      if($_GET['Pagina'] == "Filme"){
        include_once("C:/laragon/www/view/Filme/Index.php");
      }
    }
    
  ?>
  </main>

  <footer class="container-flud bg-secondary mt-5 mb-5">
    <p class="text-center text-light"><b>Rodapé da página</b></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>