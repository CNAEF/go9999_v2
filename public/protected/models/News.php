<?php
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('n_title', 'length', 'max'=>200),
			array('n_content', 'length', 'max'=>21600),
			array('n_readCount, n_creationUser_id', 'length', 'max'=>10),
			array('n_creationDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('n_id, n_title, n_content, n_readCount, n_creationUser_id, n_creationDate', 'safe', 'on'=>'search'),
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
		    'nCreationUser'=>array(self::BELONGS_TO, 'User', 'n_creationUser_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'n_id' => 'N',
			'n_title' => '新闻标题',
			'n_content' => '新闻内容',
			'n_readCount' => '阅读次数',
			'n_creationUser_id' => '添加用户',
			'n_creationDate' => '添加日期',
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

		$criteria->compare('n_id',$this->n_id,true);
		$criteria->compare('n_title',$this->n_title,true);
		$criteria->compare('n_content',$this->n_content,true);
		$criteria->compare('n_readCount',$this->n_readCount,true);
		$criteria->compare('n_creationUser_id',$this->n_creationUser_id,true);
		$criteria->compare('n_creationDate',$this->n_creationDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
						'sort'=>array(
                'defaultOrder'=>'n_id DESC',
            ),
					));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave(){
	    if (parent::beforeSave()) {
	        
	        if ($this->isNewRecord) {
	            $this->n_creationUser_id = Yii::app()->user->id;
	            $this->n_creationDate = EED::f();
	        }
	        
	        return true;
	    }else{
	        return false;
	    }
	}
}
