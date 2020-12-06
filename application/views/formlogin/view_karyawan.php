<!-- header -->
<?php $this->load->view('layout/header') ?>

<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>MASUK</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('login');?>" method="post">
                    <?php echo $this->session->flashdata('message');?>
                    <div class="form-group">
                        <p class="col-sm-3">Nama Pengguna </p>
                        
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Nama Pengguna" >
                        </div>
                    </div>
                    <div class="form-group">
                    <p class="col-sm-3">Kata Sandi </p>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Kata Sandi" >
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="proses" class="btn btn-success btn-sm">
                                Masuk</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Atur Ulang</button>
                        </div>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
    <div class="col-md-8 ">
        <h4> <?php echo $title; ?></h4><hr class="line-title"> 
        <?php 
        if($karyawan->num_rows() > 0) {
        ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Foto</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Bagian</td>
                </tr>
            </thead>
            <?php 
                $no=0; 
                foreach($karyawan->result() as $row): 
                $no++;
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php if($row->gambar != "") { ?>
                    <img src="<?php echo base_url('assets/img/karyawan/'.$row->gambar);?>" width="100px" height="100px">
                <?php }else{ ?>
                    <img src="<?php echo base_url('assets/img/karyawan/images.jpg');?>" width="100px" height="100px">
                <?php } ?> 
                </td>
                <td><?php echo $row->nik;?></td>
                <td><?php echo $row->nama;?></td>
                <td><?php echo $row->ttl;?></td>
                <td><?php echo $row->bagian;?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <?php
        echo "$pagination";

        }else{
            echo "Maaf data belum ada";    
        }
        ?>
    </div>
</div>
</div>

<?php $this->load->view('layout/footer') ?>

<script type="text/javascript">
$(document).ready(function() {
  $("#mainNav li#navKaryawan").addClass('active');
})
</script>

</body>

</html>
