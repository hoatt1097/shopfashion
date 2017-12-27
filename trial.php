<?php 
  include 'database.php';
  $dt = new Database;
  $dt -> select("SELECT * FROM product WHERE category_id = 4 or category_id = 5 or category_id = 6 ORDER BY name DESC");
  while( $r = $dt->fetch() )
  {
    $name = $r["name"];
    $price = $r["price"];
    if( $r["price"] == "null" )
    {
      $price = "Liên hệ mua hàng";
    }
    $link = $r["image_link"];  
    $sale = $r["sale"];
    $image_id = $r["image_id"];
?>

                <div class="product_single col-xs-6 col-md-3">
                  <div class="product product_one clearfix ">
                    <div class="product-image">
                      <img src="<?=$link?>" alt="">
                      <div class="quick_action clearfix">
                        <a href="" title="Lựa chọn"  class="btn-shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                        <a href="" itemprop="<?=$image_id?>" title="Xem nhanh" class="btn-quicklook"><i class="fa fa-eye"></i></a>
                      </div>
                      <?php
                        if($sale != 0)
                        {
                      ?>
                          <div class="sale-flash">-<?=$sale?>%</div>
                      <?php
                        }
                      ?>
                    </div>
                    <div class="product-desc">
                          <div class="product-title">
                            <h3>
                              <a href="" itemprop="<?=$image_id?>" title="<?=$name?>">
                              <p><?=$name?></p>
                              </a>
                            </h3>
                          </div>
                          <div class="product-price">
                            <ins><?=$price?></a></ins>
                          </div>
                    </div>
                  </div>
                </div>  
<?php   
	}     
?>