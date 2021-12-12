<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lodgings Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\BelongsTo $Conferences
 * @property \App\Model\Table\LocalitiesTable&\Cake\ORM\Association\BelongsTo $Localities
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\HasMany $ConferenceAttendees
 *
 * @method \App\Model\Entity\Lodging newEmptyEntity()
 * @method \App\Model\Entity\Lodging newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lodging[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lodging get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lodging findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lodging patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lodging[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lodging|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lodging saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lodging[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lodging[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lodging[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lodging[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LodgingsTable extends Table
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

        $this->setTable('lodgings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conferences', [
            'foreignKey' => 'conference_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Localities', [
            'foreignKey' => 'locality_id',
        ]);
        $this->hasMany('ConferenceAttendees', [
            'foreignKey' => 'lodging_id',
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
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

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
            ->scalar('home_phone')
            ->maxLength('home_phone', 20)
            ->allowEmptyString('home_phone');

        $validator
            ->scalar('cell_phone')
            ->maxLength('cell_phone', 20)
            ->allowEmptyString('cell_phone');

        $validator
            ->scalar('pet')
            ->maxLength('pet', 20)
            ->allowEmptyString('pet');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 45)
            ->allowEmptyString('gender');

        $validator
            ->integer('capacity')
            ->allowEmptyString('capacity');

        $validator
            ->integer('attendee_count')
            ->notEmptyString('attendee_count');

        $validator
            ->scalar('room')
            ->maxLength('room', 45)
            ->allowEmptyString('room');

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
        $rules->add($rules->existsIn('conference_id', 'Conferences'), ['errorField' => 'conference_id']);
        $rules->add($rules->existsIn('locality_id', 'Localities'), ['errorField' => 'locality_id']);

        return $rules;
    }
}
