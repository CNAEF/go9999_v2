<?php

/**
 * This is the model class for table "t_user".
 *
 * The followings are the available columns in table 't_user':
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $nickname
 * @property string $password
 * @property string $last_ip
 * @property integer $is_deleted
 * @property integer $created
 * @property integer $updated
 */
class User extends CActiveRecord
{
    public function getDbConnection() {

        return Yii::app()->db;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password', 'required'),
            array('email, username', 'unique'),
			array('is_deleted, created_at, updated_at', 'numerical', 'integerOnly'=>true),
			array('email, username, nickname, password, last_ip', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, username, nickname, is_deleted, created_at, updated_at', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => '登陆邮箱',
			'userame' => '用户名',
			'nickname' => '用户昵称',
			'password' => '登陆密码',
			'last_ip' => '最后登陆IP',
			'is_deleted' => '已删除',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('last_ip',$this->last_ip,true);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('created_at',strtotime($this->created_at));
		$criteria->compare('updated_at',strtotime($this->updated_at));

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'id DESC',
            )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    // 自动更新时间
    public function beforeSave()
    {
        $this->updated_at = time();
        if ($this->isNewRecord)
            $this->created_at = time();
        return true;
    }
}
