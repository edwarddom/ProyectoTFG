<?php

namespace Drupal\Tests\commerce_shipping\Kernel\Formatter;

use Drupal\commerce_shipping\Entity\Shipment;
use Drupal\commerce_shipping\Entity\ShippingMethod;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Tests\commerce_shipping\Kernel\ShippingKernelTestBase;

/**
 * Tests the tracking link formatter.
 *
 * @group commerce_shipping
 */
class TrackingLinkFormatterTest extends ShippingKernelTestBase {

  /**
   * @var \Drupal\Core\Entity\Display\EntityViewDisplayInterface
   */
  protected $display;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->display = commerce_get_entity_display('commerce_shipment', 'default', 'view');
    $this->display->setComponent('tracking_code', [
      'type' => 'commerce_tracking_link',
      'settings' => [],
    ]);
    $this->display->save();
  }

  /**
   * Tests the rendered output.
   */
  public function testRender() {
    $shipment = Shipment::create([
      'type' => 'default',
      'state' => 'ready',
      'title' => 'Shipment',
    ]);
    /** @var \Drupal\commerce_shipping\Entity\ShippingMethodInterface $shipping_method */
    $shipping_method = ShippingMethod::create([
      'name' => $this->randomString(),
      'status' => 1,
      'plugin' => [
        'target_plugin_id' => 'test',
        'target_plugin_configuration' => [],
      ],
    ]);
    $shipping_method->save();
    $shipment->setShippingMethod($shipping_method);

    // No tracking code, no link.
    $this->renderEntityFields($shipment, $this->display);
    $this->assertNoRaw('https://www.drupal.org/');

    $tracking_code = 'TEST';
    $shipment->setTrackingCode($tracking_code);
    $this->renderEntityFields($shipment, $this->display);
    $this->assertRaw('https://www.drupal.org/' . $tracking_code);
  }

  /**
   * Renders fields of a given entity with a given display.
   *
   * @param \Drupal\Core\Entity\FieldableEntityInterface $entity
   *   The entity object with attached fields to render.
   * @param \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display
   *   The display to render the fields in.
   *
   * @return string
   *   The rendered entity fields.
   */
  protected function renderEntityFields(FieldableEntityInterface $entity, EntityViewDisplayInterface $display) {
    $content = $display->build($entity);
    $content = $this->render($content);
    return $content;
  }

}
