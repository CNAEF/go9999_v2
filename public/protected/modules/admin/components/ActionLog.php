<?php

/**
 * 操作日志Filter
 *
 * 所有的action执行成功都会记录到数据库
 */
class ActionLog extends CFilter
{
    protected function preFilter($filterChain)
    {
        $log = new Log;
        $log->uri    = $_SERVER['REQUEST_URI'];
        $log->ip     = $_SERVER['REMOTE_ADDR'];
        $log->data   = json_encode($_POST);
        $log->user_id = Yii::app()->user->getId();
        $log->created_at = time();
        $log->save();
        /*
        if ($_POST)
            var_dump($log);
        */
        // logic being applied before the action is executed
        return true; // false if the action should not be executed
    }

    protected function postFilter($filterChain)
    {
        // logic being applied after the action is executed
        return true;
    }
}
