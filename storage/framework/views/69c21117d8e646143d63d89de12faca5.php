
<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="content ">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!-- method="POST" -->
                <form action="<?php echo e(route('input')); ?>" method="POST" enctype="multipart/form-data">  
                  <?php echo csrf_field(); ?>
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Icon</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile" >
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter subtitle">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" name="Description" rows="3" placeholder="Enter short description"></textarea>
                    </div>
                    <h5>We provide -</h5>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="status1" type="checkbox" id="customCheckbox1" >
                        <label for="customCheckbox1" class="custom-control-label">Quality Servicing</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="status2" type="checkbox" id="customCheckbox2" >
                        <label for="customCheckbox2" class="custom-control-label">Expert Workers</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="status3" type="checkbox" id="customCheckbox3" >
                        <label for="customCheckbox3" class="custom-control-label">Modern Equipment</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AC\Desktop\t1\cl2\resources\views/all/add.blade.php ENDPATH**/ ?>