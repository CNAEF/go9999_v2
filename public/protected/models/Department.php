<?php
class Department extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{department}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('d_title', 'required'),
			array('d_title', 'length', 'max'=>45),
			array('d_desc', 'length', 'max'=>500),
			array('d_isShown', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('d_id, d_title, d_desc, d_creationDate, d_creationUser_id', 'safe', 'on'=>'search'),
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
			'staff' => array(self::HAS_MANY, 'Staff', 's_department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'd_id' => 'D',
			'd_title' => '名称',
			'd_desc' => '描述',
			'd_isShown' => '是否显示',
			'd_creationDate' => '添加时间',
			'd_creationUser_id' => '添加用户',
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

		$criteria->compare('d_id',$this->d_id,true);
		$criteria->compare('d_title',$this->d_title,true);
		$criteria->compare('d_desc',$this->d_desc,true);
		$criteria->compare('d_creationDate',$this->d_creationDate,true);
		$criteria->compare('d_creationUser_id',$this->d_creationUser_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
						'sort'=>array(
                'defaultOrder'=>'d_id DESC',
            ),
					));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Department the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * auto save creationUser_id and creationDate
	 */
	public function beforeSave(){
	    if (parent::beforeSave()) {
	         
	        if ($this->isNewRecord) {
	            $this->d_creationUser_id = Yii::app()->user->id;
	            $this->d_creationDate = EED::f();
	        }
	         
	        return true;
	    }else{
	        return false;
	    }
	}
	
	/**
	 * load department list, can use shownControl to filter data
	 * @param string $shownControl // all - all department, 0 - not show department, 1 - show department
	 */
	public static function loadDepartmentList($shownControl = 'all') {
	    $criteria = new CDbCriteria();
	    
	    if ($shownControl != 'all') {
	        $criteria->addCondition(' d_isShown = :showControl ');
	        $criteria->params[':showControl'] = (int)$shownControl;
	    }
	    
	    $departs = self::model()->findAll($criteria);
	    
	    return CHtml::listData($departs, 'd_id', 'd_title');
	    
	}
	
}
