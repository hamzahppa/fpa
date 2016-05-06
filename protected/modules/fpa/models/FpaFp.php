<?php

/**
 * This is the model class for table "fpa_fp".
 *
 * The followings are the available columns in table 'fpa_fp':
 * @property integer $id_fp
 * @property string $nama_fp
 * @property string $tipe
 * @property string $bahasa
 * @property integer $DET
 * @property integer $RET
 * @property integer $FTR
 * @property integer $id_fpa
 * @property integer $weight
 *
 * The followings are the available model relations:
 * @property FpaDatafunction[] $fpaDatafunctions
 * @property FpaFpa $idFpa
 */
class FpaFp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_fp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_fp, tipe, id_fpa', 'required'),
			array('DET, RET, FTR, id_fpa, weight', 'numerical', 'integerOnly'=>true),
			array('nama_fp', 'length', 'max'=>255),
			array('tipe', 'length', 'max'=>3),
			array('bahasa', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_fp, nama_fp, tipe, bahasa, DET, RET, FTR, id_fpa, weight', 'safe', 'on'=>'search'),
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
			'fpaDatafunctions' => array(self::HAS_MANY, 'FpaDatafunction', 'id_fp'),
			'idFpa' => array(self::BELONGS_TO, 'FpaFpa', 'id_fpa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fp' => 'Id Fp',
			'nama_fp' => 'Nama Fp',
			'tipe' => 'Tipe',
			'bahasa' => 'Bahasa',
			'DET' => 'Det',
			'RET' => 'Ret',
			'FTR' => 'Ftr',
			'id_fpa' => 'Id Fpa',
			'weight' => 'Weight',
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

		$criteria->compare('id_fp',$this->id_fp);
		$criteria->compare('nama_fp',$this->nama_fp,true);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('bahasa',$this->bahasa,true);
		$criteria->compare('DET',$this->DET);
		$criteria->compare('RET',$this->RET);
		$criteria->compare('FTR',$this->FTR);
		$criteria->compare('id_fpa',$this->id_fpa);
		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaFp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
