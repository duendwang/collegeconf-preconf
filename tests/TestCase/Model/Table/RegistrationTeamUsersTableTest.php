<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrationTeamUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrationTeamUsersTable Test Case
 */
class RegistrationTeamUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrationTeamUsersTable
     */
    protected $RegistrationTeamUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RegistrationTeamUsers',
        'app.Users',
        'app.RegistrationTeams',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RegistrationTeamUsers') ? [] : ['className' => RegistrationTeamUsersTable::class];
        $this->RegistrationTeamUsers = $this->getTableLocator()->get('RegistrationTeamUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RegistrationTeamUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RegistrationTeamUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RegistrationTeamUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
