<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceDeadlineAccountTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceDeadlineAccountTypesTable Test Case
 */
class ConferenceDeadlineAccountTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceDeadlineAccountTypesTable
     */
    protected $ConferenceDeadlineAccountTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceDeadlineAccountTypes',
        'app.ConferenceDeadlines',
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
        $config = $this->getTableLocator()->exists('ConferenceDeadlineAccountTypes') ? [] : ['className' => ConferenceDeadlineAccountTypesTable::class];
        $this->ConferenceDeadlineAccountTypes = $this->getTableLocator()->get('ConferenceDeadlineAccountTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceDeadlineAccountTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceDeadlineAccountTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceDeadlineAccountTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
