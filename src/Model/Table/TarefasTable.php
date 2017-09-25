<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tarefas Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\LocaisTable|\Cake\ORM\Association\BelongsTo $Locais
 * @property \App\Model\Table\TiposTarefasTable|\Cake\ORM\Association\BelongsTo $TiposTarefas
 *
 * @method \App\Model\Entity\Tarefa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tarefa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tarefa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tarefa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TarefasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tarefas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Locais', [
            'foreignKey' => 'local_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TiposTarefas', [
            'foreignKey' => 'tipo_tarefa_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('titulo')
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->date('dia')
            ->requirePresence('dia', 'create')
            ->notEmpty('dia');

        $validator
            ->scalar('descricao')
            ->allowEmpty('descricao');

        $validator
            ->dateTime('inicio')
            ->allowEmpty('inicio');

        $validator
            ->dateTime('fim')
            ->allowEmpty('fim');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['local_id'], 'Locais'));
        $rules->add($rules->existsIn(['tipo_tarefa_id'], 'TiposTarefas'));

        return $rules;
    }
}
