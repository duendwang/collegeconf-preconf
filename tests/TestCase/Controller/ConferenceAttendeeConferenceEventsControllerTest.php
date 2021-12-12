<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ConferenceAttendeeConferenceEventsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ConferenceAttendeeConferenceEventsController Test Case
 *
 * @uses \App\Controller\ConferenceAttendeeConferenceEventsController
 */
class ConferenceAttendeeConferenceEventsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceAttendeeConferenceEvents',
        'app.ConferenceAttendees',
        'app.ConferenceEvents',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeeConferenceEventsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeeConferenceEventsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeeConferenceEventsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeeConferenceEventsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ConferenceAttendeeConferenceEventsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
