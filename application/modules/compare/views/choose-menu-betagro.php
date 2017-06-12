<!-- Content Section START -->
        <div class="block-header clearfix">
          <h2 class="pull-left">Choose Standard Menu</h2>
          <ul class="breadcrumb pull-right">
            <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
            <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">Choose Standard Menu</a></li><li><a href="<?php echo site_url('compare/choose_menu2_page');?>">Choose Betagro Menu</a></li>
          </ul>
        </div>
<!-- back -->
        <div class="row">
            <div class="col-sm-10 col-xs-8"></div>
                <div class="col-sm-2 col-xs-4 text-center">
                    <a href="<?php echo site_url('compare/compare_page');?>">
                        <button class="btn btn-success">Compare</button>
                    </a>
                </div>
        </div></br>
<!-- choose menu -->
        <div class="row">
                    <form method="get">
                        <div class="form-group">

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item1" value="1" />
                                            <label for="item1"> <img src="<?php echo base_url('dist/images/menu/b_ขาหมู.jpg');?>"  alt="light" style="width:90%" >
                                                <div class="caption"><p>ขาหมูน้ำแดง</p></div>
                                            </label>
                                        </lable>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item2" value="2" />
                                            <label for="item2"><img src="<?php echo base_url('dist/images/menu/b_เป็ดน้ำแดง.jpg');?>" alt="Nature" style="width:90%">
                                                <div class="caption"><p>เป็ดน้ำแดง</p></div>
                                            </label>
                                        </lable>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class="btn btn-light">
                                           <input type="radio" name="rad" id="item3" value="3" />
                                           <label for="item3"><img src="<?php echo base_url('dist/images/menu/b_ซี่โครงหมูตุ่นเยิ่อไผ่.jpg');?>" alt="Nature" style="width:90%">
                                               <div class="caption"><p>ซี่โครงหมูตุ๋นเยื่อไผ่</p></div>
                                           </label>
                                       </lable>
                                   </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item4" value="4" />
                                            <label for="item4"><img src="<?php echo base_url('dist/images/menu/b_ไก่ต้มน้ำปลา.jpg');?>" alt="Nature" style="width:90%">
                                                <div class="caption"><p>ไก่ต้มน้ำปลา</p></div>
                                            </label>
                                        </lable>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item5" value="5" />
                                            <label for="item5"><img src="<?php echo base_url('dist/images/menu/b_สเต็กเนื้อ.jpg');?>" alt="Nature" style="width:90%">
                                                <div class="caption"><p>สเต็กเนื้อ</p></div>
                                            </label>
                                        </lable>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item6" value="6" />
                                            <label for="item6"><img src="<?php echo base_url('dist/images/menu/b_แกงเขียวหวาน.png');?>" alt="Fjords" style="width:90%">
                                               <div class="caption"><p>แกงเขียวหวาน</p></div>
                                           </label>
                                       </lable>
                                   </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item7" value="7" />
                                            <label for="item7"><img src="<?php echo base_url('dist/images/menu/b_สปาเก็ตตี้คาโบนาร่า.jpg');?>" alt="Nature" style="width:90%"><
                                                <div class="caption"><p>สปาเก็ตตี้คาโบนาร่า</p></div>
                                            </lable>
                                        </lable>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="thumbnail img-check">
                                        <label class=" btn btn-light">
                                            <input type="radio" name="rad" id="item8" value="8" />
                                            <label for="item8"><img src="<?php echo base_url('dist/images/menu/b_ต้มยำกุ้ง.jpg');?>"" alt="Nature" style="width:90%">
                                                <div class="caption"><p>ต้มยำกุ้ง</p></div>
                                            </lable>
                                        </lable>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2 text-right">
                            <a href="<?php echo site_url('compare/compare_page'); ?>" type='submit' type="radio" class="btn btn-info btn-block">COMPARE</a>
                            </div>
                        </div>
                    </form>
        </div>

