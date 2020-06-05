<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
          <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Oh</small>
                        </h1>
                        <!-- Add Category Form -->
                        <div class="col-xs-6">

                          <?php
                            insert_categories();
                           ?>

                        <form action="" method="post">
                          <div class="form-group">
                            <label for="cat_title">Add Category</label>
                              <input class="form-control" type="text" name="cat_title">
                          </div>
                          <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                          </div>
                        </form>

                              <!-- Include Update categories -->
                          <?php

                              if (isset($_GET['edit'])) {

                                $cat_id = $_GET['edit'];

                                include "includes/update_categories.php";
                              }    

                            ?>

                       </div> <!-- Add Category Form -->

                       <div class="col-xs-6">
                         <table class="table table-bodered table-hover">
                           <thead>
                             <tr>
                               <th>Id</th>
                               <th>Category Title</th>
                             </tr>
                           </thead>
                           <tbody>
                             <!-- Find all categories query -->
                             <?php findAllCategoties(); ?>

                              <!-- Delete query -->
                              <?php deleteCategories(); ?>
                           </tbody>
                         </table>

                       </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php" ?>
