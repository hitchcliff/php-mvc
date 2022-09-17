<?php 

namespace app\core;

class SiteController extends Controller{
  public function home() {
    $params = [
      "name" => "Kevin"
    ];

    return $this->render('home', $params);
  }

  public function contact() {
    return $this->render('contact', []);
  }

  public function handleContact() {
    return "Handle submitted data";
  }
}