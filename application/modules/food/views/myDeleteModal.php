<!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ยืนยันการลบข้อมูล?</h4>
            </div>

            <div class="modal-body">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success btn-lg btn-block" href="<?php echo site_url('food/delete_food');?>">ยืนยัน</button>
                </div>
                <div class="col-sm-4">
                    <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                </div>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
