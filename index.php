<?php
require __DIR__ . "/vendor/autoload.php";

require_once("./player.php");

$app = new Leaf\App;

$app->get("/", function() use($app) {
  $app->response()->markup("200 OK", 200);
});

$app->get("/version", function() use($app) {
  $player = new Player();
  $app->response()->markup($player->getVersion(), 200);
});

$app->post("/bet", function () use($app) {
  $gamestate = $body = $app->request()->body();
  $player = new Player();
  $app->response()->markup($player->bet($gamestate), 200);
});

$app->run();