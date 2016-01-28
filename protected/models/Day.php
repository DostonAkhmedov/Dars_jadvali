<?php

/**
 * This is the model class for table "tbl_day".
 *
 * The followings are the available columns in table 'tbl_day':
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Dgst[] $dgsts
 */
class Day extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_day';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name', 'safe', 'on'=>'search'),
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
			'dgsts' => array(self::HAS_MANY, 'Dgst', 'day_id'),
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
		);
	}

	public static function forMegalka(){
		if ((int)date("m") >= 1 && (int)date("m") <= 8) {
			$day_of_week_second_september = (int)date("w");
			$year = (int)date("Y") - 1;
		} elseif ((int)date("m") >= 9 && (int)date("m") <= 12) {
			$day_of_week_second_september = (int)date("w");
			$year = (int)date("Y");
		}
		$day = 2;
		$month = 9;
		$r="02.09.".($year);
		$d=strtotime((string)$r);
		$inc_day = (int)date("w",$d);
		$current_date = date("j.m.Y");
		$toq = true;
		$juft = false;
		$alfa = 1;
		while (!($day == (int)date("j") && $month == (int)date("m") && $year == (int)date("Y"))) {
			if ($inc_day == 0) {
				$alfa++;
			}
			if ($alfa % 2 == 0) {
				$juft = true;
				$toq = false;
			} else {
				$juft = false;
				$toq = true;
			}
			if ($month == 2) {
				if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
					if ($day > 29) {
						$day = 1;
						$month++;
					}
				}
				if (!($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)) {
					if ($day > 28) {
						$day = 1;
						$month++;
					}
				}

			}
			if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
				if ($day > 30) {
					$day = 1;
					$month++;
				}
			}
			if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10
				|| $month == 12
			) {
				if ($day > 31) {
					$day = 1;
					$month++;
				}
			}
			if ($month > 12) {
				$month = 1;
				$year++;
			}
			$day++;
			$r=$day.".".$month.".".$year;
			$d=strtotime((string)$r);
			$inc_day=(int)date("w",$d);
		}
	return [$toq,$juft];
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function days(){
		$model=Day::model()->findAll();
		return CHtml::listData($model,'id','name');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Day the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
