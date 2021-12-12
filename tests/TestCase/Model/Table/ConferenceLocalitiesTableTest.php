<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceLocalitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceLocalitiesTable Test Case
 */
class ConferenceLocalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceLocalitiesTable
     */
    protected $ConferenceLocalities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceLocalities',
        'app.Conferences',
        'app.Localities',
        'app.Users',
        'app.ConferenceLocalityRegistrationSteps',
        'app.RegistrationTeamConferenceLocalities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceLocalities') ? [] : ['className' => ConferenceLocalitiesTable::class];
        $this->ConferenceLocalities = $this->getTableLocator()->get('ConferenceLocalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceLocalities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocalitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceLocalitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
