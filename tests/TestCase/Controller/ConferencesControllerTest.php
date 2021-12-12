<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ConferencesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ConferencesController Test Case
 *
 * @uses \App\Controller\ConferencesController
 */
class ConferencesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Conferences',
        'app.ConferenceLocations',
        'app.LastBarcodes',
        'app.ConferenceAttendees',
        'app.ConferenceDeadlineExceptions',
        'app.ConferenceEvents',
        'app.ConferenceLocalities',
        'app.EmailExceptions',
        'app.Finances',
        'app.Lodgings',
        'app.Payments',
        'app.PotentialAttendees',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ConferencesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ConferencesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ConferencesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ConferencesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ConferencesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
