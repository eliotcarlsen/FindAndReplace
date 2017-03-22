<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/WordReplace.php';

  session_start();
  if (empty($_SESSION[''])) {
    $_SESSION[''] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use($app){
      return $app['twig']->render('index.html.twig');
  });

  $app->post("/result", function() use($app) {
      $new_sentence = new WordReplace;
      $new_sentence->replace_oneWord($_POST['sentence'], $_POST['wordToReplace'], $_POST['replacementWord']);
      return $app['twig']->render('index.html.twig', array('result' => $new_sentence->replace_oneWord($_POST['sentence'], $_POST['wordToReplace'], $_POST['replacementWord'])));
  });

  return $app;
?>
