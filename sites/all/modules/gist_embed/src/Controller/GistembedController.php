<?php
/**
@file
Contains gist_embed\controller\GistEmbedController.
*/

namespace Drupal\gist_embed\Controller;

use Drupal\Core\Controller\ControllerBase;

class GistembedController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}