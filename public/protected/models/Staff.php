<?php
class Staff extends CActiveRecord
{
    public $uploadFile;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{staff}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('s_user_id', 'numerical', 'integerOnly'=>true),
			array('s_department_id', 'length', 'max'=>10),
			array('s_name, s_duty, s_tel', 'length', 'max'=>45),
			array('s_location', 'length', 'max'=>500),
			array('s_desc', 'length', 'max'=>5000),
// 			array('s_creationDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('s_id, s_user_id, s_department_id, s_name, s_avatar, s_duty, s_location, s_tel, s_desc, s_creationDate, s_creationUser_id', 'safe', 'on'=>'search'),
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
			'sDepartment' => array(self::BELONGS_TO, 'Department', 's_department_id'),
			'sUser' => array(self::BELONGS_TO, 'User', 's_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			's_id' => 'ID',
			's_user_id' => '用户ID',
			's_department_id' => '所属部门',
			's_name' => '姓名',
			's_avatar' => '照片',
			's_duty' => '职务',
			's_location' => '所在地',
			's_tel' => '联系方式',
			's_desc' => '简介',
			's_creationDate' => 'S Creation Date',
			's_creationUser_id' => 'S Creation User',
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

		$criteria->compare('s_id',$this->s_id,true);
		$criteria->compare('s_user_id',$this->s_user_id);
		$criteria->compare('s_department_id',$this->s_department_id,true);
		$criteria->compare('s_name',$this->s_name,true);
		$criteria->compare('s_avatar',$this->s_avatar,true);
		$criteria->compare('s_duty',$this->s_duty,true);
		$criteria->compare('s_location',$this->s_location,true);
		$criteria->compare('s_tel',$this->s_tel,true);
		$criteria->compare('s_desc',$this->s_desc,true);
		$criteria->compare('s_creationDate',$this->s_creationDate,true);
		$criteria->compare('s_creationUser_id',$this->s_creationUser_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
						'sort'=>array(
                'defaultOrder'=>'s_id DESC',
            ),
					));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staff the static model class
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
	            $this->s_creationUser_id = Yii::app()->user->id;
	            $this->s_creationDate = EED::f();
	        }
	        
	        //check for s_avatar
            $avatarFileObj = array();
            $avatarFileObj['size'] = 0;
            if (isset($this->uploadFile['Staff']['size']['s_avatar'])) {
                $avatarFileObj['size'] = $this->uploadFile['Staff']['size']['s_avatar'];
            }
            if (isset($this->uploadFile['Staff']['type']['s_avatar'])) {
                $avatarFileObj['type'] = $this->uploadFile['Staff']['type']['s_avatar'];
            }
            if (isset($this->uploadFile['Staff']['tmp_name']['s_avatar'])) {
                $avatarFileObj['tmp_name'] = $this->uploadFile['Staff']['tmp_name']['s_avatar'];
            }
	        if ($avatarFileObj['size'] > 0) {
	            //have avatar upload do file upload and save to model
	            
	            //old avatar path for delete
	            $oldAvatar = $this->s_avatar;
	            
	            $this->s_avatar = EEH::moveUploadFile($avatarFileObj, Yii::app()->params['uploadPathStaffImage']);
	            
	            if ($this->s_avatar != '') {
	                //remove old avatar file
    	            unlink(Yii::app()->params['uploadPathStaffImage'].$oldAvatar);
	            }else{
	                //save old avatar back if upload fail, this is file level fail so we don't need show any message
    	            $this->s_avatar = $oldAvatar ;
	            }
	            
	        }
	
	        return true;
	    }else{
	        return false;
	    }
	}	
	
}
