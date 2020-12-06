<!-- header -->
<?php $this->load->view('layout/header') ?>

<div class="container">
<div class="row">
    <div class="col-md-12">      
    <?php
    if(!empty($pesan)) {
        echo $pesan;
    }
    ?>
    </div>
</div>
</div>       
<br />

<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>MASUK</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="        <?php echo site_url('login');?>" method="post">
                    <?php echo $this->session->flashdata('message');?>
                    <div class="form-group">
                        <p class="col-sm-3">Nama Pengguna </p>
                        
                        <div class="col-sm-9">
                           <?php echo form_error('username'); ?>
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Nama Pengguna" value="<?php echo set_value('username'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <p class="col-sm-3">Kata Sandi </p>
                        <div class="col-sm-9">
                            <?php echo form_error('password'); ?>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Kata Sandi" value="<?php echo set_value('password'); ?>">
                        </div>
                    </div>
                   
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
    
</div>
</div>

<?php $this->load->view('layout/footer') ?>
<script type="text/javascript">
$(document).ready(function() {
  $("#mainNav li#navHome").addClass('active');
})
</script>

</body>
</html>