<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailVariablesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailVariablesTable Test Case
 */
class EmailVariablesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailVariablesTable
     */
    protected $EmailVariables;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EmailVariables',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmailVariables') ? [] : ['className' => EmailVariablesTable::class];
        $this->EmailVariables = $this->getTableLocator()->get('EmailVariables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmailVariables);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmailVariablesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EmailVariablesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
