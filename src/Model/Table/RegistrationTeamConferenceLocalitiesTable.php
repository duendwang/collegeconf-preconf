<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistrationTeamConferenceLocalities Model
 *
 * @property \App\Model\Table\RegistrationTeamsTable&\Cake\ORM\Association\BelongsTo $RegistrationTeams
 * @property \App\Model\Table\ConferenceLocalitiesTable&\Cake\ORM\Association\BelongsTo $ConferenceLocalities
 *
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality newEmptyEntity()
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeamConferenceLocality[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrationTeamConferenceLocalitiesTable extends Table
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

        $this->setTable('registration_team_conference_localities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RegistrationTeams', [
            'foreignKey' => 'registration_team_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ConferenceLocalities', [
            'foreignKey' => 'conference_locality_id',
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
        $rules->add($rules->existsIn('registration_team_id', 'RegistrationTeams'), ['errorField' => 'registration_team_id']);
        $rules->add($rules->existsIn('conference_locality_id', 'ConferenceLocalities'), ['errorField' => 'conference_locality_id']);

        return $rules;
    }
}
