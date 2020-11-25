<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Ürün Detay</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="<?=base_url()?>product">
                <i class="fas fa-arrow-circle-left"></i> GERİ</a>
        </div>
    </div>
</div>

<div class="row m-t-25">
	<div class="col-lg-6">
		<div class="au-card m-b-30">
		    <div class="au-card-inner">
			<img src="<?=base_url()?>assets/images/bg-01.jpg" >
	        </div>
	    </div>
	</div>
	
	<div class="col-lg-6">
		<div class="au-card m-b-30">
			<?php foreach($product as $key) { ?>
		    	<div class="au-card-inner">
					<div class="row form-group">
	        		    <div class="col col-md-3">
	        		        <label for="text-input" class=" form-control-label">Ürün Kodu</label>
	        		    </div>
	        		    <div class="col-12 col-md-9">
	        		        <p class="form-control-static"><?=$key->item_code?></p>
	        		    </div>
	        		</div>
	        		<div class="row form-group">
	        		    <div class="col col-md-3">
	        		        <label for="text-input" class=" form-control-label">Marka</label>
	        		    </div>
	        		    <div class="col-12 col-md-9">
	        		        <p class="form-control-static"><?=$key->brand?></p>
	        		    </div>
	        		</div>
	        		<div class="row form-group">
	        		    <div class="col col-md-3">
	        		        <label for="text-input" class=" form-control-label">Ürün Adı</label>
	        		    </div>
	        		    <div class="col-12 col-md-9">
	        		        <p class="form-control-static"><?=$key->name?></p>
	        		    </div>
	        		</div>
	        		<div class="row form-group">
	        		<div class="col col-md-3">
	        		    <label for="text-input" class=" form-control-label">Kategori</label>
	        		</div>
	        		<div class="col-12 col-md-9">
	        		    <p class="form-control-static"><?=$key->category?></p>
	        		</div>
	        		</div>
	        		<div class="row form-group">
	        		<div class="col col-md-3">
	        		    <label for="text-input" class=" form-control-label">Durum</label>
	        		</div>
	        		<div class="col-12 col-md-9">
	        		    <p class="form-control-static"><?=$key->status?></p>
	        		</div>
	        		</div>
	        		<div class="row form-group">
	        		    <div class="col col-md-3">
	        		        <label for="text-input" class=" form-control-label">Eklenme Tarihi</label>
	        		    </div>
	        		    <div class="col-12 col-md-9">
	        		        <p class="form-control-static"><?=$key->create_at?></p>
	        		    </div>
	        		</div>
	        		<div class="row form-group">
	        		    <div class="col col-md-3">
	        		        <label for="text-input" class=" form-control-label">Güncellenme Tarihi</label>
	        		    </div>
	        		    <div class="col-12 col-md-9">
	        		        <p class="form-control-static"><?=$key->update_at?></p>
	        		    </div>
	        		</div>
	        		<div class="row form-group">
	        		<div class="col col-md-3">
	        		    <label for="text-input" class=" form-control-label">KDV(%)</label>
	        		</div>
	        		<div class="col-12 col-md-9">
	        		    <p class="form-control-static"><?=$key->kdv?></p>
	        		</div>
	        		</div>
	        		<div class="row form-group">
	        		<div class="col col-md-3">
	        		    <label for="text-input" class=" form-control-label">Stok</label>
	        		</div>
	        		<div class="col-12 col-md-9">
	        		    <p class="form-control-static"><?=$key->stock?></p>
	        		</div>
	        		</div>
	        	</div>
	        <?php } ?>
	    </div>
	</div>
</div>