<?php 

namespace app\core;

class SiteController{
  public function home() {
    return Application::$app->router->renderView('home');
  }

  public function contact() {
    return Application::$app->router->renderView('contact');
  }
  public function handleContact() {
    return "Handle submitted data";
  }
}