<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceDeadlineExceptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceDeadlineExceptionsTable Test Case
 */
class ConferenceDeadlineExceptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceDeadlineExceptionsTable
     */
    protected $ConferenceDeadlineExceptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceDeadlineExceptions',
        'app.Conferences',
        'app.ConferenceDeadlines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceDeadlineExceptions') ? [] : ['className' => ConferenceDeadlineExceptionsTable::class];
        $this->ConferenceDeadlineExceptions = $this->getTableLocator()->get('ConferenceDeadlineExceptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceDeadlineExceptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceDeadlineExceptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceDeadlineExceptionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
