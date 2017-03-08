<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InterestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InterestsTable Test Case
 */
class InterestsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InterestsTable
     */
    public $Interests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.interests',
        'app.users',
        'app.children',
        'app.heights',
        'app.weights',
        'app.communities',
        'app.gotras',
        'app.gotras_users',
        'app.mama_gotras',
        'app.communities_users',
        'app.educations',
        'app.educations_users',
        'app.professions',
        'app.professions_users',
        'app.incomes',
        'app.occupations',
        'app.occupations_users',
        'app.likes',
        'app.cities',
        'app.states',
        'app.countries',
        'app.countries_users',
        'app.states_users',
        'app.cities_users',
        'app.ints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Interests') ? [] : ['className' => 'App\Model\Table\InterestsTable'];
        $this->Interests = TableRegistry::get('Interests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Interests);

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
