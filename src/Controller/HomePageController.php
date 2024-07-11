<?php

namespace Drupal\home_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomePageController extends ControllerBase {
  public function content() {
    return [
      '#theme' => 'home_page_template',
    ];
  }

  public function getData() {
    $data = [1,2,3, "j"];
    return new JsonResponse($data);
  }

};
