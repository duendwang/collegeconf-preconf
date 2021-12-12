<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceDeadlineExceptions Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\BelongsTo $Conferences
 * @property \App\Model\Table\ConferenceDeadlinesTable&\Cake\ORM\Association\BelongsTo $ConferenceDeadlines
 *
 * @method \App\Model\Entity\ConferenceDeadlineException newEmptyEntity()
 * @method \App\Model\Entity\ConferenceDeadlineException newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceDeadlineException[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceDeadlineExceptionsTable extends Table
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

        $this->setTable('conference_deadline_exceptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conferences', [
            'foreignKey' => 'conference_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ConferenceDeadlines', [
            'foreignKey' => 'conference_deadline_id',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

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
        $rules->add($rules->existsIn('conference_deadline_id', 'ConferenceDeadlines'), ['errorField' => 'conference_deadline_id']);

        return $rules;
    }
}
