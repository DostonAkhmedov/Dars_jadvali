<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <!--[if lt IE 8]>

    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

    <link rel='stylesheet' href='css/style.css'>

    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/main.css"/>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jquery.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/bootstrap.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<div class="container" id="page">

    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div>
    <!-- header -->

    <div id="mainmenu">
        <?php $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'Foydalanuvchi', 'url' => array('user/index')),
                array('label' => 'Fanlar', 'url' => array('subject/index')),
                array('label' => 'O\'qituvchi', 'url' => array('teacher/index')),
                array('label' => 'Fan O\'qituvchisi', 'url' => array('subjectTeacher/index')),
                array('label' => 'Talaba', 'url' => array('student/index')),
                array('label' => 'Guruh', 'url' => array('group/index')),
                array('label' => 'Fakultet', 'url' => array('faculty/index')),
                array('label' => 'Yo\'nalish', 'url' => array('direction/index')),
                array('label' => 'Kafedra', 'url' => array('department/index')),
                array('label' => 'Kun', 'url' => array('day/index')),
                array('label' => 'Home', 'url' => array('/site/index')),
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        )); ?>
    </div>
    <!-- mainmenu -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>

    <div class="clear"></div>


</div>

<div class="clear"></div>

<!-- footer -->

<div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
    All Rights Reserved.<br/>
    <?php echo Yii::powered(); ?>
</div>
<!-- page -->

</body>
</html>
