<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportersTable Test Case
 */
class ReportersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportersTable
     */
    protected $Reporters;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Reporters',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Reporters') ? [] : ['className' => ReportersTable::class];
        $this->Reporters = $this->getTableLocator()->get('Reporters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Reporters);

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
