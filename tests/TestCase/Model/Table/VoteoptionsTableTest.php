<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoteoptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoteoptionsTable Test Case
 */
class VoteoptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VoteoptionsTable
     */
    protected $Voteoptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Voteoptions',
        'app.Votes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Voteoptions') ? [] : ['className' => VoteoptionsTable::class];
        $this->Voteoptions = $this->getTableLocator()->get('Voteoptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Voteoptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
