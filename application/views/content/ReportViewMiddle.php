<div class="page-content-inner">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <h3 class="mt-5"> Report Monioring Middle  </h3> 
                <table border="1" class="table">
                    <thead>
                        <tr>
                         <td><b>No</b></td>
                         <td><b>Nama Karyawan</b></td>
                         <td align="center"><b>Tanggal Pengisian</b></td>
                         <td align="center"><b>Action</b></td>                                       
                     </tr>
                 </thead>
                 <tbody>
                    <!-- ISI NYA DISINI UNTUK MENAMPILKAN DATA -->
                    <?php
                    $no = 1;
                    foreach($manager as $key => $value){ ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $value['nmkryawn']; ?></td>
                            <td><?php echo $value['tanggal_pengisiian'] ;?></td>
                            <td align="center"><a href="<?php echo site_url('FormController').'/?id='.$value['user_id'] ?>" target='_blank' class="btn btn-info">TAMBAH NILAI ATASAN</a></td>
                        </tr>
                        
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>


</div>
</div>
