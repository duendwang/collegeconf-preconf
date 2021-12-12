<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistrationTeams Model
 *
 * @property \App\Model\Table\RegistrationTeamConferenceLocalitiesTable&\Cake\ORM\Association\HasMany $RegistrationTeamConferenceLocalities
 * @property \App\Model\Table\RegistrationTeamUsersTable&\Cake\ORM\Association\HasMany $RegistrationTeamUsers
 *
 * @method \App\Model\Entity\RegistrationTeam newEmptyEntity()
 * @method \App\Model\Entity\RegistrationTeam newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeam[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeam get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistrationTeam findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\RegistrationTeam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeam[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationTeam|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationTeam saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationTeam[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeam[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeam[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationTeam[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RegistrationTeamsTable extends Table
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

        $this->setTable('registration_teams');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('RegistrationTeamConferenceLocalities', [
            'foreignKey' => 'registration_team_id',
        ]);
        $this->hasMany('RegistrationTeamUsers', [
            'foreignKey' => 'registration_team_id',
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
            ->maxLength('name', 6)
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

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
