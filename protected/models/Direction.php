<?php

/**
 * This is the model class for table "tbl_direction".
 *
 * The followings are the available columns in table 'tbl_direction':
 * @property integer $id
 * @property string $name
 * @property integer $faculty_id
 *
 * The followings are the available model relations:
 * @property Faculty $faculty
 * @property Subject[] $subjects
 */
class Direction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_direction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, faculty_id', 'required'),
			array('faculty_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, faculty_id', 'safe', 'on'=>'search'),
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
			'faculty' => array(self::BELONGS_TO, 'Faculty', 'faculty_id'),
			'subjects' => array(self::HAS_MANY, 'Subject', 'direction_id'),
			'groups' => array(self::HAS_MANY, 'Group', 'direction_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'faculty_id' => 'Faculty',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('faculty_id',$this->faculty_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function all(){
		$models=self::model()->findAll();
		return CHtml::listData($models,'id','name');
	}

	public function directions(){
		$models=self::model()->findAll();
		return CHtml::listData($models,'id','name');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
