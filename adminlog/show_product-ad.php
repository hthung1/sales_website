<?php
    include('include/head.php');
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Quản lý sản phẩm</h1>



            <select style="position: relative; top:-43px;left:1040px;width:200px" class="form-control" id="load_option">



            </select>

            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Hình sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Danh mục</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            
                            <tbody id="view_product">
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="delete_product1" tabindex="-1" role="dialog" aria-labelledby="de" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="de">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="view_delete_product">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="delete_product">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>



    <!-- Edit Modal -->
    <div class="modal fade" id="edit_product1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="text_edit_product">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="edit_product">Edit</button>
            </div>
            </div>
        </div>
    </div>




<?php
    include('include/footer.php');
?>