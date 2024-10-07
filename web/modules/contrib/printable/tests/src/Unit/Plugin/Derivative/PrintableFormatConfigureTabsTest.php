<?php

namespace Drupal\Tests\printable\Unit\Plugin\Derivative;

use Drupal\printable\Plugin\Derivative\PrintableFormatConfigureTabs;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the printable configuration tabs plugin derivative.
 *
 * @group Printable
 */
class PrintableFormatConfigureTabsTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Printable Tabs Plugin Derivative',
      'descriptions' => 'Tests the printable tabs plugin derivative class.',
      'group' => 'Printable',
    ];
  }

  /**
   * Tests getting the plugin label from the plugin.
   *
   * @covers \Drupal\printable\Plugin\Derivative\PrintableFormatConfigureTabs::GetDerivativeDefinitions
   */
  public function testGetDerivativeDefinitions() {
    $printable_format_manager = $this->createMock('Drupal\printable\PrintableFormatPluginManager');
    $printable_format_manager->expects($this->once())
      ->method('getDefinitions')
      ->will($this->returnValue([
        'foo' => [
          'title' => 'Foo',
        ],
        'bar' => [
          'title' => 'Bar',
        ],
      ]));
    $derivative = new PrintableFormatConfigureTabs($printable_format_manager);

    $expected = [
      'foo' => [
        'title' => 'Foo',
        'route_name' => 'printable.format_configure_foo',
      ],
      'bar' => [
        'title' => 'Bar',
        'route_name' => 'printable.format_configure_bar',
      ],
    ];
    $this->assertEquals($expected, $derivative->getDerivativeDefinitions([]));
  }

}
