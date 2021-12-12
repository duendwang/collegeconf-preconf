<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LodgingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LodgingsTable Test Case
 */
class LodgingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LodgingsTable
     */
    protected $Lodgings;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Lodgings',
        'app.Conferences',
        'app.Localities',
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
        $config = $this->getTableLocator()->exists('Lodgings') ? [] : ['className' => LodgingsTable::class];
        $this->Lodgings = $this->getTableLocator()->get('Lodgings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Lodgings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LodgingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LodgingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
