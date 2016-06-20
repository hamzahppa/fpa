<?php

/**
 * This is the model class for table "fpa_tdi".
 *
 * The followings are the available columns in table 'fpa_tdi':
 * @property integer $id_tdi
 * @property integer $id_gsc
 * @property integer $value
 * @property integer $id_fpa
 *
 * The followings are the available model relations:
 * @property FpaFpa $idFpa
 * @property FpaGsc $idGsc
 */
class FpaTdi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_tdi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('value, id_fpa', 'required'),
			array('id_gsc, value, id_fpa', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tdi, id_gsc, value, id_fpa', 'safe', 'on'=>'search'),
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
			'idFpa' => array(self::BELONGS_TO, 'FpaFpa', 'id_fpa'),
			'idGsc' => array(self::BELONGS_TO, 'FpaGsc', 'id_gsc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tdi' => 'Id Tdi',
			'id_gsc' => 'Id Gsc',
			'value' => 'Value',
			'id_fpa' => 'Id Fpa',
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

		$criteria->compare('id_tdi',$this->id_tdi);
		$criteria->compare('id_gsc',$this->id_gsc);
		$criteria->compare('value',$this->value);
		$criteria->compare('id_fpa',$this->id_fpa);
		$criteria->order = 'id_gsc ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaTdi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
