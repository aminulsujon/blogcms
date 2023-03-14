<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VotesTable Test Case
 */
class VotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VotesTable
     */
    protected $Votes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Votes',
        'app.Voteoptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Votes') ? [] : ['className' => VotesTable::class];
        $this->Votes = $this->getTableLocator()->get('Votes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Votes);

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
}
