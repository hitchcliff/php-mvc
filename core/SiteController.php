<?php 

namespace app\core;

class SiteController{
  public function home() {
    $params = [
      "name" => "Kevin"
    ];

    return Application::$app->router->renderView('home', $params);
  }

  public function contact() {
    return Application::$app->router->renderView('contact');
  }
  public function handleContact() {
    return "Handle submitted data";
  }
}