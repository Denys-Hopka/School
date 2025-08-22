<!DOCTYPE html>
<html>
<head>
    <title>Class management system</title>
</head>
<body>
<div class="data_tables">
<h6 class="class_choice_h">Wählen Sie eine Klasse</h6>
<table>
    <tbody>
        <tr>
            <td><a href="?class=<?= $data['classes'][0] ?>"><?= $data['classes'][0] ?></td>
            <td><a href="?class=<?= $data['classes'][1] ?>"><?= $data['classes'][1] ?></td>
            <td><a href="?class=<?= $data['classes'][2] ?>"><?= $data['classes'][2] ?></td>
            <td><a href="?class=<?= $data['classes'][3] ?>"><?= $data['classes'][3] ?></td>
            <td><a href="?class=<?= $data['classes'][4] ?>"><?= $data['classes'][4] ?></td>
            <td><a href="?class=<?= $data['classes'][5] ?>"><?= $data['classes'][5] ?></td>
            <td><a href="?class=<?= $data['classes'][6] ?>"><?= $data['classes'][6] ?></td>
        </tr>
    </tbody>
</table>




<div class="members_tables">
    <table>
        <tbody>
            <tr>
                <th class="name">Name</th>
                <th class="surname">Nachname</th>
                <th class="representative">Schüler-<br>sprecher
            </th>
            </tr>
                <td><?= $data['students'][0]['firstName'] ?></td>
                <td><?= $data['students'][0]['lastName'] ?></td>
                <td><?= $data['students'][0]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][1]['firstName'] ?></td>
                <td><?= $data['students'][1]['lastName'] ?></td>
                <td><?= $data['students'][1]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][2]['firstName'] ?></td>
                <td><?= $data['students'][2]['lastName'] ?></td>
                <td><?= $data['students'][2]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][3]['firstName'] ?></td>
                <td><?= $data['students'][3]['lastName'] ?></td>
                <td><?= $data['students'][3]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][4]['firstName'] ?></td>
                <td><?= $data['students'][4]['lastName'] ?></td>
                <td><?= $data['students'][4]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][5]['firstName'] ?></td>
                <td><?= $data['students'][5]['lastName'] ?></td>
                <td><?= $data['students'][5]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][6]['firstName'] ?></td>
                <td><?= $data['students'][6]['lastName'] ?></td>
                <td><?= $data['students'][6]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][7]['firstName'] ?></td>
                <td><?= $data['students'][7]['lastName'] ?></td>
                <td><?= $data['students'][7]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][8]['firstName'] ?></td>
                <td><?= $data['students'][8]['lastName'] ?></td>
                <td><?= $data['students'][8]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][9]['firstName'] ?></td>
                <td><?= $data['students'][9]['lastName'] ?></td>
                <td><?= $data['students'][9]['isStudentRepresentative'] ?></td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <th class="name">Name</th>
                <th class="surname">Nachname</th>
                <th class="representative">Schüler-<br>sprecher
            </th>
            </tr>
                <td><?= $data['students'][10]['firstName'] ?></td>
                <td><?= $data['students'][10]['lastName'] ?></td>
                <td><?= $data['students'][10]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][11]['firstName'] ?></td>
                <td><?= $data['students'][11]['lastName'] ?></td>
                <td><?= $data['students'][11]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][12]['firstName'] ?></td>
                <td><?= $data['students'][12]['lastName'] ?></td>
                <td><?= $data['students'][12]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][13]['firstName'] ?></td>
                <td><?= $data['students'][13]['lastName'] ?></td>
                <td><?= $data['students'][13]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][14]['firstName'] ?></td>
                <td><?= $data['students'][14]['lastName'] ?></td>
                <td><?= $data['students'][14]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][15]['firstName'] ?></td>
                <td><?= $data['students'][15]['lastName'] ?></td>
                <td><?= $data['students'][15]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][16]['firstName'] ?></td>
                <td><?= $data['students'][16]['lastName'] ?></td>
                <td><?= $data['students'][16]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][17]['firstName'] ?></td>
                <td><?= $data['students'][17]['lastName'] ?></td>
                <td><?= $data['students'][17]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][18]['firstName'] ?></td>
                <td><?= $data['students'][18]['lastName'] ?></td>
                <td><?= $data['students'][18]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][19]['firstName'] ?></td>
                <td><?= $data['students'][19]['lastName'] ?></td>
                <td><?= $data['students'][19]['isStudentRepresentative'] ?></td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <th class="name">Name</th>
                <th class="surname">Nachname</th>
                <th class="representative">Schüler-<br>sprecher
            </th>
            </tr>
                <td><?= $data['students'][20]['firstName'] ?></td>
                <td><?= $data['students'][20]['lastName'] ?></td>
                <td><?= $data['students'][20]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][21]['firstName'] ?></td>
                <td><?= $data['students'][21]['lastName'] ?></td>
                <td><?= $data['students'][21]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][22]['firstName'] ?></td>
                <td><?= $data['students'][22]['lastName'] ?></td>
                <td><?= $data['students'][22]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][23]['firstName'] ?></td>
                <td><?= $data['students'][23]['lastName'] ?></td>
                <td><?= $data['students'][23]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][24]['firstName'] ?></td>
                <td><?= $data['students'][24]['lastName'] ?></td>
                <td><?= $data['students'][24]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][25]['firstName'] ?></td>
                <td><?= $data['students'][25]['lastName'] ?></td>
                <td><?= $data['students'][25]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][26]['firstName'] ?></td>
                <td><?= $data['students'][26]['lastName'] ?></td>
                <td><?= $data['students'][26]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][27]['firstName'] ?></td>
                <td><?= $data['students'][27]['lastName'] ?></td>
                <td><?= $data['students'][27]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][28]['firstName'] ?></td>
                <td><?= $data['students'][28]['lastName'] ?></td>
                <td><?= $data['students'][28]['isStudentRepresentative'] ?></td>
            </tr>
            </tr>
                <td><?= $data['students'][29]['firstName'] ?></td>
                <td><?= $data['students'][29]['lastName'] ?></td>
                <td><?= $data['students'][29]['isStudentRepresentative'] ?></td>
            </tr>
        </tbody>
    </table>



    <div class="teachers_table">
        <h6 class="teachers_h">Klassenlehrer</h6>
        <table>
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Nachname</th>
                </tr>
                <tr>
                    <td><a href="?class=<?= $_GET['class']?>&teacher=<?=$data['teachers'][0]['lastName']?>"><?=$data['teachers'][0]['firstName']?></a></td>
                    <td><a href="?class=<?= $_GET['class']?>&teacher=<?=$data['teachers'][0]['lastName']?>"><?=$data['teachers'][0]['lastName']?></a></td>
                </tr>
                <tr>
                    <td><a href="?class=<?= $_GET['class']?>&teacher=<?=$data['teachers'][1]['lastName']?>"><?=$data['teachers'][1]['firstName']?></a></td>
                    <td><a href="?class=<?= $_GET['class']?>&teacher=<?=$data['teachers'][1]['lastName']?>"><?=$data['teachers'][1]['lastName']?></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>     

<div class="subjects">
    <h6>Fächer, die von Herrn (Frau) <?= $_GET['teacher']?> unterrichtet werden:</h6>
    <table>
        <tbody>
            <tr>
                <td><?= $data['subjects'][0] ?></td>
                <td><?= $data['subjects'][1] ?></td>
                <td><?= $data['subjects'][2] ?></td>
                <td><?= $data['subjects'][3] ?></td>
                <td><?= $data['subjects'][4] ?></td>
                <td><?= $data['subjects'][5] ?></td>
            </tr>
        </tbody>    
    </table>    
</div>

</body>
</html>