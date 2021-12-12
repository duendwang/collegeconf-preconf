<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceDeadlines Model
 *
 * @property \App\Model\Table\ConferenceDeadlineAccountTypesTable&\Cake\ORM\Association\HasMany $ConferenceDeadlineAccountTypes
 * @property \App\Model\Table\ConferenceDeadlineExceptionsTable&\Cake\ORM\Association\HasMany $ConferenceDeadlineExceptions
 *
 * @method \App\Model\Entity\ConferenceDeadline newEmptyEntity()
 * @method \App\Model\Entity\ConferenceDeadline newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadline get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadline|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadline[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceDeadlinesTable extends Table
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

        $this->setTable('conference_deadlines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ConferenceDeadlineAccountTypes', [
            'foreignKey' => 'conference_deadline_id',
        ]);
        $this->hasMany('ConferenceDeadlineExceptions', [
            'foreignKey' => 'conference_deadline_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('weeks_before')
            ->requirePresence('weeks_before', 'create')
            ->notEmptyString('weeks_before');

        $validator
            ->integer('weekday')
            ->requirePresence('weekday', 'create')
            ->notEmptyString('weekday');

        $validator
            ->time('time')
            ->allowEmptyTime('time');

        $validator
            ->nonNegativeInteger('creator')
            ->allowEmptyString('creator');

        $validator
            ->nonNegativeInteger('modifier')
            ->allowEmptyString('modifier');

        return $validator;
    }
}
