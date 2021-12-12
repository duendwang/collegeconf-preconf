<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocalitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocalitiesTable Test Case
 */
class LocalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LocalitiesTable
     */
    protected $Localities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Localities',
        'app.Attendees',
        'app.ConferenceLocalities',
        'app.Finances',
        'app.Lodgings',
        'app.Lrcs',
        'app.Payments',
        'app.PotentialAttendees',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Localities') ? [] : ['className' => LocalitiesTable::class];
        $this->Localities = $this->getTableLocator()->get('Localities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Localities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LocalitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LocalitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
