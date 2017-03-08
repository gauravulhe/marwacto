<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitorsTable Test Case
 */
class VisitorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitorsTable
     */
    public $Visitors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.visitors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Visitors') ? [] : ['className' => 'App\Model\Table\VisitorsTable'];
        $this->Visitors = TableRegistry::get('Visitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Visitors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
