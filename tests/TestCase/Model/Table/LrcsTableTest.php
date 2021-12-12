<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LrcsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LrcsTable Test Case
 */
class LrcsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LrcsTable
     */
    protected $Lrcs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Lrcs',
        'app.Localities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lrcs') ? [] : ['className' => LrcsTable::class];
        $this->Lrcs = $this->getTableLocator()->get('Lrcs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Lrcs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LrcsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LrcsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
