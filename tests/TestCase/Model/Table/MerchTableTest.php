<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MerchTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MerchTable Test Case
 */
class MerchTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MerchTable
     */
    public $Merch;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.merch',
        'app.photos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Merch') ? [] : ['className' => MerchTable::class];
        $this->Merch = TableRegistry::get('Merch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Merch);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
