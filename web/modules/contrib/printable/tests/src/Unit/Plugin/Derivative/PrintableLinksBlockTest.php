<?php

namespace Drupal\Tests\printable\Unit\Plugin\Derivative;

use Drupal\printable\Plugin\Derivative\PrintableLinksBlock;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the printable links block plugin derivative..
 *
 * @group Printable
 */
class PrintableLinksBlockTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Printable Block Derivative',
      'descriptions' => 'Tests the printable block plugin derivative class.',
      'group' => 'Printable',
    ];
  }

  /**
   * Tests getting the plugin label from the plugin.
   *
   * @covers \Drupal\printable\Plugin\Derivative\PrintableLinksBlock::GetDerivativeDefinitions
   */
  public function testGetDerivativeDefinitions() {
    $foo_entity_definition = $this->createMock('Drupal\Core\Entity\EntityType');
    $foo_entity_definition->method('getLabel')
      ->will(self::returnValue('Foo'));

    $bar_entity_definition = $this->createMock('Drupal\Core\Entity\EntityType');
    $bar_entity_definition->method('getLabel')
      ->will(self::returnValue('Bar'));

    $printable_format_manager = $this->createMock('Drupal\printable\PrintableEntityManager');
    $printable_format_manager->expects($this->once())
      ->method('getPrintableEntities')
      ->will($this->returnValue([
        'foo' => $foo_entity_definition,
        'bar' => $bar_entity_definition,
      ]));

    $derivative = new PrintableLinksBlock($printable_format_manager);
    $derivative->setStringTranslation($this->getStringTranslationStub());

    $base_plugin_definition = [
      'admin_label' => 'Printable Links Block',
    ];

    $expected = [
      'foo' => [
        'admin_label' => 'Printable Links Block (Foo)',
      ],
      'bar' => [
        'admin_label' => 'Printable Links Block (Bar)',
      ],
    ];

    $this->assertEquals($expected, $derivative->getDerivativeDefinitions($base_plugin_definition));
  }

}
