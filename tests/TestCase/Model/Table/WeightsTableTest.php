<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeightsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeightsTable Test Case
 */
class WeightsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeightsTable
     */
    public $Weights;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weights',
        'app.users',
        'app.children',
        'app.heights',
        'app.mama_gotras',
        'app.communities',
        'app.gotras',
        'app.gotras_users',
        'app.communities_users',
        'app.incomes',
        'app.cities',
        'app.states',
        'app.countries',
        'app.countries_users',
        'app.states_users',
        'app.cities_users',
        'app.educations',
        'app.educations_users',
        'app.occupations',
        'app.occupations_users',
        'app.professions',
        'app.professions_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Weights') ? [] : ['className' => 'App\Model\Table\WeightsTable'];
        $this->Weights = TableRegistry::get('Weights', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Weights);

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
