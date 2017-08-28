<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $titulo; ?></title>

  <!-- CSS  -->
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>

  <!--  Scripts-->
  <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
  <div style="widht: auto; height: 50px;">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="form.php">Formulário <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>
  </div>

<div style="margin: 20px;">
  <?php echo $conteudo; ?>
</div>

  <div style="height:50px; background-color:#343A40; position:absolute; bottom:0; width:100%; display: table;">
    <p style="display: table-cell; text-align: center; vertical-align: middle; color:#fff;">© Copyryght 2017</p>
  </div>
</body>
</html>
