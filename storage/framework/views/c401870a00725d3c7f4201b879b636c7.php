
<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
   
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Service </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Service Add & Service List</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <!-- Start creating your amazing application! -->
          Start creating your New Service !

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
         <a href="<?php echo e(route('add.service')); ?>"
                      <button type="button" class="btn btn-block btn-outline-info">Add Your New Service </button>
          </a>
                    
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>



      <div class="content-header">
      <div class="container-fluid">

      <div class="w-full p-8 bg-dark rounded-lg shadow-lg ">
            <h2 class="text-2xl font-bold mb-4 text-gray-500">Service All Data List</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SubTitle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">status1</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">status2</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">status3</th>
                        <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th> -->
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>       
                  <tbody class="bg-dark divide-y divide-gray-200">
                  <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                              <td class="px-6 py-4 whitespace-nowrap">
                                  <img src="<?php echo e(asset($a->image)); ?>" alt="" class="w-24 h-auto rounded-md border border-gray-300" />
                              </td>
                          
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->title); ?></td>
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->subtitle); ?></td>
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->Description); ?></td>
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->status1); ?></td>
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->status2); ?></td>
                              <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->status3); ?></td>
      
                              <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex space-x-2">
                                      <a href="=<?php echo e(route('edit-data',$a->id)); ?>" class="text-blue-500 hover:text-blue-700">
                                          <i class="fas fa-edit"></i>
                                      </a>
                                      <a href="" class="text-red-500 hover:text-red-700">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </div>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
                      </tbody>      
                  
                  </table>
        </div>


    </div>
      </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AC\Desktop\t1\cl2\resources\views/all/table.blade.php ENDPATH**/ ?>