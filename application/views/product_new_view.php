<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Yeni Ürün Ekleyin</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="<?=base_url()?>product">
                <i class="fas fa-arrow-circle-left"></i> GERİ</a>
        </div>
    </div>
</div>

<div class="row m-t-25">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Yeni Ürün Ekle</strong>
            </div>
            <div class="card-body card-block">
                    <form action="<?=base_url()?>Product/save_new" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Ürün Kodu</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="item_code" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Marka</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="brand" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Ürün Adı</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Kategori</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="category" class="form-control">
                        </div>
                        </div>
                        <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Durum</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="status" class="form-control">
                        </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Eklenme Tarihi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="create_at" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Güncellenme Tarihi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="update_at" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">KDV(%)</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="kdv" class="form-control">
                        </div>
                        </div>
                        <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Stok</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="stock" class="form-control">
                        </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-plus-circle"></i> EKLE</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>