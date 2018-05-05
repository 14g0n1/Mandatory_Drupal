<?php

/**
 * @file
 * Contains \Drupal\comment_delete\Access\CommentDeleteAccessCheck.
 */

namespace Drupal\comment_delete\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Checks access for displaying configuration translation page.
 */
class CommentDeleteAccessCheck implements AccessInterface {

  /**
   * Checks user access when deleting comments.
   */
  public function access(AccountInterface $account) {
    $args = explode('/', trim(\Drupal::service('path.current')->getPath(), '/'));
    $comment = entity_load('comment', $args[1]);

    if (comment_delete_check_access($account, $comment)) {
      return AccessResult::allowed();
    }
    else {
      return AccessResult::forbidden();
    }
  }

}
