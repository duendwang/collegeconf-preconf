<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenceDeadlinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenceDeadlinesTable Test Case
 */
class ConferenceDeadlinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenceDeadlinesTable
     */
    protected $ConferenceDeadlines;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceDeadlines',
        'app.ConferenceDeadlineAccountTypes',
        'app.ConferenceDeadlineExceptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ConferenceDeadlines') ? [] : ['className' => ConferenceDeadlinesTable::class];
        $this->ConferenceDeadlines = $this->getTableLocator()->get('ConferenceDeadlines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ConferenceDeadlines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenceDeadlinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
