<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceAttendeeConferenceEvents Model
 *
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\BelongsTo $ConferenceAttendees
 * @property \App\Model\Table\ConferenceEventsTable&\Cake\ORM\Association\BelongsTo $ConferenceEvents
 *
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent newEmptyEntity()
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendeeConferenceEvent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceAttendeeConferenceEventsTable extends Table
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

        $this->setTable('conference_attendee_conference_events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceAttendees', [
            'foreignKey' => 'conference_attendee_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ConferenceEvents', [
            'foreignKey' => 'conference_event_id',
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
        $rules->add($rules->existsIn('conference_attendee_id', 'ConferenceAttendees'), ['errorField' => 'conference_attendee_id']);
        $rules->add($rules->existsIn('conference_event_id', 'ConferenceEvents'), ['errorField' => 'conference_event_id']);

        return $rules;
    }
}
