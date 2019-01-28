<div class="container-fluid">
    <div class="block-header">
        <h2> Daftar Pelanggan </h2>
    </div>
<div class="header">
    <?php
        $notifikasi = $this->session->flashdata('notif');
        if ($notifikasi != null) 
        {
            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
        }
    ?>
    <div class="body">
        <form id="form_validation" method="post" action="<?= base_url('index.php/pelanggan/SendDataPelanggan');?>">
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="NamaPelanggan">
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="NoTelp">
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="Username">
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password">
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <textarea name="Alamat" class="form-control no-resize" cols="30" rows="5"></textarea>
                    <label class="form-label">Description</label>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
        </form>
    </div>
</div>