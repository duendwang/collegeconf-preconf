<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailExceptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailExceptionsTable Test Case
 */
class EmailExceptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailExceptionsTable
     */
    protected $EmailExceptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EmailExceptions',
        'app.Emails',
        'app.Conferences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmailExceptions') ? [] : ['className' => EmailExceptionsTable::class];
        $this->EmailExceptions = $this->getTableLocator()->get('EmailExceptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmailExceptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmailExceptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EmailExceptionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
