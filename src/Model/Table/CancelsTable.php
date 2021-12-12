<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cancels Model
 *
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\BelongsTo $ConferenceAttendees
 *
 * @method \App\Model\Entity\Cancel newEmptyEntity()
 * @method \App\Model\Entity\Cancel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cancel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cancel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cancel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cancel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cancel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cancel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cancel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cancel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cancel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cancel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cancel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CancelsTable extends Table
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

        $this->setTable('cancels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceAttendees', [
            'foreignKey' => 'conference_attendee_id',
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
            ->scalar('reason')
            ->allowEmptyString('reason');

        $validator
            ->scalar('replaced')
            ->maxLength('replaced', 100)
            ->allowEmptyString('replaced');

        $validator
            ->boolean('excused')
            ->notEmptyString('excused');

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
        $rules->add($rules->existsIn('conference_attendee_id', 'ConferenceAttendees'), ['errorField' => 'conference_attendee_id']);

        return $rules;
    }
}
