<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Finances Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\BelongsTo $Conferences
 * @property \App\Model\Table\LocalitiesTable&\Cake\ORM\Association\BelongsTo $Localities
 * @property \App\Model\Table\FinanceTypesTable&\Cake\ORM\Association\BelongsTo $FinanceTypes
 * @property \App\Model\Table\ConferenceAttendeeFinancesTable&\Cake\ORM\Association\HasMany $ConferenceAttendeeFinances
 *
 * @method \App\Model\Entity\Finance newEmptyEntity()
 * @method \App\Model\Entity\Finance newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Finance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Finance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Finance findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Finance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Finance[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Finance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Finance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Finance[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Finance[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Finance[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Finance[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FinancesTable extends Table
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

        $this->setTable('finances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conferences', [
            'foreignKey' => 'conference_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Localities', [
            'foreignKey' => 'locality_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('FinanceTypes', [
            'foreignKey' => 'finance_type_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ConferenceAttendeeFinances', [
            'foreignKey' => 'finance_id',
        ]);
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('receive_date')
            ->requirePresence('receive_date', 'create')
            ->notEmptyDate('receive_date');

        $validator
            ->integer('count')
            ->allowEmptyString('count');

        $validator
            ->decimal('rate')
            ->allowEmptyString('rate');

        $validator
            ->decimal('charge')
            ->allowEmptyString('charge');

        $validator
            ->decimal('payment')
            ->allowEmptyString('payment');

        $validator
            ->decimal('balance')
            ->notEmptyString('balance');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

        $validator
            ->nonNegativeInteger('creator')
            ->allowEmptyString('creator');

        $validator
            ->nonNegativeInteger('modifier')
            ->allowEmptyString('modifier');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('conference_id', 'Conferences'), ['errorField' => 'conference_id']);
        $rules->add($rules->existsIn('locality_id', 'Localities'), ['errorField' => 'locality_id']);
        $rules->add($rules->existsIn('finance_type_id', 'FinanceTypes'), ['errorField' => 'finance_type_id']);

        return $rules;
    }
}
