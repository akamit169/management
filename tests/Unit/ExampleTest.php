<?php

use App\Basket;
 
class BasicTest extends TestCase
{
public function testHasItemInBasket()
{
$basket = new Basket(['item_one', 'item_two', 'item_three']);
 
$this->assertTrue($basket->has('item_one'));
 
$this->assertFalse($basket->has('item_four'));
}
 
public function testTakeOneFromTheBasket()
{
$basket = new Basket(['item_three']);
 
$this->assertEquals('item_three'', $basket->takeOne());
 
// Null, now the basket is empty
$this->assertNull($basket->takeOne());
}
}