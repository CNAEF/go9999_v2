<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_username;
    private $_nickname;
    private $_email;
    public function authenticate()
    {
        if (strpos($this->username, '@') === false)
            $record=User::model()->findByAttributes(array('username'=>$this->username));
        else
            $record=User::model()->findByAttributes(array('email'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
            $this->_email=$record->email;
            $this->_username=$record->username;
            $this->_nickname=$record->nickname;
            //$this->setState('title', $record->title);
            $this->errorCode=self::ERROR_NONE;
            // 更新 lastip
            $record->last_ip = $_SERVER['REMOTE_ADDR'];
            $record->save();

        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_nickname ? $this->_nickname : ($this->_username ? $this->_username : $this->_email);
    }
}