    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Bilgileri Güncelleyin</h2>
                <a class="au-btn au-btn-icon au-btn--blue" href="<?=base_url()?>product">
                    <i class="fas fa-arrow-circle-left"></i> GERİ</a>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Ürün Bilgilerini Güncelleme</strong>
        </div>
        <div class="card-body card-block">
            <?php foreach($product as $key) { ?>
                <form action="<?=base_url()?>Product/save_update" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Ürün Kodu</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"><?=$key->item_code?></p>
                            <input type="hidden" name="item_code" value="<?=$key->item_code?>" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Marka</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="brand" value="<?=$key->brand?>" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Ürün Adı</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="name" value="<?=$key->name?>" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Kategori</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="category" value="<?=$key->category?>" class="form-control">
                    </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Durum</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="status" value="<?=$key->status?>" class="form-control">
                    </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Eklenme Tarihi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"><?=$key->create_at?></p>
                            <input type="hidden"  name="create_at" value="<?=$key->create_at?>" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Güncellenme Tarihi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"><?=$key->update_at?></p>
                            <input type="hidden"  name="update_at" value="<?=$key->update_at?>" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">KDV(%)</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="kdv" value="<?=$key->kdv?>" class="form-control">
                    </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Stok</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="stock" value="<?=$key->stock?>" class="form-control">
                    </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-edit"></i> GÜNCELLE</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>