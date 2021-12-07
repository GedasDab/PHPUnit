<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{

    protected $queue;
    protected function setUp(): void{
      $this->queue = new Queue;
    }

    public function testNewQueueIsEmpty()
    {  
        $this->assertEquals(0, $this->queue->getCount()); // Check  
    }
    
    /**
     * First method return , this method takes. because depends
     * @depends testNewQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {        
        $queue->push('green'); //Add
        
        $this->assertEquals(1, $queue->getCount()); //Check       
        
        return $queue;
    }
    
    /**
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {

        $item = $queue->pop(); //Remove
        
        $this->assertEquals(0, $queue->getCount()); //Check
        
        $this->assertEquals('green', $item);// Check                                        
    }    
}