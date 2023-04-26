<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuariosInformacoes Model
 *
 * @method \App\Model\Entity\UsuariosInformaco newEmptyEntity()
 * @method \App\Model\Entity\UsuariosInformaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosInformaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosInformaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuariosInformaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuariosInformacoesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usuarios_informacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Nome')
            ->maxLength('Nome', 220)
            ->requirePresence('Nome', 'create')
            ->notEmptyString('Nome');

        $validator
            ->date('Data_Nascimento')
            ->requirePresence('Data_Nascimento', 'create')
            ->notEmptyDate('Data_Nascimento');

        $validator
            ->scalar('Profissao')
            ->maxLength('Profissao', 220)
            ->requirePresence('Profissao', 'create')
            ->notEmptyString('Profissao');

        return $validator;
    }
}
