<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosInformacoesFixture
 */
class UsuariosInformacoesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'Nome' => 'Lorem ipsum dolor sit amet',
                'Data_Nascimento' => '2023-04-26',
                'Profissao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
