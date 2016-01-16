<?php
/* @var $this SiteController */
/* @var $directions Direction */

$this->pageTitle = Yii::app()->name;
?>

<div class="panel-body">
    <div class="dropdown">
        <?php echo CHtml::dropdownList('department', '', $directions, array(
            'ajax' => array(
                'type' => 'get',
                'url' => CController::createUrl('site/getGroups'),
                'update' => '#groups',
                'data' => 'js:$("#department").val()'
            )
        )); ?>
        <br/>
        <br/>
        <?php echo CHtml::dropdownList('groups', '', array()); ?>
        <?php echo CHtml::button('OK', array(
            'ajax' => array(
                'type' => 'get',
                'url' => CController::createUrl('site/darsJadvali'),
                'update' => '#dars_jadvali',
                'data' => 'js:$("#groups").val()'
            )
        )); ?>
        <br/>

    </div>
    <br/>
    <br/>
    <div id="dars_jadvali">

    </div>
</div>