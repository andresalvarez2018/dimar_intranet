<?php

namespace Drupal\Tests\printable\Unit;

use Drupal\printable\PrintableEntityManager;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the printable entity manager plugin.
 *
 * @group Printable
 */
class PrintableEntityManagerTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Printable Entity Manager',
      'descriptions' => 'Tests the printable entity manager class.',
      'group' => 'Printable',
    ];
  }

  /**
   * Tests getting the printable entities.
   *
   * @covers \Drupal\printable\PrintableEntityManager::GetPrintableEntities
   */
  public function testGetPrintableEntities() {
    // Construct a printable entity manager and it's dependencies.
    $entity_definition = $this->createMock('Drupal\Core\Entity\EntityType');
    $entity_definition->expects($this->any())
      ->method('hasHandlerClass')
      ->will($this->returnValue(TRUE));
    $entity_manager = $this->createMock('Drupal\Core\Entity\EntityTypeManager');
    $entity_manager->expects($this->once())
      ->method('getDefinitions')
      ->will($this->returnValue([
        'node' => $entity_definition,
        'comment' => $entity_definition,
      ])
      );
    $config = $this->getConfigFactoryStub([
      'printable.settings' => [
        'printable_entities' => ['node', 'comment', 'bar'],
      ],
    ]);
    $printable_entity_manager = new PrintableEntityManager($entity_manager, $config);

    // Verify getting the printable entities.
    $expected_entity_definitions = [
      'node' => $entity_definition,
      'comment' => $entity_definition,
    ];
    $actual = $printable_entity_manager->getPrintableEntities();

    $this->assertEquals($expected_entity_definitions, $actual);
  }

}
