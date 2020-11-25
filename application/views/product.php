
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1"></h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="<?=base_url()?>product/new">
                <i class="zmdi zmdi-plus"></i>Ürün Ekle</a>
        </div>
    </div>
</div>

<table id="product_table" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th> Ürün Kodu    </th>
            <th> Marka        </th>
            <th> Ürün Adı     </th>
            <th> Katagori     </th>
            <th> Durum        </th>
            <th> Eklenme T.   </th>
            <th> Günelleme T. </th>
            <th> KDV(%)       </th>
            <th> Stok         </th>
            <th> İşlemler     </th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach($products as $key) { ?>
			<tr>
            	<td> <?=$key->item_code?> </td>
            	<td> <?=$key->brand?>	  </td>
            	<td> <?=$key->name?>	  </td>
            	<td> <?=$key->category?>  </td>
            	<td> <?=$key->status?>	  </td>
            	<td> <?=$key->create_at?> </td>
            	<td> <?=$key->update_at?> </td>
            	<td> <?=$key->kdv?>       </td>
            	<td> <?=$key->stock?>     </td>
            	<td>
                    <a href="<?=base_url()?>product/detail/<?=$key->item_code?>" title="Ürün Detayı">
                        <i class="fa fa-search"></i>
                    </a>
    			    <a href="<?=base_url()?>product/update/<?=$key->item_code?>" title="Düzenleyin">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
    			    <a href="<?=base_url()?>product/delete/<?=$key->item_code?>" title="Silin">
    			    	<i class="fas fa-trash-alt" onclick="return confirm('Silmek istediğinizden emin misiniz?')")></i>
    			    </a>
            	</td>
       		</tr>			
		<?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th> Ürün Kodu    </th>
            <th> Marka        </th>
            <th> Ürün Adı     </th>
            <th> Katagori     </th>
            <th> Durum        </th>
            <th> Eklenme T.   </th>
            <th> Günelleme T. </th>
            <th> KDV(%)       </th>
            <th> Stok         </th>
            <th> İşlemler     </th>
        </tr> 
    </tfoot>
</table>
