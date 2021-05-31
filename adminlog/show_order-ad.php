
 <?php
    include('include/head.php');
 ?>

        <!-- Begin Page Content -->
        <div id="_order" class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Liệt kê đơn hàng</h1>
            
            <select style="position: relative; top:-40px;left:1030px;padding: 5px;" id="kkk">
            <option value="All">All</option>
                <option value="Pending">Pending</option>
                <option value="Dispatched">Dispatched</option>
                <option value="Completed">Completed</option>
            </select>
            <div class="card shadow mb-4">
                
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <tbody id="show_order"> <!--show_order.php-->
                                
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            
        </div>
        <!-- /.container-fluid -->
        <div id="_detail" class="container-fluid">
        <i class='fas fa-arrow-left' id="back_order" style='font-size:24px'></i>
            <h1 class="h3 mb-2 text-gray-800">Chi tiết đơn hàng</h1>

            <div class="card shadow mb-4">
                
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <tbody id="show_detail"> <!--show_detail.php-->
                                
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            
        </div>



        

 <?php
    include('include/footer.php');
 ?>