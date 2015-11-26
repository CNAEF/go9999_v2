<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class OptionForm extends CFormModel
{
	/*
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;
	*/
	public $options;


	public $test1;
	public $test2;
	public $test3;
	public $test4;



	public function __construct($scenario='')
	{
		$this->options = Option::model()->findAll();
		foreach($this->options as $k => $v) {
			$this->{$v->key} = $v->value;
		}
		parent::__construct($scenario='');
	}

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			/*
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
			*/
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		$arr = array();
		foreach($this->options as $k => $v) {
			$arr[$v->key] = $v->name;
		}
		return $arr;
	}

	public function save($data)
	{
		foreach ($data as $key => $value) {
			$option = Option::model()->find('`key`=:key', array(':key'=>$key));
			if ($option) {
				$option->value = $value;
				$option->save();
			} else {
				exit("Error: Option {$option->key} not found!");
			}
		}
		return true;
	}
}
