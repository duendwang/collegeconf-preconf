<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PotentialAttendees Model
 *
 * @property \App\Model\Table\ConferencesTable&\Cake\ORM\Association\BelongsTo $Conferences
 * @property \App\Model\Table\LocalitiesTable&\Cake\ORM\Association\BelongsTo $Localities
 * @property \App\Model\Table\CampusesTable&\Cake\ORM\Association\BelongsTo $Campuses
 * @property \App\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 *
 * @method \App\Model\Entity\PotentialAttendee newEmptyEntity()
 * @method \App\Model\Entity\PotentialAttendee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PotentialAttendee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PotentialAttendee get($primaryKey, $options = [])
 * @method \App\Model\Entity\PotentialAttendee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PotentialAttendee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PotentialAttendee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PotentialAttendee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PotentialAttendee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PotentialAttendee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PotentialAttendee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PotentialAttendee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PotentialAttendee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PotentialAttendeesTable extends Table
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

        $this->setTable('potential_attendees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conferences', [
            'foreignKey' => 'conference_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Localities', [
            'foreignKey' => 'locality_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Campuses', [
            'foreignKey' => 'campus_id',
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('allergies')
            ->maxLength('allergies', 3)
            ->allowEmptyString('allergies');

        $validator
            ->scalar('cell_phone')
            ->maxLength('cell_phone', 25)
            ->requirePresence('cell_phone', 'create')
            ->notEmptyString('cell_phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

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
        $rules->add($rules->existsIn('campus_id', 'Campuses'), ['errorField' => 'campus_id']);
        $rules->add($rules->existsIn('status_id', 'Statuses'), ['errorField' => 'status_id']);

        return $rules;
    }
}
