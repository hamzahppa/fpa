<?php

/**
 * This is the model class for table "fpa_datafunction".
 *
 * The followings are the available columns in table 'fpa_datafunction':
 * @property integer $id_datafunction
 * @property string $DET
 * @property string $RET
 * @property string $FTR
 * @property integer $id_fp
 *
 * The followings are the available model relations:
 * @property FpaFp $idFp
 */
class FpaDatafunction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_datafunction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_fp', 'numerical', 'integerOnly'=>true),
			array('DET, RET, FTR', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_datafunction, DET, RET, FTR, id_fp', 'safe', 'on'=>'search'),
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
			'idFp' => array(self::BELONGS_TO, 'FpaFp', 'id_fp'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_datafunction' => 'Id Datafunction',
			'DET' => 'Det',
			'RET' => 'Ret',
			'FTR' => 'Ftr',
			'id_fp' => 'Id Fp',
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

		$criteria->compare('id_datafunction',$this->id_datafunction);
		$criteria->compare('DET',$this->DET,true);
		$criteria->compare('RET',$this->RET,true);
		$criteria->compare('FTR',$this->FTR,true);
		$criteria->compare('id_fp',$this->id_fp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaDatafunction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
