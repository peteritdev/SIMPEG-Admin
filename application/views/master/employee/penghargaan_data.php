<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('static')?>/plugins/datatables/dataTables.bootstrap.css">

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal-message-add-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">POP UP MESSAGE</h4>
            </div>
            <div class="modal-body" id="container-popup-message-addedit"></div>
            <div class="modal-footer">
                <button type="button" id="btn-close-modal-anak" class="btn btn-primary">TUTUP</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal-frm-add-user">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">TAMBAH DATA</h4>                
            </div>
            <div class="modal-body" id="container-add-user">
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal-frm-user">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">CARI USER</h4>                
            </div>
            <div class="modal-body" id="container-user-list">
                
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal-confirm-jobexperience">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">KONFIRMASI</h4>
            </div>
            <form class="form-horizontal" id="form-confirm-jobexperience" name="form-confirm-jobexperience">
                <input type="hidden" id="x_confirm_jobexperience_id" name="x_confirm_jobexperience_id">
                <input type="hidden" id="x_confirm_jobexperience_user_id" name="x_confirm_jobexperience_user_id">
                <input type="hidden" id="x_confirm_jobexperience_type" name="x_confirm_jobexperience_type">
                <div class="modal-body" id="modal-body-confirm-jobexperience-msg"></div>
                <div class="overlay" id="container-loader-confirm" style="display:none;">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modal-frm-add-edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">FORM TAMBAH PMK</h4>                
            </div>
            <form id="form-submit-anak" name="form-submit-family" class="form-horizontal">
                <input type="hidden" name="x_id" id="x_id" value="<?php echo $id; ?>">
                <input type="hidden" name="x_act" id="x_act" value="add">
            
                <div class="modal-body">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Jenis PMK</label>
                                <div class="col-sm-6">
                                    <select id="x_jenis_pmk" name="x_jenis_pmk" class="form-control">
                                        <option value="0">-Pilih-</option>
                                        <?php 
                                            foreach( $rsJenisPMK->data as $dtJenisPMK ){
                                        ?>
                                                <option value="<?php echo $dtJenisPMK->id ?>"><?php echo $dtJenisPMK->name; ?></option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-6">
                                    <select id="x_status_anak" name="x_status_anak" class="form-control">
                                        <option value="0">-Pilih-</option>
                                        <option value="1">Kandung</option>
                                        <option value="2">Angkat</option>
                                        <option value="3">Tiri</option>
                                    </select>
                                </div>
                            </div>                            
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
 </div>

<div class="box-body">
    <p class="pull-right">
        <?php /*
        
        <p>      
            <button class="btn btn-success btn-md" data-toggle="modal" data-target="#modal-frm-add-edit" id="btn-add-pmk"><i class="fa fa-plus" ></i>&nbsp;Tambah Baru</button>
        </p>
        */?>
    </p>
    <br>
    <table id="dt-table-penghargaan" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Jenis Penghargaan</th>
                <th>No. SK</th>
                <th>Tgl. SK</th>
                <th>Tahun</th>        
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Jenis Penghargaan</th>
                <th>No. SK</th>
                <th>Tgl. SK</th>
                <th>Tahun</th>
            </tr>
        </tfoot>
    </table> 

</div>

<!-- Constanta -->
<script src="<?php echo base_url('static');?>/custom/global_constanta.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('static')?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('static')?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('static');?>/custom/penghargaan.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        loadDataTablePenghargaan( $('#x_id').val() );   

    }); 
</script>