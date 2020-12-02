
<style type="text/css">
   textarea,
   select {
     width: 100%;
     padding: 2px 5px;
     margin: 2px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 2px;
     box-sizing: border-box;
  }
</style>
<input type="text" id='user_id' disabled hidden value='<?= $id ?? '' ?>'>
<div class="page-content-inner">
   <div class="row">
      <div class="col-md-12">
         <!-- BEGIN Portlet PORTLET-->
         <div class="portlet light">
            <h4> A. TARGET ACHIEVEMENT </h4>
            <table border="1" class="table" id='table'>
               <thead>
                  <tr>
                     <td colspan="7" align="center"> Program Kerja </td>
                     <td colspan="5" align="center"> Laporan Hasil Kerja </td>
                  </tr>
                  <tr>
                     <td align="center">NO</td>
                     <td align="center">OBJECTIVE</td>
                     <td align="center">Key Result Area</td>
                     <td align="center">WEIGHT</td>
                     <td colspan="2" align="center">TARGET (%)</td>
                     <td align="center">TRACKING METHOD</td>
                     <td colspan="2" align="center">ACTUAL RESULT</td>
                     <td align="center">PROBLEM</td>
                     <td align="center">SOLUSI</td>
                     <td align="center">NILAI ATASAN</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td width="80px" align="center">%</td>
                     <td width="80px" align="center">Waktu</td>
                     <td></td>
                     <td width="80px" align="center">%</td>
                     <td width="80px" align="center">Bobot</td>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>
               </thead>
            </table>
            <table id='table_update_okr' border="1" class="table" >
               <?php
                  $no_id=1;
                  $no=1;
                  foreach ($hasil_okr as $key => $value) { ?>
                  <tr>
                     <td width='70px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $no++, [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='157px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['object'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='195px'> 
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['key'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='125px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['weight'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='80px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['target_persen'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='80px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['target_waktu'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='254px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['track'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='80px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['actual_persen'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width='80px'>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['actual_bobot'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width="143px">
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['problem'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td width="115px">
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['solusi'] ?? '', [
                              'class' => 'form-control',
                              'readonly' => 'true',
                              'disabled' => 'true',
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div> 
                     </td>
                     <td>
                        <div class="form-group">
                           <?= form_textarea('okr[]', $value['nilai_atasan'] ?? '', [
                              'class' => 'form-control',
                              'id' => 'okr_nilai'.$no_id,
                              'style' => 'resize:none;height:150px'
                           ]); ?>
                        </div>
                        <input type="hidden" name="id_detail[]" value="<?= $value['id'] ?>" id="id_detail_okr<?=$no_id?>">  
                     </td>
                  </tr>
               <?php
                  }
               ?>
            </table>

            <button class="btn btn-success mb-5" id="btn-achievement">Simpan Achievement</button>

            <h4> B. MANAGERIAL COMPETENCY </h4>                                       
            <table border="1" class="table" id="table_tes">	
             <thead>
                <tr>
                  <td align="center">No</td>
                  <td align="center">Indicator</td>
                  <td align="center">Key Result</td>
                  <td align="center">Bobot</td>
                  <td align="center">Target</td>

               </tr>
            </thead>
            <tbody>
               <?php 
               $bobot =0;
               $no=1;
               $no_id=1;
               foreach ($form_managerial as $key => $value){ 
                 $bobot = $bobot + $value['bobot'];
                 $target = $value['target'];
                 ?>
                 <tr>
                   <td width="50"><?php echo $no++ ?></td>
                   <td width="200"><?php echo '<b>'.$value['indicator'].'</b></br>'.$value['kata_kunci']?></td>
                   <td width="300"><?php echo $value['key_result'] ?></td>
                   <td width="70"><?php echo $value['bobot'] ?></td>
                   <td width="70"><?php echo $value['target'] ?></td>
                </tr>
             <?php } ?>
             <tr>
              <td colspan="3" align="center"> Subtotal </td>
              <td><?php echo $bobot ?></td>
              <td><?php echo $target ?></td>
           </tr>
        </tbody>
     </table>
     <table class="table" border="1" style="width: 350px;">
      <tr>
         <td align="center" colspan="4">Pencapaian</td>
      </tr>
      <tr>
         <td>No</td>
         <td>%</td>
         <td>Score</td>
         <td>Nilai Dari Atasan</td>
      </tr>

      <?php 
      $no = 1;
      foreach ($hasil_manager as $key => $value) { 
         $manager = $value['manager_nilai'] ?? '';
         ?>
         <tr>
            <td><?= $no++ ?></td>
            <td width="150" align="center">                                             
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['manager_persen'] ?? '', [
                     'class' => 'form-control',
                     'readonly' => 'true',
                     'disabled' => 'true',
                     'id' => 'mngr_persen'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
               
            </td>
            <td width="150" align="center">
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['manager_score'] ?? '', [
                     'class' => 'form-control',
                     'id' => 'mngr_score'.$no_id,
                     'readonly' => 'true',
                     'disabled' => 'true',
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
            </td>
            <td width="150" align="center">
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['manager_nilai'] ?? '', [
                     'class' => 'form-control',
                     'id' => 'mngr_nilai'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div>
               <input type="hidden" name="id_detail[]" value="<?= $value['id'] ?>" id="id_detail<?=$no_id?>"> 
            </td>
         </tr><?php $no_id++;
      }
      ?>
   </table>
         <?php if($manager): ?>
            <button class="btn btn-success mb-5" hidden id="btn-managerial">Simpan Managerial Competency</button>
         <?php else: ?>
            <button class="btn btn-success mb-5" id="btn-managerial">Simpan Managerial Competency</button>
         <?php endif ?>

   

   <h4> C. PERSONEL EFFECTIVENESS </h4>
   <table border="1" class="table">	
    <thead>
       <tr>
         <td align="center">No</td>
         <td align="center">Indicator</td>
         <td align="center">Key Result</td>
         <td align="center">Bobot</td>
         <td align="center">Target</td>
      </tr>
   </thead>
   <tbody>
      <?php 
      $bobot =0;
      $no_id=1;
      $no=1; foreach ($form_personal as $key => $value){ 
        $bobot = $bobot + $value['bobot'];
        $target = $value['target'];
        ?>
        <tr>
          <td width="50"><?php echo $no++ ?></td>
          <td width="200"><?php echo '<b>'.$value['indicator'].'</b></br>'.$value['kata_kunci']?></td>
          <td width="300"><?php echo $value['key_result'] ?></td>
          <td width="70"><?php echo $value['bobot'] ?></td>
          <td width="70"><?php echo $value['target'] ?></td>
       </tr>
    <?php } ?>
    <tr>
     <td colspan="3" align="center"> Subtotal </td>
     <td><?php echo $bobot ?></td>
     <td><?php echo $target ?></td>
  </tr>
</tbody>
</table>

<?php
foreach ($hasil_personal as $key => $value1) {
   $data_personal = $value1['personal_persen'];
} 

if(empty($data_personal)){ ?>
   <h3 style="color: red;"> Karyawan Belom Mengisi Form Personal Effectiveness </h3>
   <?php
}else{
   ?>
   <table class="table" border="1" style="width: 350px;">
      <tr>
         <td align="center" colspan="4">Pencapaian</td>
      </tr>
      <tr>
         <td>No</td>
         <td>%</td>
         <td>Score</td>
         <td>Nilai Dari Atasan</td>
      </tr>
      <?php 
      $no = 1;
      foreach ($hasil_personal as $key => $value) { 
         $personal =  $value['personal_nilai'];
         ?>
         <tr>
            <td><?= $no++ ?></td>
            <td width="150" align="center">
               <!-- <textarea style="resize:none;height:80px;"></textarea> -->                                                 
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['personal_persen'] ?? '', [
                     'class' => 'form-control',
                     'readonly' => 'true',
                     'disabled' => 'true',
                     'id' => 'prsn_persen'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
               
            </td>
            <td width="150" align="center">
               <!--                                                          <textarea style="resize:none;height:80px;"></textarea> -->
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['personal_score'] ?? '', [
                     'class' => 'form-control',
                     'readonly' => 'true',
                     'disabled' => 'true',
                     'id' => 'prsn_score'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
            </td>
            <td width="150" align="center">
               <!--                                                          <textarea style="resize:none;height:80px;"></textarea> -->
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['personal_nilai'] ?? '', [
                     'class' => 'form-control',
                     'id' => 'prsn_nilai'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
               <input type="hidden" name="id_detail[]" value="<?= $value['id'] ?>" id="id_detail_personal<?=$no_id?>"> 
            </td>
         </tr><?php $no_id++;
      }
   }
   ?>
</table>
   <?php if($personal): ?>
   <button class="btn btn-success mb-5" hidden id="btn-personal">Simpan Personal Efectiveness</button>
   <?php else: ?>
   <button class="btn btn-success mb-5" id="btn-personal">Simpan Personal Efectiveness</button>
   <?php endif ?>

<h4> D. ABSENSE </h4>
<table border="1" class="table">	
   <thead>
    <tr>
      <td align="center">No</td>
      <td align="center">Indicator</td>
      <td align="center">Key Result</td>
      <td align="center">Bobot</td>
      <td align="center">Target</td>
   </tr>
</thead>
<tbody>
   <?php 
   $bobot =0;
   $no_id=1;
   $no=1; foreach ($form_corporate as $key => $value){ 
     $bobot = $bobot + $value['bobot'];
     $target = $value['target'];
     ?>
     <tr>
       <td width="50"><?php echo $no++ ?></td>
       <td width="200"><?php echo '<b>'.$value['indicator'].'</b>'?></td>
       <td width="300"><?php echo $value['key_result'] ?></td>
       <td width="70"><?php echo $value['bobot'] ?></td>
       <td width="70"><?php echo $value['target'] ?></td>
    </tr>
 <?php } ?>
 <tr>
  <td colspan="3" align="center"> Subtotal </td>
  <td><?php echo $bobot ?></td>
  <td><?php echo $target ?></td>
</tr>
</tbody>
</table>
<table class="table" border="1" style="width: 350px;">
   <tr>
      <td>Nilai Diri Sendiri</td>   
      <td>Nilai Dari Atasan</td>   
   </tr>
   <tr>                                             
      <td width="150" align="center">
         <!-- <textarea style="resize:none;height:80px;"></textarea> -->
         <div class="form-group">
            <?= form_textarea('Personal[]', $hasil_absense['absense_nilai_sendiri'] ?? '', [
               'class' => 'form-control',
               'readonly' => 'true',
               'disabled' => 'true',
               'id' => 'absense_persen',
               'style' => 'resize:none;width:120px;height:100px'
            ]); ?>
         </div> 
      </td>
      <td width="150" align="center">
         <div class="form-group">
            <?= form_textarea('Personal[]',$hasil_absense['absense_nilai_atasan'] ?? '', [
               'class' => 'form-control',
               'id' => 'absense_update'.$no_id++,
               'style' => 'resize:none;width:120px;height:100px'
            ]); ?>
         </div>
         <input type="hidden" name="id_detail[]" value="<?= $hasil_absense['id'] ?>" id="id_detail_absensi1">  
      </td>
   </tr>
</table>

   <?php if($hasil_absense['absense_nilai_atasan']): ?>
   <button class="btn btn-success mb-5" hidden id="btn-absense">Simpan Absense</button>
   <?php else: ?>
   <button class="btn btn-success mb-5" id="btn-absense">Simpan Absense</button>
   <?php endif ?>
<h4> E. CORPORATE CULTURE </h4>
<table border="1" class="table">	
   <thead>
    <tr>
      <td align="center">No</td>
      <td align="center">Indicator</td>
      <td align="center">Key Result</td>
      <td align="center">Bobot</td>
      <td align="center">Target</td>
   </tr>
</thead>
<tbody>
   <?php 
   $bobot =0;
   $no_id =1;
   $no=1; foreach ($form_absense as $key => $value){ 
     $bobot = $bobot + $value['bobot'];
     $target = $value['target'];
     ?>
     <tr>
       <td width="50"><?php echo $no++ ?></td>
       <td width="200"><?php echo '<b>'.$value['indicator'].'</b>'?></td>
       <td width="300"><?php echo $value['key_result'] ?></td>
       <td width="70"><?php echo $value['bobot'] ?></td>
       <td width="70"><?php echo $value['target'] ?></td>
    </tr>
 <?php } ?>
 <tr>
  <td colspan="3" align="center"> Subtotal </td>
  <td><?php echo $bobot ?></td>
  <td><?php echo $target ?></td>
</tr>
</tbody>
</table>
<?php
foreach ($hasil_corporate as $key => $value1) {
   $data_corporate = $value1['corporate_nilai_sendiri'];
} 

if(empty($data_corporate)){ ?>
   <h3 style="color: red;"> Karyawan Belom Mengisi Form Corporate Culture </h3>
   <?php
}else{
   ?>
   <table class="table" border="1" style="width: 350px;">
      <tr>
         <td>Nilai Diri Sendiri</td>   
         <td>Nilai Dari Atasan</td>   
      </tr>
      <?php
      foreach ($hasil_corporate as $key => $value) {
         $corporate = $value['corporate_nilai_atasan'];
         ?>                                          
         <tr>
            <td width="150" align="center">
               <!-- <textarea style="resize:none;height:80px;"></textarea> -->
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['corporate_nilai_sendiri'] ?? '', [
                     'class' => 'form-control',
                     'readonly' => 'true',
                     'disabled' => 'true',
                     'id' => 'corporate_sendiri'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div> 
            </td>
            <td width="150" align="center">
               <div class="form-group">
                  <?= form_textarea('Personal[]', $value['corporate_nilai_atasan'] ?? '', [
                     'class' => 'form-control',
                     'id' => 'corporate_atasan'.$no_id,
                     'style' => 'resize:none;width:120px;height:100px'
                  ]); ?>
               </div>
               <input type="hidden" name="id_detail[]" value="<?= $value['id'] ?>" id="id_detail_corporate<?=$no_id?>">   
            </td>
         </tr>
         <?php $no_id++;
      }

   }
   ?>
</table>
   <?php if($corporate): ?>
   <button class="btn btn-success mb-5" hidden id="btn-corporate">Simpan Corporate Culture</button>
   <?php else: ?>
   <button class="btn btn-success mb-5" id="btn-corporate">Simpan Corporate Culture</button>
   <?php endif ?>
</form>
</div>
<!-- END Portlet PORTLET-->
</div>
</div>
</div>
