<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LodgingFacilities Model
 *
 * @property \App\Model\Table\ConferenceLocationsTable&\Cake\ORM\Association\BelongsTo $ConferenceLocations
 *
 * @method \App\Model\Entity\LodgingFacility newEmptyEntity()
 * @method \App\Model\Entity\LodgingFacility newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LodgingFacility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LodgingFacility get($primaryKey, $options = [])
 * @method \App\Model\Entity\LodgingFacility findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LodgingFacility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LodgingFacility[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LodgingFacility|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LodgingFacility saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LodgingFacility[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LodgingFacility[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LodgingFacility[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LodgingFacility[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LodgingFacilitiesTable extends Table
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

        $this->setTable('lodging_facilities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceLocations', [
            'foreignKey' => 'conference_location_id',
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
            ->scalar('code')
            ->maxLength('code', 10)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('location')
            ->maxLength('location', 45)
            ->allowEmptyString('location');

        $validator
            ->scalar('room')
            ->maxLength('room', 45)
            ->allowEmptyString('room');

        $validator
            ->scalar('accomodations')
            ->maxLength('accomodations', 100)
            ->allowEmptyString('accomodations');

        $validator
            ->integer('capacity')
            ->allowEmptyString('capacity');

        $validator
            ->scalar('address')
            ->maxLength('address', 45)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->allowEmptyString('city');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 5)
            ->allowEmptyString('zip');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10)
            ->allowEmptyString('phone');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 255)
            ->allowEmptyString('comments');

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
        $rules->add($rules->existsIn('conference_location_id', 'ConferenceLocations'), ['errorField' => 'conference_location_id']);

        return $rules;
    }
}
