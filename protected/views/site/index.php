<?php
/* @var $this SiteController */
/* @var $directions Direction */

$this->pageTitle = Yii::app()->name;
?>

<div class="panel-body">
    <div class="">
        <?php $i = 0; ?>
        <ul class="">
            <?php foreach ($directions as $direction):
                $i++; ?>
                <?php if ($direction): ?>
                <li <?= ($i == 1) ? ' class="active"' : ""; ?>><a href="#<?= $direction->id ?>" data-toggle="tab"><i
                            class="fa fa-random"></i><?= $direction->name ?>
                    </a>
                </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <br>
        <?php $i = 0; ?>
        <div class="tab-content">
            <?php foreach ($directions as $direction): $i++; ?>
                <div <?= ($i == 1) ? ' class="tab-pane fade active in"' : ' class="tab-pane fade"' ?>
                    id="<?= $direction->id ?>">
                    <select class="form-control">
                        <option>Guruh</option>
                        <?php foreach ($direction->groups as $group): ?>
                            <?php if ($group): ?>
                                <option value="<?= $group->id ?>"><?= $group->name ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>