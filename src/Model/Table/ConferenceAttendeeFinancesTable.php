<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceAttendeeFinances Model
 *
 * @property \App\Model\Table\FinancesTable&\Cake\ORM\Association\BelongsTo $Finances
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\BelongsTo $ConferenceAttendees
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\BelongsTo $ConferenceAttendees
 *
 * @method \App\Model\Entity\ConferenceAttendeeFinance newEmptyEntity()
 * @method \App\Model\Entity\ConferenceAttendeeFinance newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeFinance[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceAttendeeFinancesTable extends Table
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

        $this->setTable('conference_attendee_finances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Finances', [
            'foreignKey' => 'finance_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ConferenceAttendees', [
            'foreignKey' => 'add_conference_attendee_id',
        ]);
        $this->belongsTo('ConferenceAttendees', [
            'foreignKey' => 'cancel_conference_attendee_id',
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
        $rules->add($rules->existsIn('finance_id', 'Finances'), ['errorField' => 'finance_id']);
        $rules->add($rules->existsIn('add_conference_attendee_id', 'ConferenceAttendees'), ['errorField' => 'add_conference_attendee_id']);
        $rules->add($rules->existsIn('cancel_conference_attendee_id', 'ConferenceAttendees'), ['errorField' => 'cancel_conference_attendee_id']);

        return $rules;
    }
}
