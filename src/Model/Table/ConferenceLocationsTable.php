<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConferenceLocations Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\HasMany $Conferences
 * @property \App\Model\Table\LodgingFacilitiesTable&\Cake\ORM\Association\HasMany $LodgingFacilities
 * @property \App\Model\Table\RatesTable&\Cake\ORM\Association\HasMany $Rates
 *
 * @method \App\Model\Entity\ConferenceLocation newEmptyEntity()
 * @method \App\Model\Entity\ConferenceLocation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocation get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConferenceLocation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ConferenceLocation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConferenceLocation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceLocation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConferenceLocation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ConferenceLocation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConferenceLocationsTable extends Table
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

        $this->setTable('conference_locations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Conferences', [
            'foreignKey' => 'conference_location_id',
        ]);
        $this->hasMany('LodgingFacilities', [
            'foreignKey' => 'conference_location_id',
        ]);
        $this->hasMany('Rates', [
            'foreignKey' => 'conference_location_id',
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
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name']), ['errorField' => 'name']);

        return $rules;
    }
}
