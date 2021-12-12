<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnsiteRegistrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnsiteRegistrationsTable Test Case
 */
class OnsiteRegistrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OnsiteRegistrationsTable
     */
    protected $OnsiteRegistrations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OnsiteRegistrations',
        'app.ConferenceAttendees',
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
        $config = $this->getTableLocator()->exists('OnsiteRegistrations') ? [] : ['className' => OnsiteRegistrationsTable::class];
        $this->OnsiteRegistrations = $this->getTableLocator()->get('OnsiteRegistrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OnsiteRegistrations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OnsiteRegistrationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\OnsiteRegistrationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
