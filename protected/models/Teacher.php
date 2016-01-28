<?php

/**
 * This is the model class for table "tbl_teacher".
 *
 * The followings are the available columns in table 'tbl_teacher':
 * @property integer $id
 * @property string $fio
 * @property integer $department_id
 *
 * The followings are the available model relations:
 * @property Dgst[] $dgsts
 * @property SubjectTeacher[] $subjectTeachers
 * @property Department $department
 *
 * @property string $login
 * @property string $password
 * @property integer $role
 */
class Teacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fio, department_id, login, password, role', 'required'),
			array('department_id, role', 'numerical', 'integerOnly'=>true),
			array('fio', 'length', 'max'=>50),
			array('login', 'length', 'max'=>20),
			array('password', 'length', 'max'=>24),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fio, department_id, login, password, role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'dgsts' => array(self::HAS_MANY, 'Dgst', 'teacher_id'),

			'dgsts1' => array(self::HAS_MANY, 'Dgst', 'teacher2_id'),

			'subjectTeachers' => array(self::HAS_MANY, 'SubjectTeacher', 'teacher_id'),
			'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fio' => 'Fio',
			'department_id' => 'Department',
			'login' => 'Login',
			'password' => 'Password',
			'role' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fio',$this->fio,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function teachers(){
		$models=self::model()->findAll();
		return CHtml::listData($models,'id','fio');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
