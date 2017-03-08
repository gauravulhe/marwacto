<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MamaGotrasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MamaGotrasTable Test Case
 */
class MamaGotrasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MamaGotrasTable
     */
    public $MamaGotras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mama_gotras',
        'app.communities',
        'app.gotras',
        'app.users',
        'app.gotras_users',
        'app.communities_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MamaGotras') ? [] : ['className' => 'App\Model\Table\MamaGotrasTable'];
        $this->MamaGotras = TableRegistry::get('MamaGotras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MamaGotras);

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
