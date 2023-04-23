<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            
            <h3 class="title-big text-center mb-1 "><span>Berita</span></h3>
            <h5 class="title-small text-center mb-sm-5 mb-4">Onlenkan</h5>
            <div class="row">
                    <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_berita order by id_berita desc limit 3");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                <div class="col-lg-4 col-md-6 item">
                
                    <div class="card">
                    
                        <div class="card-header p-0 position-relative">
                        
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="../gambar/<?php echo $d['gambar']; ?>" width="350px" height="350px"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p><?php echo $d['judul']; ?></p>
                                
                            </div>
                            
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"><?php echo $d['tgl_post']; ?></span>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <?php } ?>
            </div>
            <div class="mt-5 text-more">
                <p class="pt-md-3 sample text-center">
                    ingin lihat yang lebih lengkap?
                    <a href="berita.php">View All Courses <span class="pl-2 fa fa-long-arrow-right"></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="w3l-features py-5" id="facilities">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h3 class="title-big mb-1">Daftar Kegiatan</h5>
                    <h5 class="title-small mb-4">Onlenkan</h5>
                    <p class="text-para">ini adalah daftar kegiatan kami selama magang dionlenkan. kami menyertakan
                        gambar dengan deskipsi nya agar kalian tau apa saja kegiatan yang kami laksanakan disana
                    </p>
                    <a href="kegiatan.php" class="btn btn-primary btn-style mt-md-5 mt-4">Lihat Semua</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">         
                    <div class="call-grids-w3 d-grid">
                    <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan order by id_kegiatan desc limit 4");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                        <div class="grids-1 box-wrap">
                        
                            <a href="#more" class="icon"><span><?php echo $d['tgl_kegiatan']; ?></span></a>
                            <h4><a href="#feature" class="title-head"><?php echo $d['kegiatan']; ?></a></h4>
                            <p><?php echo $d['deskripsi']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>      
            </div>      
        </div>
    </div>
</section>

<section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-5 py-md-4">
        <h3 class="title-big text-center mb-5">Our progress</h3>
        <div class="row stats-con">
            <div class="col-md-4 col-6 stats_info counter_grid">
                <p class="counter">50 </p>
                <span class="plus">+</span><br>
                <h3>Project Success</h3>
            </div>
            <div class="col-md-4 col-6 stats_info counter_grid1">
                <p class="counter">24</p>
                <span class="plus">+</span><br>
                <h3>Clients</h3>
            </div>
            <div class="col-md-4 col-6 stats_info counter_grid mt-md-0 mt-4">
                <p class="counter">30</p>
                <span class="plus">+</span><br>
                <h3>Tech Talents</h3>
            </div>
        </div>
    </div>
</section>

<!-- middle -->

<!-- //middle -->
<section class="w3l-team py-5" id="team">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h3 class="title-big mb-1">Galery</h3>                
                    <h5 class="title-small mb-sm-3 mb-2">Onlenkan</h5>
                    <p class="text-para">Galery ini berisi album-album Onlenkan, disini kami menunjukkan achievement atau karya
                        dari Onlenkan supaya kalian bisa tau apa saja pencapaian yang pernah di raih 
                        oleh Onlenkan</p>
                    <a href="galery.php" class="btn btn-primary btn-style mt-md-5 mt-4">Kunjungi Lebih Lanjut</a>
                </div>
                  <div class="col-lg-7 feature-grid-right">
                    <div class="row">
                    <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_galery order by id_galery desc limit 4");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                        <div class="col-sm-6">
                            <div class="box16">      
                                <a href="#url" ><img  src="../gambar/<?php echo $d['gambar']; ?>" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                   
                                </div>    
                          </div>
                          <br>                        
                      </div>          
                        <?php } ?>                        
                    </div>
                </div>
            </div>
        </div>
</section>