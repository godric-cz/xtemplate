<?php

class XTemplateTest extends PHPUnit_Framework_TestCase {

  public function testOne() {
    $t = new XTemplate(__DIR__ . '/resources/test.xtpl');
  }

}
