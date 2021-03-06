<?php

/**
 * This is the model class for table "fpa_gscpoint".
 *
 * The followings are the available columns in table 'fpa_gscpoint':
 * @property integer $id_point
 * @property string $point
 * @property string $point_id
 * @property integer $id_gsc
 * @property integer $value
 *
 * The followings are the available model relations:
 * @property FpaGsc $idGsc
 */
class FpaGscpoint extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_gscpoint';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('point, value', 'required'),
			array('id_gsc, value', 'numerical', 'integerOnly'=>true),
			array('point_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_point, point, point_id, id_gsc, value', 'safe', 'on'=>'search'),
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
			'idGsc' => array(self::BELONGS_TO, 'FpaGsc', 'id_gsc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_point' => 'Id Point',
			'point' => 'Point',
			'point_id' => 'Point',
			'id_gsc' => 'Id Gsc',
			'value' => 'Value',
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

		$criteria->compare('id_point',$this->id_point);
		$criteria->compare('point',$this->point,true);
		$criteria->compare('point_id',$this->point_id,true);
		$criteria->compare('id_gsc',$this->id_gsc);
		$criteria->compare('value',$this->value);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaGscpoint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
