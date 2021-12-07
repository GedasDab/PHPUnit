<?php
  use PHPUnit\Framework\TestCase;

  class ExampleTest extends TestCase {
    public function testAddingTwoPlusTwoResultsItsFour(){
      $this->assertEquals(4,2+2);
    }
  }