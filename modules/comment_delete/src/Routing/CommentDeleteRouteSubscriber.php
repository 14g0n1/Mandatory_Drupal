<?php

/**
 * @file
 * Contains \Drupal\comment_delete\Routing\CommentDeleteRouteSubscriber.
 */

namespace Drupal\comment_delete\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class CommentDeleteRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {

    // Set custom access check on comment delete form route.
    if ($route = $collection->get('entity.comment.delete_form')) {
      $route->setRequirements(array(
        '_comment_delete_access_check' => 'TRUE',
      ));
    }
  }

}
