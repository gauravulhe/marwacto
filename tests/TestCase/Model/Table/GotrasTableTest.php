<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GotrasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GotrasTable Test Case
 */
class GotrasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GotrasTable
     */
    public $Gotras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gotras',
        'app.communities',
        'app.mama_gotras',
        'app.users',
        'app.communities_users',
        'app.gotras_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gotras') ? [] : ['className' => 'App\Model\Table\GotrasTable'];
        $this->Gotras = TableRegistry::get('Gotras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gotras);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
