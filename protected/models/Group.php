<?php

/**
 * This is the model class for table "tbl_group".
 *
 * The followings are the available columns in table 'tbl_group':
 * @property integer $id
 * @property string $name
 * @property integer $faculty_id
 * @property integer $direction_id
 *
 * The followings are the available model relations:
 * @property Dgst[] $dgsts
 * @property Direction $direction
 * @property Faculty $faculty
 * @property Student[] $students
 */
class Group extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, faculty_id, direction_id', 'required'),
			array('faculty_id, direction_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, faculty_id, direction_id', 'safe', 'on'=>'search'),
		);
	}

	public static function courses(){
		$array=[];
		for($i=1; $i<=6; $i++){
			if($i>4)
				$array[$i]="Magistrant ".($i-4)."-kurs";
			else
			$array[$i]=$i."-kurs";
		}
		return $array;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'dgsts' => array(self::HAS_MANY, 'Dgst', 'group_id'),
			'direction' => array(self::BELONGS_TO, 'Direction', 'direction_id'),
			'faculty' => array(self::BELONGS_TO, 'Faculty', 'faculty_id'),
			'students' => array(self::HAS_MANY, 'Student', 'group_id'),
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
			'direction_id' => 'Direction',
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
		$criteria->compare('direction_id',$this->direction_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function groups(){
		$models=self::model()->findAll();
		return CHtml::listData($models,'id','name');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Group the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
