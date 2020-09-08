

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo '/assets/css/cover.css' ?>" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand yellow">FMK v<?= isset($_ENV['APP_VERSION']) ? $_ENV['APP_VERSION'] : '1.0' ?>  <?= isset($_ENV['APP_ENV']) && $_ENV['APP_ENV']== 'dev' ? 'Develop Profile' : ''  ?> </h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="/hello">Hello</a>
            <a class="nav-link" href="/bye">Bye</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Leap Template Page</h1>
        <p class="lead">FMK is a simple framework for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
          <H2> <?= $request->get('is_year') ?> </H2>
        </p>
      </main>


      <p class="test">Lorem ipsum dolor sit amet iquet vestibulum. Maecenas tincidunt metus ut efficitur dignissim. Quisque accumsan in lacus vitae venenatis. Suspendisse potenti. Aenean quis bibendum augue, in gravida augue. Donec facilisis convallis ligula. In in facilisis nisl, eu condimentum dolor. Vestibulum quis risus id sem mattis dictum.</p>
        <hr/>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo '/assets/js/js.js' ?>"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>