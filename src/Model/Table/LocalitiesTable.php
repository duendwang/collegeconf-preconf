<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Localities Model
 *
 * @property \App\Model\Table\AttendeesTable&\Cake\ORM\Association\HasMany $Attendees
 * @property \App\Model\Table\ConferenceLocalitiesTable&\Cake\ORM\Association\HasMany $ConferenceLocalities
 * @property \App\Model\Table\FinancesTable&\Cake\ORM\Association\HasMany $Finances
 * @property \App\Model\Table\LodgingsTable&\Cake\ORM\Association\HasMany $Lodgings
 * @property \App\Model\Table\LrcsTable&\Cake\ORM\Association\HasMany $Lrcs
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 * @property \App\Model\Table\PotentialAttendeesTable&\Cake\ORM\Association\HasMany $PotentialAttendees
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Locality newEmptyEntity()
 * @method \App\Model\Entity\Locality newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Locality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Locality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Locality findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Locality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Locality[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Locality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Locality[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locality[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locality[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Locality[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LocalitiesTable extends Table
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

        $this->setTable('localities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Attendees', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('ConferenceLocalities', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('Finances', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('Lodgings', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('Lrcs', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('PotentialAttendees', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'locality_id',
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

        $validator
            ->scalar('preferred_conference')
            ->maxLength('preferred_conference', 1)
            ->allowEmptyString('preferred_conference');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

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
        $rules->add($rules->isUnique(['name']), ['errorField' => 'name']);

        return $rules;
    }
}
