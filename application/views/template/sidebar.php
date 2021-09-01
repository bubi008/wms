 <!-- Main Sidebar Container -->
 <div class="content-wrapper">
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark"><?= ucfirst(str_replace('-', ' ', ($this->uri->segment(1)))); ?></h1>
         </div>
       </div>
     </div>
   </div>
   <aside class="main-sidebar sidebar-light-success elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url('beranda'); ?>" class="brand-link">
       <img src="<?= base_url(); ?>assets/img/rcs_logo.png" alt="RCS Logo" class="brand-image elevation-1" style="opacity: .8;">
       <span class="brand-text font-weight-light">APIK</span>
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
           <?php foreach (show_menus()['menu1'] as $m1) : ?>
             <li class="nav-header"><?= $m1['nama']; ?></li>
             <?php foreach (show_menus()['menu2'] as $m2) : ?>
               <?php if ($m2['menu1id'] == $m1['id']) : ?>
                 <li class="nav-item has-treeview <?= $m2['url'] == $this->uri->segment(1) ? 'menu-open' : ''; ?>">
                   <a href="<?= base_url() . $m2['url']; ?>" class="nav-link <?= $m2['url'] == $this->uri->segment(1) ? 'active' : ''; ?>">
                     <i class="nav-icon fa fa-angle-right mr-0"></i>
                     <p><?= $m2['nama']; ?> <?= $m2['jumlah'] > 0 ? '<i class="right fa fa-angle-left"></i>' : ''; ?></p>
                   </a>

                   <?php if ($m2['jumlah'] > 0) : ?>
                     <ul class="nav nav-treeview">
                       <?php foreach (show_menus()['menu3'] as $m3) : ?>
                         <?php if ($m3['menu2id'] == $m2['id']) : ?>
                           <li class="nav-item has-treeview ml-3 <?= $m3['url'] == $this->uri->segment(2) ? 'menu-open' : ''; ?>">
                             <a href="<?= base_url() . $m3['url']; ?>" class="nav-link <?= $m3['url'] == $this->uri->segment(2) ? 'active' : ''; ?>">
                               <i class="nav-icon fa fa-angle-right mr-0"></i>
                               <p><?= $m3['nama']; ?> <?= $m3['jumlah'] > 0 ? '<i class="right fa fa-angle-left"></i>' : ''; ?></p>
                             </a>

                             <?php if ($m3['jumlah'] > 0) : ?>
                               <ul class="nav nav-treeview">
                                 <?php foreach (show_menus()['menu4'] as $m4) : ?>
                                   <?php if ($m4['menu3id'] == $m3['id']) : ?>
                                    <li class="nav-item has-treeview ml-3 <?= $m3['url'] == $this->uri->segment(3) ? 'menu-open' : ''; ?>">
                                        <a href="<?= base_url() . $m4['url']; ?>" class="nav-link <?= $m4['url'] == $this->uri->segment(3) ? 'active' : ''; ?>">
                                         <i class="nav-icon fa fa-angle-right mr-0"></i>
                                         <p><?= $m4['nama']; ?> <?= $m4['jumlah'] > 0 ? '<i class="right fa fa-angle-left"></i>' : ''; ?></p>
                                       </a>
                                       <?php if ($m4['jumlah'] > 0) : ?>
                                       <ul class="nav nav-treeview">
                                         <?php foreach (show_menus()['menu5'] as $m5) : ?>
                                           <?php if ($m5['menu4id'] == $m4['id']) : ?>
                                            <li class="nav-item has-treeview ml-3 <?= $m4['url'] == $this->uri->segment(2) ? 'menu-open' : ''; ?>">
                                             <a href="<?= base_url() . $m5['url']; ?>" class="nav-link <?= $m5['url'] == $this->uri->segment(2) ? 'active' : ''; ?>">
                                                 <i class="nav-icon fa fa-angle-right mr-0"></i>
                                                 <p><?= $m5['nama']; ?> <?= $m5['jumlah'] > 0 ? '<i class="right fa fa-angle-left"></i>' : '';?></p>
                                               </a>
                                             </li>
                                           <?php endif; ?>
                                         <?php endforeach; ?>
                                       </ul>
                                       <?php endif; ?>
                                     </li>
                                   <?php endif; ?>
                                 <?php endforeach; ?>
                               </ul>
                             <?php endif; ?>

                           </li>
                         <?php endif; ?>
                       <?php endforeach; ?>
                     </ul>
                   <?php endif; ?>

                 </li>
               <?php endif; ?>
             <?php endforeach; ?>
           <?php endforeach; ?>
         </ul>
       </nav>
     </div>

   </aside>