<?php


namespace app\core;
// namespace app\core\Request;

class SiteController extends Controller
{
  public function home()
  {
    $params = [
      "name" => "Kevin"
    ];

    return $this->render('home', $params);
  }

  public function contact()
  {
    return $this->render('contact');
  }

  public function handleContact(Request $request)
  {
    $body = $request->getBody();

    echo '<pre>';
    var_dump($body);
    echo '</pre>';

    return "Handle submitted data";
  }
}