<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ConferenceDeadlineAccountTypesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ConferenceDeadlineAccountTypesController Test Case
 *
 * @uses \App\Controller\ConferenceDeadlineAccountTypesController
 */
class ConferenceDeadlineAccountTypesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ConferenceDeadlineAccountTypes',
        'app.ConferenceDeadlines',
        'app.AccountTypes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ConferenceDeadlineAccountTypesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ConferenceDeadlineAccountTypesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ConferenceDeadlineAccountTypesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ConferenceDeadlineAccountTypesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ConferenceDeadlineAccountTypesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
