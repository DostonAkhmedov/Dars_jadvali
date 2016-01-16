<?php
/**
 * Created by PhpStorm.
 * User: Doston
 * Date: 15.01.2016
 * Time: 1:04
 */
class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($user = $this->getModel()){
            // в таблице User есть поле role
            return $user->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = User::model()->findByPk($this->id, array('select' => 'role'));
        }
        return $this->_model;
    }
}