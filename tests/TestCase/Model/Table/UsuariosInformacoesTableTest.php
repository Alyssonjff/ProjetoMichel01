<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosInformacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosInformacoesTable Test Case
 */
class UsuariosInformacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosInformacoesTable
     */
    protected $UsuariosInformacoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UsuariosInformacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsuariosInformacoes') ? [] : ['className' => UsuariosInformacoesTable::class];
        $this->UsuariosInformacoes = $this->getTableLocator()->get('UsuariosInformacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UsuariosInformacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsuariosInformacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
