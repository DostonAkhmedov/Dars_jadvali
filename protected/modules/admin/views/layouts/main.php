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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        $(function () {

            $("#text-one").change(function () {
                $("#text-two").load("textdata/" + $(this).val() + ".txt");
            });

            $("#json-one").change(function () {

                var $dropdown = $(this);

                $.getJSON("jsondata/data.json", function (data) {

                    var key = $dropdown.val();
                    var vals = [];

                    switch (key) {
                        case 'beverages':
                            vals = data.beverages.split(",");
                            break;
                        case 'snacks':
                            vals = data.snacks.split(",");
                            break;
                        case 'base':
                            vals = ['Please choose from above'];
                    }

                    var $jsontwo = $("#json-two");
                    $jsontwo.empty();
                    $.each(vals, function (index, value) {
                        $jsontwo.append("<option>" + value + "</option>");
                    });

                });
            });

        });
    </script>


    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/lib/css/main.css"/>

    <script type="text/javascript" language="JavaScript">
        sel2 = new Array(0, 1, 4, 2, 3);
    </script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/jquery.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/bootstrap.min.js"></script>

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
    <br/>
    <hr>

    <h1>Tanlang</h1>

    <select id="text-one">
        <option selected value="base">Kompyuter injineringi</option>
        <option value="beverages">Xizmat ko`rsatish texnikasi va texnologiyasi</option>
        <option value="snacks">Telekommunikatsiya</option>
    </select>

    <br/>

    <select id="text-two">
        <option>Please choose from above</option>
    </select>


    <hr>
    Tanlang</hr>
    <br>
    <br>
    <br>

    <form method="POST" action="">
        <table width="515">
            <tr>
                <td width="233"></td>
                <td width="268"></td>
            </tr>
            <tr>
                <td width="233"></td>
                <td width="268"></td>
            </tr>
            <tr>
                <td width="233">Yo'nalish<br>
                    <select size="1" name="D1" onchange="this.form.D2.selectedIndex=sel2[this.selectedIndex];">

                        <option selected>tanlang</option>
                        <option>Kompyuter injineringi</option>
                        <option>Xizmat ko'rsatish texnikasi va texnologiyasi</option>
                        <option>Telekommunikatsiya</option>
                        <option>Kasb ta'limi</option>
                    </select></td>

                <td width="268"></td>
            </tr>

            <tr>
                <td width="233">
                    <hr>
                    Guruhlar<br>
                    <select size="1" name="D2" disabled>
                        <option selected>-</option>
                        <option>912-12</option>
                        <option>931-12</option>
                        <option>921-12</option>
                        <option>941-12</option>
                    </select></td>
                <td width="268"></td>
            </tr>
    </form>
    </table>
    <br>

    Bu yerda mavjud emas !!!
    <br><br>
    <!--    <div class="dropdown">-->
    <!--        <div>-->
    <!--            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"-->
    <!--                    aria-expanded="true">                Yo'nalish-->
    <!--                <span class="caret"></span>-->
    <!--            </button>-->
    <!--            <ul class="dropdown-menu" role="menu" area-labelledby="dropdownMenu1">-->
    <!--                <li  role="presentation" value="ki" ><a role="menuitem" tabindex="1" href="#1" data-toggle="tab">Kompyuter Injiniring</a>-->
    <!--                </li>-->
    <!---->
    <!--                <li role="presentation"><a role="menuitem" tabindex="1" href="#2" data-toggle="tab">Dasturiy Injiniring</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="2" href="#3" data-toggle="tab">Telekommunikatsiya</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="3" href="#4" data-toggle="tab">Kasbiy ta'lim</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--        <div class="tab-pane fade active in" id="1">-->
    <!--            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"-->
    <!--                    aria-expanded="true">-->
    <!--                Guruh-->
    <!--                <span class="caret"></span>-->
    <!--            </button>-->
    <!--            <ul class="dropdown-menu" role="menu" area-labelledby="dropdownMenu2" id="ki">-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">911-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">912-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">913-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">914-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">941-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">942-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">911-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">912-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">913-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">914-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">911-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">912-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">913-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">914-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">911-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">912-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">913-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">914-15</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--        <div class="tab-pane fade" id="2">-->
    <!--            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown"-->
    <!--                    aria-expanded="true">-->
    <!--                Guruh-->
    <!--                <span class="caret"></span>-->
    <!--            </button>-->
    <!--            <ul class="dropdown-menu" role="menu" area-labelledby="dropdownMenu3">-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">941-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">942-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">941-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">942-15</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--        <div class="tab-pane fade" id="3">-->
    <!--            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown"-->
    <!--                    aria-expanded="true">-->
    <!--                Guruh-->
    <!--                <span class="caret"></span>-->
    <!--            </button>-->
    <!--            <ul class="dropdown-menu" role="menu" area-labelledby="dropdownMenu4">-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">931-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">932-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">931-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">932-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">931-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">932-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">931-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">932-15</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--        <div class="tab-pane fade" id="4">-->
    <!--            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown"-->
    <!--                    aria-expanded="true">-->
    <!--                Guruh-->
    <!--                <span class="caret"></span>-->
    <!--            </button>-->
    <!--            <ul class="dropdown-menu" role="menu" area-labelledby="dropdownMenu5">-->
    <!--        s        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">921-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">922-12</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">921-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">922-13</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">921-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">922-14</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">921-15</a></li>-->
    <!--                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">922-15</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <div>
        <button class="btn btn-success" type="button">
            Ko'rsatish
        </button>
    </div>

    <div class="panel-body" style="margin-bottom: 400px">
        <div class="navtabs">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab"><i class="fa fa-file-text-o"></i> Kompyuter Injiniring
                    </a>
                </li>
                <li><a href="#2" data-toggle="tab"><i class="fa fa-file-text-o"></i> Dasturiy Injiniring</a></li>
                <li><a href="#3" data-toggle="tab"><i class="fa fa-file-text-o"></i> Telekommunikatsiya
                        texnologiyalari</a>
                </li>
                <li><a href="#4" data-toggle="tab"><i class="fa fa-file-text-o"></i> Kasbiy ta'lim</a></li>
            </ul>

            <br>

            <div class="tab-content">

                <div class="tab-pane fade active in" id="1">

                    <select class="form-control">
                        <option>Guruh</option>
                        <option value="1">911-12</option>
                        <option value="2">912-12</option>
                        <option value="3">913-12</option>
                        <option value="4">914-12</option>
                        <option value="5">911-13</option>
                        <option value="6">912-13</option>
                        <option value="7">913-13</option>
                        <option value="8">914-13</option>
                        <option value="9">911-14</option>
                        <option value="10">912-14</option>
                        <option value="11">913-14</option>
                        <option value="12">914-14</option>
                        <option value="13">911-15</option>
                        <option value="14">912-15</option>
                        <option value="15">913-15</option>
                        <option value="16">914-15</option>
                    </select>

                </div>

                <div class="tab-pane fade " id="2">
                    <select class="form-control">
                        <option>Guruh</option>
                        <option value="1">941-12</option>
                        <option value="2">942-12</option>
                        <option value="3">941-13</option>
                        <option value="4">942-13</option>
                        <option value="5">941-14</option>
                        <option value="6">942-14</option>
                        <option value="7">941-15</option>
                        <option value="8">942-15</option>
                    </select>

                </div>

                <div class="tab-pane fade" id="3">
                    <select class="form-control">
                        <option>Guruh</option>
                        <option value="1">931-12</option>
                        <option value="2">932-12</option>
                        <option value="3">931-13</option>
                        <option value="4">932-13</option>
                        <option value="5">931-14</option>
                        <option value="6">932-14</option>
                        <option value="7">931-15</option>
                        <option value="8">932-15</option>
                    </select>
                </div>

                <div class="tab-pane fade " id="4">
                    <select class="form-control">
                        <option>Guruh</option>
                        <option value="1">921-12</option>
                        <option value="2">922-12</option>
                        <option value="3">921-13</option>
                        <option value="4">922-13</option>
                        <option value="5">921-14</option>
                        <option value="6">922-14</option>
                        <option value="7">921-15</option>
                        <option value="8">922-15</option>
                    </select>
                </div>

            </div>
        </div>

    </div>

    <div class="clear"></div>

    <!-- footer -->

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
</div>
<!-- page -->

</body>
</html>
