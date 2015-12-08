<section id="page-box-apply">
        <div class="page-header">
            <h1>志愿者申请进度</h1>
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
    </section>