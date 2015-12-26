<?php
/* @var $this SiteController */
/* @var $directions Direction */

$this->pageTitle = Yii::app()->name;
?>

<div class="panel-body">
    <div class="">
        <?php echo CHtml::dropdownList('department','',$directions,array(
            'ajax'=>array(
                'type'=>'get',
                'url'=>CController::createUrl('site/getGroups'),
                'update'=>'#groups',
                'data'=>'js:$("#department").val()'
            )
        )); ?>
        <br>
        <br>
        <?php echo CHtml::dropdownList('groups','',array());?>
        <br>

    </div>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr class="label-primary">
            <th>para</th>
            <th>dars</th>
            <th>xona</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>1</td>
            <td>kshcs</td>
            <td>311</td>
        </tr>
        <tr>
            <td>2</td>
            <td>xdvn</td>
            <td>109</td>
        </tr>
        </tbody>
    </table>
</div>