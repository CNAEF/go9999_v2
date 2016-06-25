<?php
class VolunteerW extends CActiveRecord
{
    public $verifyStatusText = '';
    public $verifyStatusMessage = '';

    public $verify_status = 1;
    
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
            array('name, sex, birthday, married, hometown_province, hometown_city, id_num, id_photo, user_photo, edu_level, edu_photo, edu_university, profession, work, phone, email, qq, cur_province, cur_city, cur_addr, post_code, family_title, family_name, family_contact, family_workplace, family_addr, predict_deadline, begin_date, cur_status, cur_income, info_from, Q1, Q2, Q3, Q4', 'required', 'message'=>'不可为空'),
            array('id, sex, birthday, _age, married, edu_level, post_code, begin_date, cur_status, user_status, verify_admin_id, verify_status', 'numerical', 'integerOnly'=>true, 'message'=>'填写错误'),
            array('name, predict_deadline', 'length', 'max'=>50, 'message'=>'最大50个字'),
            array('hometown_province, hometown_city', 'length', 'max'=>40, 'message'=>'最大40个字'),
            array('id_num, phone, family_title, family_name, urgent_title, urgent_name', 'length', 'max'=>20, 'message'=>'最大20个字'),
            array('id_photo, user_photo, edu_photo, _edu_high_level, edu_university, profession, work, email, qq, cur_province, cur_city, cur_addr, family_contact, family_workplace, urgent_contact, info_from', 'length', 'max'=>100, 'message'=>'最大100个字'),
            array('_user_post_addr, family_addr, urgent_workplace, work_experience', 'length', 'max'=>200, 'message'=>'最大200个字'),
            array('email', 'email', 'message'=>'请填写正确Email'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, sex, birthday, _age, married, hometown_province, hometown_city, id_num, id_photo, user_photo, edu_level, edu_photo, _edu_high_level, edu_university, profession, special, work, work_experience, phone, email, qq, cur_province, cur_city, cur_addr, _user_post_addr, post_code, family_title, family_name, family_contact, family_workplace, family_addr, urgent_title, urgent_name, urgent_contact, urgent_workplace, is_disability, is_experience, predict_deadline, begin_date, cur_status, cur_income, info_from, Q1, Q2, Q3, Q4, _Q1, _Q2, _Q3, _Q4, _Q5, _Q6, _Q7, _Q8, _Q9, _Q10, _Q11, user_status, verify_admin_id, verify_time, verify_status, time', 'safe', 'on'=>'search'),
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
            'name' => 'Name',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            '_age' => 'Age',
            'married' => 'Married',
            'hometown_province' => 'Hometown Province',
            'hometown_city' => 'Hometown City',
            'id_num' => 'Id Num',
            'id_photo' => 'Id Photo',
            'user_photo' => 'User Photo',
            'edu_level' => 'Edu Level',
            'edu_photo' => 'Edu Photo',
            '_edu_high_level' => 'Edu High Level',
            'edu_university' => 'Edu University',
            'profession' => 'Profession',
            'special' => 'Special',
            'work' => 'Work',
            'work_experience' => 'Work Experience',
            'phone' => 'Phone',
            'email' => 'Email',
            'qq' => 'Qq',
            'cur_province' => 'Cur Province',
            'cur_city' => 'Cur City',
            'cur_addr' => 'Cur Addr',
            '_user_post_addr' => 'User Post Addr',
            'post_code' => 'Post Code',
            'family_title' => 'Family Title',
            'family_name' => 'Family Name',
            'family_contact' => 'Family Contact',
            'family_workplace' => 'Family Workplace',
            'family_addr' => 'Family Addr',
            'urgent_title' => 'Urgent Title',
            'urgent_name' => 'Urgent Name',
            'urgent_contact' => 'Urgent Contact',
            'urgent_workplace' => 'Urgent Workplace',
            'is_disability' => 'Is Disability',
            'is_experience' => 'Is Experience',
            'predict_deadline' => 'Predict Deadline',
            'begin_date' => 'Begin Date',
            'cur_status' => 'Cur Status',
            'cur_income' => 'Cur Income',
            'info_from' => 'Info From',
            'Q1' => 'Q1',
            'Q2' => 'Q2',
            'Q3' => 'Q3',
            'Q4' => 'Q4',
            '_Q1' => 'Q1',
            '_Q2' => 'Q2',
            '_Q3' => 'Q3',
            '_Q4' => 'Q4',
            '_Q5' => 'Q5',
            '_Q6' => 'Q6',
            '_Q7' => 'Q7',
            '_Q8' => 'Q8',
            '_Q9' => 'Q9',
            '_Q10' => 'Q10',
            '_Q11' => 'Q11',
            'user_status' => 'User Status',
            'verify_admin_id' => 'Verify Admin',
            'verify_time' => 'Verify Time',
            'verify_status' => 'Verify Status',
            'time' => 'Time',
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
     * @return VolunteerW the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function beforeSave() {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->time = EED::f();
            }
            return true;    
        }else{
            return false;
        };
    }
    
}