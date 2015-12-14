<?php

/**
 * This is the model class for table "tbl_dgst".
 *
 * The followings are the available columns in table 'tbl_dgst':
 * @property integer $id
 * @property integer $day_id
 * @property integer $group_id
 * @property integer $subject_id
 * @property integer $teacher_id
 * @property integer $para
 *
 * The followings are the available model relations:
 * @property Teacher $teacher
 * @property Day $day
 * @property Group $group
 * @property Subject $subject
 */
class Dgst extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dgst';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('day_id, group_id, subject_id, teacher_id, para', 'required'),
			array('day_id, group_id, subject_id, teacher_id, para', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, day_id, group_id, subject_id, teacher_id, para', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'day' => array(self::BELONGS_TO, 'Day', 'day_id'),
			'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'day_id' => 'Day',
			'group_id' => 'Group',
			'subject_id' => 'Subject',
			'teacher_id' => 'Teacher',
			'para' => 'Para',
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
		$criteria->compare('day_id',$this->day_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('para',$this->para);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dgst the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
