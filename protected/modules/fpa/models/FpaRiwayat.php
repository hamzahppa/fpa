<?php

/**
 * This is the model class for table "fpa_riwayat".
 *
 * The followings are the available columns in table 'fpa_riwayat':
 * @property integer $id_riwayat
 * @property double $loc
 * @property double $fp
 * @property string $update_date
 * @property integer $id_fpa
 *
 * The followings are the available model relations:
 * @property FpaFpa $idFpa
 */
class FpaRiwayat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_riwayat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('loc, fp, update_date, id_fpa', 'required'),
			array('id_fpa', 'numerical', 'integerOnly'=>true),
			array('loc, fp', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat, loc, fp, update_date, id_fpa', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat' => 'Id Riwayat',
			'loc' => 'Loc',
			'fp' => 'Fp',
			'update_date' => 'Update Date',
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

		$criteria->compare('id_riwayat',$this->id_riwayat);
		$criteria->compare('loc',$this->loc);
		$criteria->compare('fp',$this->fp);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('id_fpa',$this->id_fpa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaRiwayat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
