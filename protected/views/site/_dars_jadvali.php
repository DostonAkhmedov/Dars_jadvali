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
        <?php foreach ($dgsts[$day->id] as $dgst): ?>
            <?php if ($toq == true && $juft == false && $dgst->megalka == 1): ?>
                <tr align="center">
                    <td><?= $dgst->para; ?></td>
                    <td><?= $dgst->subject->name; ?></td>
                    <td><?= $dgst->teacher->fio; ?></td>
                    <td><?= $dgst->room; ?></td>
                </tr>
            <?php endif; ?>
            <?php if ($toq == false && $juft == true && $dgst->megalka == 2): ?>
                <tr align="center">
                    <td><?= $dgst->para; ?></td>
                    <td><?= $dgst->subject->name; ?></td>
                    <td><?= $dgst->teacher->fio; ?></td>
                    <td><?= $dgst->room; ?></td>
                </tr>
            <?php endif; ?>
            <?php if ($dgst->megalka == 0): ?>
                <tr align="center">
                    <td><?= $dgst->para; ?></td>
                    <td><?= $dgst->subject->name; ?></td>
                    <td><?= $dgst->teacher->fio; ?></td>
                    <td><?= $dgst->room; ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endforeach; ?>