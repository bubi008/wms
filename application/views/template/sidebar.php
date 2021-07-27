 <?php
  $url_segment1 = $this->uri->segment(1);
  ?>

 <?php
  $level1 = [
    ['id' => 1, 'nama' => 'Level1-a', 'url' => ''],
    ['id' => 2, 'nama' => 'Level1-b', 'url' => ''],
    ['id' => 3, 'nama' => 'Level1-c', 'url' => '']
  ];
  $level2 = [
    ['id' => 1, 'nama' => 'Level2-a', 'url' => '', 'level1_id' => 1],
    ['id' => 2, 'nama' => 'Level2-b', 'url' => '', 'level1_id' => 2],
    ['id' => 3, 'nama' => 'Level2-c', 'url' => '', 'level1_id' => 2],
    ['id' => 4, 'nama' => 'Level2-d', 'url' => '', 'level1_id' => 3],
    ['id' => 5, 'nama' => 'Level2-e', 'url' => '', 'level1_id' => 3],
    ['id' => 6, 'nama' => 'Level2-f', 'url' => '', 'level1_id' => 3]
  ];
  $level3 = [
    ['id' => 1, 'nama' => 'Level3-a', 'url' => '', 'level1_id' => 2, 'level2_id' => 2],
    ['id' => 2, 'nama' => 'Level3-b', 'url' => '', 'level1_id' => 2, 'level2_id' => 2],
    ['id' => 3, 'nama' => 'Level3-c', 'url' => '', 'level1_id' => 2, 'level2_id' => 3],
    ['id' => 4, 'nama' => 'Level3-d', 'url' => '', 'level1_id' => 2, 'level2_id' => 3]
  ];
  $level4 = [
    ['id' => 1, 'nama' => 'Level4-a', 'url' => '', 'level1_id' => 2, 'level2_id' => 2, 'level3_id' => 1],
    ['id' => 2, 'nama' => 'Level4-b', 'url' => '', 'level1_id' => 2, 'level2_id' => 2, 'level3_id' => 1]
  ];
  $level5 = [
    ['id' => 1, 'nama' => 'Level5-a', 'url' => '', 'level1_id' => 2, 'level2_id' => 2, 'level3_id' => 1, 'level4_id' => 1],
    ['id' => 2, 'nama' => 'Level5-b', 'url' => '', 'level1_id' => 2, 'level2_id' => 2, 'level3_id' => 1, 'level4_id' => 1]
  ];
  ?>

 <!-- Main Sidebar Container -->
 <div class="content-wrapper">
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark"><?= ucfirst($url_segment1); ?></h1>
         </div>
       </div>
     </div>
   </div>
   <aside class="main-sidebar sidebar-light-secondary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url('beranda'); ?>" class="brand-link">
       <img src="<?= base_url(); ?>assets/img/rcs_logo.png" alt="RCS Logo" class="brand-image elevation-1" style="opacity: .8;">
       <span class="brand-text font-weight-light">WMS</span>
     </a>

     <div class="sidebar">
       <!-- <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

           <li class="nav-header ml-2"><i class="nav-icon fa fa-user"></i> &nbsp;<?= 'user'; ?></li>
           <div class="user-panel pb-2"></div>

           <li class="nav-header">Level1-a</li>
           <li class="nav-item menu-open">
             <a href="" class="nav-link active">
               <i class="nav-icon fa fa-angle-right mr-0"></i>
               <p>Level2-a <i class="right fa fa-angle-left"></i></p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item ml-3">
                 <a href="" class="nav-link">
                   <i class="nav-icon fa fa-angle-right mr-0"></i>
                   <p>Level3-a</p>
                 </a>
               </li>
               <li class="nav-item ml-3 menu-open">
                 <a href="" class="nav-link active">
                   <i class="nav-icon fa fa-angle-right mr-0"></i>
                   <p>Level3-b <i class="right fa fa-angle-left"></i></p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item ml-3">
                     <a href="" class="nav-link">
                       <i class="nav-icon fa fa-angle-right mr-0"></i>
                       <p>Level4-a</p>
                     </a>
                   </li>
                   <li class="nav-item ml-3 menu-open">
                     <a href="" class="nav-link active">
                       <i class="nav-icon fa fa-angle-right mr-0"></i>
                       <p>Level4-b <i class="right fa fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                       <li class="nav-item ml-3">
                         <a href="" class="nav-link">
                           <i class="nav-icon fa fa-angle-right mr-0"></i>
                           <p>Level5-a</p>
                         </a>
                       </li>
                       <li class="nav-item ml-3">
                         <a href="" class="nav-link active">
                           <i class="nav-icon fa fa-angle-right mr-0"></i>
                           <p>Level5-b</p>
                         </a>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </li>
             </ul>
           </li>
           <li class="nav-header">Level1-b</li>
           <li class="nav-item">
             <a href="" class="nav-link">
               <i class="nav-icon fa fa-angle-right mr-0"></i>
               <p>Level2-a <i class="right fa fa-angle-left"></i></p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item ml-3">
                 <a href="" class="nav-link">
                   <i class="nav-icon fa fa-angle-right mr-0"></i>
                   <p>Level3-a</p>
                 </a>
               </li>
               <li class="nav-item ml-3">
                 <a href="" class="nav-link">
                   <i class="nav-icon fa fa-angle-right mr-0"></i>
                   <p>Level3-b <i class="right fa fa-angle-left"></i></p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item ml-3">
                     <a href="" class="nav-link">
                       <i class="nav-icon fa fa-angle-right mr-0"></i>
                       <p>Level4-a</p>
                     </a>
                   </li>
                   <li class="nav-item ml-3">
                     <a href="" class="nav-link">
                       <i class="nav-icon fa fa-angle-right mr-0"></i>
                       <p>Level4-b <i class="right fa fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                       <li class="nav-item ml-3">
                         <a href="" class="nav-link">
                           <i class="nav-icon fa fa-angle-right mr-0"></i>
                           <p>Level5-a</p>
                         </a>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </li>
             </ul>
           </li>
           <li class="nav-header">Level1-c</li>
         </ul>
       </nav> -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-header ml-2"><i class="nav-icon fa fa-user"></i> &nbsp;<?= 'user'; ?></li>
           <div class="user-panel pb-2"></div>
           <?php foreach ($level1 as $l1) : ?>
             <li class="nav-header"><?= $l1['nama']; ?></li>
             <?php foreach ($level2 as $l2) : ?>
               <?php if ($l2['level1_id'] == $l1['id']) : ?>
                 <li class="nav-item">
                   <a href="" class="nav-link">
                     <i class="nav-icon fa fa-angle-right mr-0"></i>
                     <p><?= $l2['nama']; ?> <i class="right fa fa-angle-left"></i></p>
                   </a>
                   <ul class="nav nav-treeview">
                     <?php foreach ($level3 as $l3) : ?>
                       <?php if ($l3['level2_id'] == $l2['id']) : ?>
                         <li class="nav-item ml-3">
                           <a href="" class="nav-link">
                             <i class="nav-icon fa fa-angle-right mr-0"></i>
                             <p><?= $l3['nama']; ?> <i class="right fa fa-angle-left"></i></p>
                           </a>
                           <ul class="nav nav-treeview">
                             <?php foreach ($level4 as $l4) : ?>
                               <?php if ($l4['level3_id'] == $l3['id']) : ?>
                                 <li class="nav-item ml-3">
                                   <a href="" class="nav-link">
                                     <i class="nav-icon fa fa-angle-right mr-0"></i>
                                     <p><?= $l4['nama']; ?> <i class="right fa fa-angle-left"></i></p>
                                   </a>
                                   <ul class="nav nav-treeview">
                                     <?php foreach ($level5 as $l5) : ?>
                                       <?php if ($l5['level4_id'] == $l4['id']) : ?>
                                         <li class="nav-item ml-3">
                                           <a href="" class="nav-link">
                                             <i class="nav-icon fa fa-angle-right mr-0"></i>
                                             <p><?= $l5['nama']; ?></p>
                                           </a>
                                         </li>
                                       <?php endif; ?>
                                     <?php endforeach; ?>
                                   </ul>
                                 </li>
                               <?php endif; ?>
                             <?php endforeach; ?>
                           </ul>
                         </li>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   </ul>
                 </li>
               <?php endif; ?>
             <?php endforeach; ?>
           <?php endforeach; ?>
         </ul>
       </nav>
     </div>

   </aside>