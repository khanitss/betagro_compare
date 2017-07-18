<style>
.nav-tabs {
    border-bottom: 2px solid #009688;
}

.nav-tabs>li>a {
    color: #009688;
    font-size: 12px;
    border: 1px solid transparent;
}

.nav-tabs>li>a:hover {
    border-color: #00e6cf #00e6cf #00e6cf;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    font-size: 12px;
    color: #ffffff;
    background-color: #009688;
    border: 1px solid #009688;
    border-bottom-color: transparent;
    cursor: default;
}
</style>

<?php $i = 1; ?>
<div id="myAddRawModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เพิ่มวัตถุดิบ</h4>
            </div>

            <div class="modal-body">
                <ul class="nav nav-tabs" id="tabContent">
                    <?php foreach ($material_list as $key => $value)
                    {
                        ?>
                        <li><a href="#<?php echo $value['cat_name'];?>" data-toggle="tab"><?php echo $value['cat_name']; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>

                <div class="tab-content">

                    <?php foreach ($material_list as $key => $value)
                    {
                        ?>
                        <div class="tab-pane" id="<?php echo $value['cat_name']; ?>">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center"><strong>วัตถุดิบ</strong></th>
                                        <th class="text-center"><strong>จำนวน</strong></th>
                                        <th class="text-center"><strong>หน่วย</strong></th>
                                        <th/>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($mat_list as $key => $value)
                                {
                                    if ($value['cat_id'] == $i)
                                    {
                                        $attr = array('class' => 'form-horizontal');
                                        echo form_open('food/set_mat_detail/'.$this->uri->segment(3).'/'.$value['mat_id'], $attr);
                                        ?>
                                        <tbody>
                                            <tr class="form-horizontal">
                                                <td class="text-center"><?php echo $value['mat_name'];?></td>
                                                <td class="text-center">
                                                    <input class="form-control" id="focusedInput" type="text" name="mat_calculate" placeholder="จำนวน">
                                                </td>
                                                <td class="text-center"><?php echo $value['mat_unit'];?></td>
                                                <td class="text-center">
                                                    <button type="submit" class="btn btn-success btn-block">เพิ่ม</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                        echo form_close();
                                    }
                                }
                                $i++;
                                ?>
                            </table>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
