<?php
    include('include/head.php');
?>




        <!-- Begin Page Content -->
        <div class="container-fluid">

            
            <h1 class="h3 mb-2 text-gray-800">Thêm danh mục sản phẩm</h1>
            
            <div class="position-center">
                <form role="form" id="form_categories" method="POST">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" id="name_categories" name="category_product_name" class="form-control" id="exampleInputEmail1"
                            placeholder="Tên danh mục">
                    </div>
                    
                    <button type="button" id="add-categoeies" class="btn btn-outline-success">Thêm danh mục</button>
                </form>
            </div>

        </div>
    </div>




<?php
    include('include/footer.php');
?>