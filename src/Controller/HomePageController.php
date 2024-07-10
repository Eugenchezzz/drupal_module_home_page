<?php

namespace Drupal\home_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class HomePageController extends ControllerBase {
  public function content() {
    return [
      '#theme' => 'home_page_template',
    ];
  }
}
