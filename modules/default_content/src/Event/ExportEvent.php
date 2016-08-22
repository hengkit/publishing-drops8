<?php

namespace Drupal\default_content\Event;

use Drupal\Core\Entity\ContentEntityInterface;
use Symfony\Component\EventDispatcher\Event;

class ExportEvent extends Event {

  /**
   * The entity we're exporting.
   *
   * @var \Drupal\Core\Entity\ContentEntityInterface
   */
  protected $entity;

  /**
   * Constructs a new export event.
   *
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   *   The exported content entity.
   */
  public function __construct(ContentEntityInterface $entity) {
    $this->entity = $entity;
  }

  /**
   * Get the entity we've exported.
   *
   * @return \Drupal\Core\Entity\ContentEntityInterface[]
   */
  public function getExportedEntity() {
    return $this->entity;
  }

}