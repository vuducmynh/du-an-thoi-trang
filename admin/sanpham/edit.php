
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
                            <div class="form-group">
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-success text-white">Sửa sản phẩm</button>
                                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                                    <a href="?act=sanpham"><button type="button" class="btn btn-primary">Danh sách</button></a>
                                    <div class="mb-3 mt-3">
                                      <label for="">Tên sản phẩm:</label>
                                      <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="tensanpham">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Hình ảnh:</label>
                                      <input type="file" class="form-control" id="" name="hinh">
                                      <img src="../plugins/images/users/4.jpg" alt="" width="200px">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Thương hiệu:</label>
                                      <input type="text" class="form-control" id="" placeholder="Nhập tên thương hiệu" name="thuonghieu">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Kích cỡ:</label>
                                      <select class="form-select-sm form-control" name="kichco" id="">
                                        <option value="xl">XL</option>
                                        <option value="l">L</option>
                                        <option value="m">M</option>
                                        <option value="s">S</option>
                                      </select>
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Số lượng:</label>
                                      <input type="number" class="form-control" id="" placeholder="Nhập số lượng" name="soluong">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Giá:</label>
                                      <input type="text" class="form-control" id="" placeholder="Nhập giá" name="gia">
                                    </div>
                                    <div class="mb-3 mt-3">
                                      <label for="">Loại hàng:</label>
                                      <select class="form-select-sm form-control" name="madanhmuc" id="">
                                        <option value="">Áo sơ mi</option>
                                        <option value="">Áo thun</option>
                                        <option value="">M</option>
                                        <option value="">S</option>
                                      </select>
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="">Trạng thái:</label>
                                        <div class="form-control">
                                            <input type="radio" name="trangthai" id="" value="1" checked> Hiện
                                            <input type="radio" name="trangthai" id="" value="0"> Ẩn
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="">Mô tả:</label>
                                        <textarea class="form-control" rows="5" id="comment" name="mota" placeholder="Mô tả..."></textarea>
                                    </div>
                                      </div>
                                    
                                    <button type="submit" class="btn btn-success text-white">Sửa sản phẩm</button>
                                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                                    <a href="?act=sanpham"><button type="button" class="btn btn-primary">Danh sách</button></a>
                                  </form>
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
         