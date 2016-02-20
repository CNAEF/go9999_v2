<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section id="page-box-apply">
                <div class="page-header">
                    <h2>志愿者申请进度<small>Progress</small></h2>
                </div>
                <table class="table" id="eeProgress">
                    <thead>
                        <tr>
                            <th>姓名</th>
                            <th>申请日期</th>
                            <th>状态</th>
                            <th>备注</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($volunteers as $oneV):?>
                        <tr>
                            <td><?php echo CHtml::encode($oneV->name);?></td>
                            <td><?php echo CHtml::encode($oneV->time);?></td>

                            <td><?php echo $oneV->verifyStatusText;?></td>
                            <td><?php echo $oneV->verifyStatusMessage;?></td>
                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>