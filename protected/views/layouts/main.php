<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
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

<!--    <div id="header">-->
<!--        <div id="logo">--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</div>-->
<!--    </div>-->
    <!-- header -->
<div style="margin-top: 100px"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#example-navbar-collapse-6">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">Dars jadvali</a>
            </div>

            <div class="collapse navbar-collapse" id="example-navbar-collapse-6">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">Home</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact">Contact</a></li>
                    <?php if (Yii::app()->user->isGuest): ?>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Login</a></li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
                                Logout(<?php echo Yii::app()->user->name; ?>)
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="navbar-form navbar-right" role="search" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="Searching">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- mainmenu -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
