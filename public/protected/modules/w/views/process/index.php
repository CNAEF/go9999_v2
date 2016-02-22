<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section id="page-box-apply">
                <div class="page-header">
                    <h2>志愿者申请进度<small>Apply Progress</small></h2>
                </div>
                <table class="table">
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
                <p class="bg-warning" style="padding:20px;text-align:center;">由于个人隐私等原因, 半年以上的申请记录已经隐藏.</p>
            </section>
        </div>
    </div>
</div>