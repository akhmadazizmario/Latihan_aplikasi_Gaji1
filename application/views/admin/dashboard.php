 <!-- Begin Page Content -->
 <div class="container-fluid">

     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
     </div>
     <hr>
     <!-- Content Row -->
     <div class="card-body bg-white">
         <div class="row">
             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                     <a href="<?php echo base_url('admin/user') ?>"> Data Karyawan</a>
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url('admin/user') ?>"><?php echo $karyawan ?></a></div>
                             </div>
                             <div class="col-auto">
                                 <a href="<?php echo base_url('admin/user') ?>"> <i class="fas fa-users fa-2x text-gray-300"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                     <a href="<?php echo base_url('admin/jabatan') ?>">Data Jabatan</a>
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url('admin/jabatan') ?>"><?php echo $jabat ?></a></div>
                             </div>

                             <div class="col-auto">
                                 <a href="<?php echo base_url('admin/jabatan') ?>"> <i class="fas fa-briefcase fa-2x text-gray-300"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-info shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan
                                 </div>
                                 <div class="row no-gutters align-items-center">
                                     <div class="col-auto">
                                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pending Requests Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                     Saldo</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 4.000.000</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->