<?php

require("vendor/autoload.php");

require_once("./player.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get("/", function() {
  return new Response("200 OK", 200);
});

$app->get("/version", function() {
  $player = new Player();
  return new Response($player->getVersion(), 200);
});

$app->post("/bet", function (Request $request) {
  $gamestate = json_decode($request->getContent(), true);
  $player = new Player();
  return new Response($player->bet($gamestate), 200);
});

$app->run();
