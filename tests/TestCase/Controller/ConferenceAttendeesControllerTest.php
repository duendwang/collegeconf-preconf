<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ConferenceAttendeesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ConferenceAttendeesController Test Case
 *
 * @uses \App\Controller\ConferenceAttendeesController
 */
class ConferenceAttendeesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceAttendees',
        'app.Conferences',
        'app.Attendees',
        'app.Barcodes',
        'app.Lodgings',
        'app.Cancels',
        'app.CheckIns',
        'app.ConferenceAttendeeConferenceEvents',
        'app.OnsiteRegistrations',
        'app.Payments',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
