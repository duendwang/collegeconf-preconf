<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OnsiteRegistrations Model
 *
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\BelongsTo $ConferenceAttendees
 * @property \App\Model\Table\LocalitiesTable&\Cake\ORM\Association\BelongsTo $Localities
 *
 * @method \App\Model\Entity\OnsiteRegistration newEmptyEntity()
 * @method \App\Model\Entity\OnsiteRegistration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OnsiteRegistration get($primaryKey, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OnsiteRegistration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OnsiteRegistration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OnsiteRegistrationsTable extends Table
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

        $this->setTable('onsite_registrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceAttendees', [
            'foreignKey' => 'conference_attendee_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Localities', [
            'foreignKey' => 'old_locality_id',
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
            ->dateTime('registration')
            ->allowEmptyDateTime('registration');

        $validator
            ->dateTime('cashier')
            ->allowEmptyDateTime('cashier');

        $validator
            ->dateTime('hospitality')
            ->allowEmptyDateTime('hospitality');

        $validator
            ->dateTime('badge')
            ->allowEmptyDateTime('badge');

        $validator
            ->boolean('need_cashier')
            ->allowEmptyString('need_cashier');

        $validator
            ->boolean('need_hospitality')
            ->allowEmptyString('need_hospitality');

        $validator
            ->boolean('need_badge')
            ->allowEmptyString('need_badge');

        $validator
            ->boolean('need_old')
            ->allowEmptyString('need_old');

        $validator
            ->scalar('old_first')
            ->maxLength('old_first', 45)
            ->allowEmptyString('old_first');

        $validator
            ->scalar('old_last')
            ->maxLength('old_last', 45)
            ->allowEmptyString('old_last');

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
        $rules->add($rules->existsIn('old_locality_id', 'Localities'), ['errorField' => 'old_locality_id']);

        return $rules;
    }
}
