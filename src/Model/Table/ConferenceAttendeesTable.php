<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceAttendees Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\BelongsTo $Conferences
 * @property \App\Model\Table\AttendeesTable&\Cake\ORM\Association\BelongsTo $Attendees
 * @property \App\Model\Table\BarcodesTable&\Cake\ORM\Association\BelongsTo $Barcodes
 * @property \App\Model\Table\LodgingsTable&\Cake\ORM\Association\BelongsTo $Lodgings
 * @property \App\Model\Table\CancelsTable&\Cake\ORM\Association\HasMany $Cancels
 * @property \App\Model\Table\CheckInsTable&\Cake\ORM\Association\HasMany $CheckIns
 * @property \App\Model\Table\ConferenceAttendeeConferenceEventsTable&\Cake\ORM\Association\HasMany $ConferenceAttendeeConferenceEvents
 * @property \App\Model\Table\OnsiteRegistrationsTable&\Cake\ORM\Association\HasMany $OnsiteRegistrations
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 *
 * @method \App\Model\Entity\ConferenceAttendee newEmptyEntity()
 * @method \App\Model\Entity\ConferenceAttendee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendee get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceAttendee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceAttendee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceAttendeesTable extends Table
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

        $this->setTable('conference_attendees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conferences', [
            'foreignKey' => 'conference_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Attendees', [
            'foreignKey' => 'attendee_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Barcodes', [
            'foreignKey' => 'barcode_id',
        ]);
        $this->belongsTo('Lodgings', [
            'foreignKey' => 'lodging_id',
        ]);
        $this->hasMany('Cancels', [
            'foreignKey' => 'conference_attendee_id',
        ]);
        $this->hasMany('CheckIns', [
            'foreignKey' => 'conference_attendee_id',
        ]);
        $this->hasMany('ConferenceAttendeeConferenceEvents', [
            'foreignKey' => 'conference_attendee_id',
        ]);
        $this->hasMany('OnsiteRegistrations', [
            'foreignKey' => 'conference_attendee_id',
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'conference_attendee_id',
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
            ->boolean('conf_contact')
            ->notEmptyString('conf_contact');

        $validator
            ->scalar('lodging_group')
            ->maxLength('lodging_group', 10)
            ->allowEmptyString('lodging_group');

        $validator
            ->scalar('submitter')
            ->maxLength('submitter', 100)
            ->allowEmptyString('submitter');

        $validator
            ->decimal('rate')
            ->allowEmptyString('rate');

        $validator
            ->decimal('amd_paid')
            ->allowEmptyString('amd_paid');

        $validator
            ->scalar('check_num')
            ->maxLength('check_num', 10)
            ->allowEmptyString('check_num');

        $validator
            ->date('paid_date')
            ->allowEmptyDate('paid_date');

        $validator
            ->boolean('part_time')
            ->notEmptyString('part_time');

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
        $rules->add($rules->existsIn('attendee_id', 'Attendees'), ['errorField' => 'attendee_id']);
        $rules->add($rules->existsIn('barcode_id', 'Barcodes'), ['errorField' => 'barcode_id']);
        $rules->add($rules->existsIn('lodging_id', 'Lodgings'), ['errorField' => 'lodging_id']);

        return $rules;
    }
}
