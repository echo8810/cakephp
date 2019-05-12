<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ImageuploaderComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ImageuploaderComponent Test Case
 */
class ImageuploaderComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ImageuploaderComponent
     */
    public $Imageuploader;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Imageuploader = new ImageuploaderComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imageuploader);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
