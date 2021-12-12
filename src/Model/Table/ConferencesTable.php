<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conferences Model
 *
 * @property \App\Model\Table\ConferenceLocationsTable&\Cake\ORM\Association\BelongsTo $ConferenceLocations
 * @property \App\Model\Table\LastBarcodesTable&\Cake\ORM\Association\BelongsTo $LastBarcodes
 * @property \App\Model\Table\ConferenceAttendeesTable&\Cake\ORM\Association\HasMany $ConferenceAttendees
 * @property \App\Model\Table\ConferenceDeadlineExceptionsTable&\Cake\ORM\Association\HasMany $ConferenceDeadlineExceptions
 * @property \App\Model\Table\ConferenceEventsTable&\Cake\ORM\Association\HasMany $ConferenceEvents
 * @property \App\Model\Table\ConferenceLocalitiesTable&\Cake\ORM\Association\HasMany $ConferenceLocalities
 * @property \App\Model\Table\EmailExceptionsTable&\Cake\ORM\Association\HasMany $EmailExceptions
 * @property \App\Model\Table\FinancesTable&\Cake\ORM\Association\HasMany $Finances
 * @property \App\Model\Table\LodgingsTable&\Cake\ORM\Association\HasMany $Lodgings
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 * @property \App\Model\Table\PotentialAttendeesTable&\Cake\ORM\Association\HasMany $PotentialAttendees
 *
 * @method \App\Model\Entity\Conference newEmptyEntity()
 * @method \App\Model\Entity\Conference newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conference findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conference[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conference|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConferencesTable extends Table
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

        $this->setTable('conferences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ConferenceLocations', [
            'foreignKey' => 'conference_location_id',
        ]);
        $this->belongsTo('LastBarcodes', [
            'foreignKey' => 'last_barcode_id',
        ]);
        $this->hasMany('ConferenceAttendees', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('ConferenceDeadlineExceptions', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('ConferenceEvents', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('ConferenceLocalities', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('EmailExceptions', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('Finances', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('Lodgings', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'conference_id',
        ]);
        $this->hasMany('PotentialAttendees', [
            'foreignKey' => 'conference_id',
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
            ->scalar('term')
            ->maxLength('term', 6)
            ->requirePresence('term', 'create')
            ->notEmptyString('term');

        $validator
            ->scalar('year')
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('part')
            ->maxLength('part', 1)
            ->requirePresence('part', 'create')
            ->notEmptyString('part');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->scalar('code')
            ->maxLength('code', 3)
            ->requirePresence('code', 'create')
            ->notEmptyString('code')
            ->add('code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['code']), ['errorField' => 'code']);
        $rules->add($rules->isUnique(['term', 'year', 'part']), ['errorField' => 'term']);
        $rules->add($rules->existsIn('conference_location_id', 'ConferenceLocations'), ['errorField' => 'conference_location_id']);
        $rules->add($rules->existsIn('last_barcode_id', 'LastBarcodes'), ['errorField' => 'last_barcode_id']);

        return $rules;
    }
}
