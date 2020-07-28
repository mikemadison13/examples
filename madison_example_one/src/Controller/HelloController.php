<?php

/**
 * @file
 * Provides basic hello world message functionality.
 */

namespace Drupal\madison_example_one\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldController.
 *
 * @package Drupal\madison_example_one\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Say Hello.
   *
   * @return array
   *   Markup.
   */
  public function hello() {
    return ['#markup' => $this->t("Hello World!")];
  }

}
