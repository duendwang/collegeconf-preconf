<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAccountTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAccountTypesTable Test Case
 */
class UserAccountTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAccountTypesTable
     */
    protected $UserAccountTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserAccountTypes',
        'app.Users',
        'app.AccountTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserAccountTypes') ? [] : ['className' => UserAccountTypesTable::class];
        $this->UserAccountTypes = $this->getTableLocator()->get('UserAccountTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserAccountTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserAccountTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UserAccountTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
