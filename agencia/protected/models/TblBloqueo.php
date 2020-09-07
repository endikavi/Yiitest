<?php

/**
 * This is the model class for table "tbl_bloqueo".
 *
 * The followings are the available columns in table 'tbl_bloqueo':
 * @property string $id
 * @property integer $user_id
 * @property string $activity_id
 * @property integer $status
 * @property double $price
 * @property string $date
 *
 * The followings are the available model relations:
 * @property TblActividad $tblActividad
 * @property TblUser $user
 * @property TblReserva[] $tblReservas
 */
class TblBloqueo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_bloqueo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, activity_id, status, price, date', 'required'),
			array('user_id, status', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, activity_id, status, price, date', 'safe', 'on'=>'search'),
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
			'tblActividad' => array(self::HAS_ONE, 'TblActividad', 'id'),
			'user' => array(self::BELONGS_TO, 'TblUser', 'user_id'),
			'tblReservas' => array(self::HAS_MANY, 'TblReserva', 'bloqueo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'activity_id' => 'Activity',
			'status' => 'Status',
			'price' => 'Price',
			'date' => 'Date',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('activity_id',$this->activity_id,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('price',$this->price);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblBloqueo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
