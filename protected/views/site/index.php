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
        <br/>

    </div>
    <br/>
    <br/>
    <?php foreach ($days as $day): ?>
        <br/>
        <h1 class="text-center" <?php if ($day->id == date("w")) echo ' style="color: #f35129;"' ?>><?= $day->name ?></h1>
        <table class="table table-bordered">
            <thead>
            <tr <?php if ($day->id == date("w")) echo ' style="background-color: #ff9a93;"'; else echo 'style="background: #d5e5e3;
"' ?> class="label-primary">
                <th>para</th>
                <th>dars</th>
                <th>o'qituvchi</th>
                <th>xona</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>kshcs</td>
                <td>kshcs</td>
                <td>311</td>
            </tr>
            <tr>
                <td>2</td>
                <td>xdvn</td>
                <td>xdvn</td>
                <td>109</td>
            </tr>
            <tr>
                <td>3</td>
                <td>xdvn</td>
                <td>xdvn</td>
                <td>109</td>
            </tr>
            <tr>
                <td>4</td>
                <td>xdvn</td>
                <td>xdvn</td>
                <td>109</td>
            </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>