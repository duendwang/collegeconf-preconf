<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CancelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CancelsTable Test Case
 */
class CancelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CancelsTable
     */
    protected $Cancels;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cancels',
        'app.ConferenceAttendees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cancels') ? [] : ['className' => CancelsTable::class];
        $this->Cancels = $this->getTableLocator()->get('Cancels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cancels);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CancelsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CancelsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
