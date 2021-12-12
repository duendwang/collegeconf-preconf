<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceDeadlineAccountTypes Model
 *
 * @property \App\Model\Table\ConferenceDeadlinesTable&\Cake\ORM\Association\BelongsTo $ConferenceDeadlines
 * @property \App\Model\Table\AccountTypesTable&\Cake\ORM\Association\BelongsTo $AccountTypes
 *
 * @method \App\Model\Entity\ConferenceDeadlineAccountType newEmptyEntity()
 * @method \App\Model\Entity\ConferenceDeadlineAccountType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineAccountType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceDeadlineAccountTypesTable extends Table
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

        $this->setTable('conference_deadline_account_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceDeadlines', [
            'foreignKey' => 'conference_deadline_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('AccountTypes', [
            'foreignKey' => 'account_type_id',
            'joinType' => 'INNER',
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
            ->scalar('notes')
            ->allowEmptyString('notes');

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
        $rules->add($rules->existsIn('conference_deadline_id', 'ConferenceDeadlines'), ['errorField' => 'conference_deadline_id']);
        $rules->add($rules->existsIn('account_type_id', 'AccountTypes'), ['errorField' => 'account_type_id']);

        return $rules;
    }
}
