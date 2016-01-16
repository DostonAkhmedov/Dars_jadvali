<?php foreach ($days as $day): ?>
    <br/>
    <h1 class="text-center" <?php if ($day->id == date("w")) echo ' style="color: #f35129;"' ?>><?= $day->name ?></h1>
    <table class="table table-bordered">
        <thead>
        <tr <?php if ($day->id == date("w")) echo ' style="background-color: #ff9a93;"'; else echo ' style="background: #d5e5e3;
"' ?> class="label-primary">
            <th>para</th>
            <th>dars</th>
            <th>o'qituvchi</th>
            <th>xona</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $para = [];
        $subject = [];
        $teacher = [];
        $room = [];
        $k = 0;
        $inf = -111111;
        foreach ($dgsts[$day->id] as $dgst) {
            $k++;
            $para[$k] = $dgst->para;
            $subject[$k] = $dgst->subject->name;
            $teacher[$k] = $dgst->teacher->fio;
            $room[$k] = $dgst->room;
        }
        $para[$k + 1] = 0;
        $subject[$k + 1] = 0;
        $teacher[$k + 1] = 0;
        $room[$k + 1] = 0;
        ?>
        <?php for ($i = 1; $i <= $k; $i++): ?>
            <?php if($subject[$i]!=$inf):?>
            <tr align="center">
                <?php if ($para[$i] != $inf): ?>
                    <td <?php if ($para[$i] == $para[$i + 1]) {
                        echo ' rowspan="2"';
                        $para[$i + 1] = $inf;
                    }
                    ?>><span><?= $para[$i] ?></span></td>
                <?php endif; ?>
                <td>
                    <?= $subject[$i] ?>
                </td>
                <?php if ($para[$i] == $para[$i + 1] && $subject[$i] == $subject[$i + 1]): ?>
                    <td><?= $teacher[$i] . ", " . $teacher[$i+1]; ?></td>
                    <td><?= $room[$i] . "-" . $room[$i+1]; ?></td>
                    <?php $subject[$i + 1]=$inf ?>
                <?php endif; ?>
                <?php if (!($para[$i] == $para[$i + 1] && $subject[$i] == $subject[$i + 1])): ?>
                    <td><?= $teacher[$i]; ?></td>
                    <td><?= $room[$i]; ?></td>
                <?php endif; ?>
            </tr>
            <?php endif; ?>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endforeach; ?>