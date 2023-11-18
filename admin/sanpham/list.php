
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
             <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Quản lý sản phẩm</h4>
                    </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
                        </div>
                    </div> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <a href="?act=addsanpham"><button type="button" class="btn btn-success text-white">Thêm sản phẩm</button></a>
                            <button type="button" id="checkall" class="btn btn-primary">Chọn tất cả</button>
                            <button type="button" id="clearall" class="btn btn-primary">Bỏ chọn tất cả</button>
                            <button type="submit" id="deleteall" class="btn btn-danger text-white">Xóa các mục chọn</button>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Tên sản phẩm</th>
                                            <th class="border-top-0">Hình ảnh</th>
                                            <th class="border-top-0">Thương hiệu</th>
                                            <th class="border-top-0">Kích cỡ</th>
                                            <th class="border-top-0">Số lượng</th>
                                            <th class="border-top-0">Giá</th>
                                            <th class="border-top-0">Loại hàng</th>
                                            <th class="border-top-0">Trạng thái</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dssp as $sp):
                                            extract($sp);
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><?=$id?></td>
                                            <td><?=$tensanpham?></td>
                                            <td>
                                                <img src="/assets/images/product/ . <?=$hinh?>" alt=" " width="200px">
                                            </td>
                                            <td><?=$thuonghieu?></td>
                                            <td><?=$kichco?></td>
                                            <td><?=$soluong?></td>
                                            <td><?=$gia?></td>
                                            <td>
                                                <?=$tendanhmuc?>
                                            </td>
                                            <td>
                                                <?=$trangthai == 1 ? 'Hiện' : 'Ẩn'?>
                                            </td>
                                            <td>
                                                <a href="?act=editsanpham&idsp<?=$id?>"><button type="button" class="btn btn-warning">Sửa</button></a>
                                                <a href="?act=sanpham&idsp<?=$id?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
       