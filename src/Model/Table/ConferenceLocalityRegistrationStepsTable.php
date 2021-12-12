<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceLocalityRegistrationSteps Model
 *
 * @property \App\Model\Table\ConferenceLocalitiesTable&\Cake\ORM\Association\BelongsTo $ConferenceLocalities
 * @property \App\Model\Table\RegistrationStepsTable&\Cake\ORM\Association\BelongsTo $RegistrationSteps
 *
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep newEmptyEntity()
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocalityRegistrationStep[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferenceLocalityRegistrationStepsTable extends Table
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

        $this->setTable('conference_locality_registration_steps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceLocalities', [
            'foreignKey' => 'conference_locality_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('RegistrationSteps', [
            'foreignKey' => 'registration_step_id',
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
            ->boolean('completed')
            ->notEmptyString('completed');

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
        $rules->add($rules->existsIn('conference_locality_id', 'ConferenceLocalities'), ['errorField' => 'conference_locality_id']);
        $rules->add($rules->existsIn('registration_step_id', 'RegistrationSteps'), ['errorField' => 'registration_step_id']);

        return $rules;
    }
}
