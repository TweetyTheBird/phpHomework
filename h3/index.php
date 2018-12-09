<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        include './main.php';
        ?>
        <style>
            th, td {
                border:1px solid;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>име</th>
                <th>дата</th>
                <th>описание</th>
                <th>статус</th>
            </tr>
            <?php foreach ($tasks as $taskkey => $task) { ?>
                <tr>
                    <?php foreach($task as $itemKey => $item) { 
                        if(($itemKey == 'status') && ($item == 1)) {
                            echo "<td>completed</td>";
                            continue;
                        }
                        if(($itemKey == 'status') && ($item == '')) {
                            echo "<td>uncompleted</td>";
                            continue;
                        }
                        ?>          
                    <td><?php echo $item ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
