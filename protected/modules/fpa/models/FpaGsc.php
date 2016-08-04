<?php

/**
 * This is the model class for table "fpa_gsc".
 *
 * The followings are the available columns in table 'fpa_gsc':
 * @property integer $id_gsc
 * @property string $gsc
 * @property string $deskripsi
 * @property string $deskripsi_id
 * @property string $gsc_id
 *
 * The followings are the available model relations:
 * @property FpaGscpoint[] $fpaGscpoints
 * @property FpaTdi[] $fpaTdis
 */
class FpaGsc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_gsc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gsc, deskripsi, deskripsi_id, gsc_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_gsc, gsc, deskripsi, deskripsi_id, gsc_id', 'safe', 'on'=>'search'),
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
			'fpaGscpoints' => array(self::HAS_MANY, 'FpaGscpoint', 'id_gsc'),
			'fpaTdis' => array(self::HAS_MANY, 'FpaTdi', 'id_gsc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_gsc' => 'Id Gsc',
			'gsc' => 'Gsc',
			'deskripsi' => 'Deskripsi',
			'deskripsi_id' => 'Deskripsi',
			'gsc_id' => 'Gsc',
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

		$criteria->compare('id_gsc',$this->id_gsc);
		$criteria->compare('gsc',$this->gsc,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('deskripsi_id',$this->deskripsi_id,true);
		$criteria->compare('gsc_id',$this->gsc_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaGsc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
