<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsReportersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsReportersTable Test Case
 */
class ProductsReportersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsReportersTable
     */
    protected $ProductsReporters;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductsReporters',
        'app.Products',
        'app.Reporters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductsReporters') ? [] : ['className' => ProductsReportersTable::class];
        $this->ProductsReporters = $this->getTableLocator()->get('ProductsReporters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductsReporters);

        parent::tearDown();
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
