<?php
class Volunteer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{volunteer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, sex, birthday, married, hometown_province, hometown_city, id_num, id_photo, user_photo, edu_level, edu_photo, edu_university, profession, work, phone, email, qq, cur_province, cur_city, cur_addr, post_code, family_title, family_name, family_contact, family_workplace, family_addr, predict_deadline, begin_date, cur_status, cur_income, info_from, Q1, Q2, Q3, Q4, verify_admin_id, verify_time, verify_status, time', 'required'),
			array('id, sex, birthday, _age, married, edu_level, post_code, begin_date, cur_status, user_status, verify_admin_id, verify_status', 'numerical', 'integerOnly'=>true),
			array('name, predict_deadline', 'length', 'max'=>50),
			array('hometown_province, hometown_city', 'length', 'max'=>40),
			array('id_num, phone, family_title, family_name, urgent_title, urgent_name', 'length', 'max'=>20),
			array('id_photo, user_photo, edu_photo, _edu_high_level, edu_university, profession, work, email, qq, cur_province, cur_city, cur_addr, family_contact, family_workplace, urgent_contact, info_from', 'length', 'max'=>100),
			array('_user_post_addr, family_addr, urgent_workplace', 'length', 'max'=>200),
			array('reason, remark', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, sex, birthday, _age, married, hometown_province, hometown_city, id_num, id_photo, user_photo, edu_level, edu_photo, _edu_high_level, edu_university, profession, special, work, work_experience, phone, email, qq, cur_province, cur_city, cur_addr, _user_post_addr, post_code, family_title, family_name, family_contact, family_workplace, family_addr, urgent_title, urgent_name, urgent_contact, urgent_workplace, is_disability, is_experience, predict_deadline, begin_date, cur_status, cur_income, info_from, Q1, Q2, Q3, Q4, _Q1, _Q2, _Q3, _Q4, _Q5, _Q6, _Q7, _Q8, _Q9, _Q10, _Q11, user_status, remark, reason,verify_admin_id, verify_time, verify_status, time', 'safe', 'on'=>'search'),
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
			'admin' => array(self::BELONGS_TO, 'User', 'verify_admin_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' 				=> 'ID',
			'name' 				=> '姓名',
			'sex' 				=> '性别',
			'birthday' 			=> '生日',
			'_age' 				=> '旧版年龄',
			'married' 			=> '婚姻状况',
			'hometown_province' => '省份',
			'hometown_city' 	=> '城市',
			'id_num' 			=> '身份证号',
			'id_photo' 			=> '身份证照片',
			'user_photo' 		=> '近照',
			'edu_level' 		=> '教育程度',
			'edu_photo' 		=> '毕业证',
			'_edu_high_level' 	=> '旧版教育程度',
			'edu_university' 	=> '大学',
			'profession' 		=> '职业',
			'special' 			=> '特殊技能',
			'work' 				=> '工作',
			'work_experience' 	=> '工作经验',
			'phone' 			=> '手机号码',
			'email' 			=> '电子邮箱',
			'qq' 				=> 'QQ/微信',
			'cur_province' 		=> '居住省份',
			'cur_city' 			=> '居住城市',
			'cur_addr' 			=> '当前地址',
			'_user_post_addr' 	=> '旧版邮寄地址',
			'post_code' 		=> '邮政编码',
			'family_title' 		=> '联系人称谓',
			'family_name' 		=> '联系人姓名',
			'family_contact' 	=> '联系人联系方式',
			'family_workplace' 	=> '联系人工作单位',
			'family_addr' 		=> '联系人地址',
			'urgent_title' 		=> '旧版联系人称谓',
			'urgent_name' 		=> '旧版联系人姓名',
			'urgent_contact' 	=> '旧版联系人联系方式',
			'urgent_workplace' 	=> '旧版联系人工作单位',
			'is_disability' 	=> '伤残病历',
			'is_experience' 	=> '支教经验',
			'predict_deadline' 	=> '支教期限',
			'begin_date' 		=> '开始支教时间',
			'cur_status' 		=> '现在的状态',
			'cur_income' 		=> '收入来源',
			'info_from' 		=> '消息来源',
			'Q1' 				=> '问题一',
			'Q2' 				=> '问题二',
			'Q3' 				=> '问题三',
			'Q4' 				=> '问题四',
			'_Q1' 				=> 'Q1',
			'_Q2' 				=> 'Q2',
			'_Q3' 				=> 'Q3',
			'_Q4' 				=> 'Q4',
			'_Q5' 				=> 'Q5',
			'_Q6' 				=> 'Q6',
			'_Q7' 				=> 'Q7',
			'_Q8' 				=> 'Q8',
			'_Q9' 				=> 'Q9',
			'_Q10' 				=> 'Q10',
			'_Q11' 				=> 'Q11',
			'user_status' 		=> '旧版用户状态',
			'reason' 			=> '拒绝原因',
			'remark' 			=> '备注',
			'verify_admin_id' 	=> '审核人',
			'verify_time' 		=> '审核时间',
			'verify_status' 	=> '审核状态',
			'time' 				=> '申请时间',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('_age',$this->_age);
		$criteria->compare('married',$this->married);
		$criteria->compare('hometown_province',$this->hometown_province,true);
		$criteria->compare('hometown_city',$this->hometown_city,true);
		$criteria->compare('id_num',$this->id_num,true);
		$criteria->compare('id_photo',$this->id_photo,true);
		$criteria->compare('user_photo',$this->user_photo,true);
		$criteria->compare('edu_level',$this->edu_level);
		$criteria->compare('edu_photo',$this->edu_photo,true);
		$criteria->compare('_edu_high_level',$this->_edu_high_level,true);
		$criteria->compare('edu_university',$this->edu_university,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('special',$this->special,true);
		$criteria->compare('work',$this->work,true);
		$criteria->compare('work_experience',$this->work_experience,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('cur_province',$this->cur_province,true);
		$criteria->compare('cur_city',$this->cur_city,true);
		$criteria->compare('cur_addr',$this->cur_addr,true);
		$criteria->compare('_user_post_addr',$this->_user_post_addr,true);
		$criteria->compare('post_code',$this->post_code);
		$criteria->compare('family_title',$this->family_title,true);
		$criteria->compare('family_name',$this->family_name,true);
		$criteria->compare('family_contact',$this->family_contact,true);
		$criteria->compare('family_workplace',$this->family_workplace,true);
		$criteria->compare('family_addr',$this->family_addr,true);
		$criteria->compare('urgent_title',$this->urgent_title,true);
		$criteria->compare('urgent_name',$this->urgent_name,true);
		$criteria->compare('urgent_contact',$this->urgent_contact,true);
		$criteria->compare('urgent_workplace',$this->urgent_workplace,true);
		$criteria->compare('is_disability',$this->is_disability,true);
		$criteria->compare('is_experience',$this->is_experience,true);
		$criteria->compare('predict_deadline',$this->predict_deadline,true);
		$criteria->compare('begin_date',$this->begin_date);
		$criteria->compare('cur_status',$this->cur_status);
		$criteria->compare('cur_income',$this->cur_income,true);
		$criteria->compare('info_from',$this->info_from,true);
		$criteria->compare('Q1',$this->Q1,true);
		$criteria->compare('Q2',$this->Q2,true);
		$criteria->compare('Q3',$this->Q3,true);
		$criteria->compare('Q4',$this->Q4,true);
		$criteria->compare('_Q1',$this->_Q1,true);
		$criteria->compare('_Q2',$this->_Q2,true);
		$criteria->compare('_Q3',$this->_Q3,true);
		$criteria->compare('_Q4',$this->_Q4,true);
		$criteria->compare('_Q5',$this->_Q5,true);
		$criteria->compare('_Q6',$this->_Q6,true);
		$criteria->compare('_Q7',$this->_Q7,true);
		$criteria->compare('_Q8',$this->_Q8,true);
		$criteria->compare('_Q9',$this->_Q9,true);
		$criteria->compare('_Q10',$this->_Q10,true);
		$criteria->compare('_Q11',$this->_Q11,true);
		$criteria->compare('user_status',$this->user_status);
		$criteria->compare('verify_admin_id',$this->verify_admin_id);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('verify_status',$this->verify_status);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
						'sort'=>array(
                'defaultOrder'=>'id DESC',
            ),
					));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Volunteer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getSex() {
		return $this->sex == 1 ? '男' : '女';
	}

	public function getMarried() {
		return $this->married == 1 ? '未婚' : '已婚';
	}

	public function getEduLevel() {
		switch ($this->edu_level) {
		case '1':
			return '高中';
		case '2':
			return '中专';
		case '3':
			return '技校';
		case '4':
			return '大专';
		case '5':
			return '本科';
		case '6':
			return '硕士';
		case '7':
			return '博士';
		}
	}

	public function getProfession() {
		switch ($this->profession) {
			case '无业':
			case '无':
			case '':
				return '暂无工作';
			default :
				return $this->profession;
		}
	}

	public function getVerifyStatus() {
		switch($this->verify_status) {
			case '1':
				return '未审核';
			case '2':
				return '已通过';
			case '3':
				return '已拒绝';
		}
	}

	public function getPredictDeadline() {
		switch ($this->predict_deadline) {
			case '1':
				return '一学期';
			case '2':
				return '一学年';
		}
	}

	public function getBeginDate() {
		switch ($this->begin_date) {
			case '1':
				return '秋季';
			case '2':
				return '春季';
		}
	}
	
}
