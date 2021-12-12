<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrationTeamConferenceLocalitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrationTeamConferenceLocalitiesTable Test Case
 */
class RegistrationTeamConferenceLocalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrationTeamConferenceLocalitiesTable
     */
    protected $RegistrationTeamConferenceLocalities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RegistrationTeamConferenceLocalities',
        'app.RegistrationTeams',
        'app.ConferenceLocalities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RegistrationTeamConferenceLocalities') ? [] : ['className' => RegistrationTeamConferenceLocalitiesTable::class];
        $this->RegistrationTeamConferenceLocalities = $this->getTableLocator()->get('RegistrationTeamConferenceLocalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RegistrationTeamConferenceLocalities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RegistrationTeamConferenceLocalitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RegistrationTeamConferenceLocalitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
