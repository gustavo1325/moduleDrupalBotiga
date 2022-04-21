<?php

namespace Drupal\botiga\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines botigaController class.
 */
class botigaController extends ControllerBase {


  public function template() {
    return [
      '#theme' => 'botiga',
    ];
  }

}
