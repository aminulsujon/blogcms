<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagelinksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagelinksTable Test Case
 */
class PagelinksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagelinksTable
     */
    protected $Pagelinks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pagelinks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pagelinks') ? [] : ['className' => PagelinksTable::class];
        $this->Pagelinks = $this->getTableLocator()->get('Pagelinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pagelinks);

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
