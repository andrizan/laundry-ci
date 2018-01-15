<div class="block-header">
    <h2>BERANDA</h2>
</div>
<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" <?= $master; ?> >
        <a href="<?= site_url('kasir/p/data') ?>">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">KASIR/USER</div>
                    <div class="number count-to" data-from="0" data-to="<?= $kasir ?>" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" <?= $master; ?> >
        <a href="<?= site_url('konsumen/p/data') ?>">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">KONSUMEN</div>
                    <div class="number count-to" data-from="0" data-to="<?= $konsumen ?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" <?= $master; ?> >
        <a href="<?= site_url('paket/p/data') ?>">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">description</i>
                </div>
                <div class="content">
                    <div class="text">PAKET</div>
                    <div class="number count-to" data-from="0" data-to="<?= $paket ?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" <?= $master; ?> >
        <a href="<?= site_url('transaksi/p/data') ?>">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">payment</i>
                </div>
                <div class="content">
                    <div class="text">TRANSAKSI</div>
                    <div class="number count-to" data-from="0" data-to="<?= $transaksi ?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" <?= $laporan; ?> >
        <a href="<?= site_url('transaksi/p/laporan') ?>">
            <div class="info-box bg-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="content">
                    <div class="text">LAPORAN</div>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- #END# Widgets -->