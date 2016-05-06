<?php

/**
 * This is the model class for table "fpa_fpa".
 *
 * The followings are the available columns in table 'fpa_fpa':
 * @property integer $id_fpa
 * @property string $nama_fpa
 * @property double $tca
 * @property double $ufp
 * @property double $fp
 * @property double $loc
 * @property string $deskripsi
 *
 * The followings are the available model relations:
 * @property FpaFp[] $fpaFps
 * @property FpaTdi[] $fpaTdis
 */
class FpaFpa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fpa_fpa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_fpa', 'required'),
			array('tca, ufp, fp, loc', 'numerical'),
			array('nama_fpa', 'length', 'max'=>255),
			array('deskripsi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_fpa, nama_fpa, tca, ufp, fp, loc, deskripsi', 'safe', 'on'=>'search'),
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
			'fpaFps' => array(self::HAS_MANY, 'FpaFp', 'id_fpa'),
			'fpaTdis' => array(self::HAS_MANY, 'FpaTdi', 'id_fpa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fpa' => 'Id Fpa',
			'nama_fpa' => 'Nama Fpa',
			'tca' => 'Tca',
			'ufp' => 'Ufp',
			'fp' => 'Fp',
			'loc' => 'Loc',
			'deskripsi' => 'Deskripsi',
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

		$criteria->compare('id_fpa',$this->id_fpa);
		$criteria->compare('nama_fpa',$this->nama_fpa,true);
		$criteria->compare('tca',$this->tca);
		$criteria->compare('ufp',$this->ufp);
		$criteria->compare('fp',$this->fp);
		$criteria->compare('loc',$this->loc);
		$criteria->compare('deskripsi',$this->deskripsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FpaFpa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
