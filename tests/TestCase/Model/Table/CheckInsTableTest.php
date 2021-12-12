<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckInsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckInsTable Test Case
 */
class CheckInsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckInsTable
     */
    protected $CheckIns;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CheckIns',
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
        $config = $this->getTableLocator()->exists('CheckIns') ? [] : ['className' => CheckInsTable::class];
        $this->CheckIns = $this->getTableLocator()->get('CheckIns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CheckIns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CheckInsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CheckInsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
