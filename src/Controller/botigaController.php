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
      '#tlf1' => $this->t('645223365'),
      '#tlf2' => $this->t('635774410'),

    //'#type' => 'markup',
      //'#markup' => $this->t('Hola caracola'),
    ];
  }

}
