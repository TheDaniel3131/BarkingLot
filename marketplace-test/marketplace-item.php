<?php

function pet_item($productid, $productname, $product_new_price, $product_old_price, $productimg, $product_detail) {
	$element="
	<form action=\"marketplace.php\" method=\"post\">
		<div class = \"item\">
		    <div class = \"item-img\">
		        <img src = \"$productimg\">
		        <div class = \"icon-list\">
		            <button type = \"button\">
		                <i class = \"fas fa-sync-alt\"></i>
		            </button>
		            <button type = \"button\" name= \"add_to_cart\">
		                <i class = \"fas fa-shopping-cart\"></i>
		            </button>
		            <button type = \"button\">
		                <i class = \"far fa-heart\"></i>
		            </button>
		        </div>
		    </div>
		    <div class = \"item-detail\">
		        <a href = \"marketplace.php\" class = \"item-name\">$productname</a>
		        <div class = \"item-price\">
		            <span class = \"new-price\">$$product_new_price/-</span>
		            <span class = \"old-price\">$$product_old_price</span>
		        </div>
		        <p>$product_detail</p>
		        <button type = \"button\" class = \"add-btn\" name= \"add_to_cart\">add to cart</button>
		        
		        <input type = \"hidden\" class = \"product-id\" name= \"product_id\" value=\"$productid\">
		        <input type = \"hidden\" class = \"product-name\" name= \"product_name\" value=\"$productname\">
		        <input type = \"hidden\" class = \"product-new-price\" name= \"product_new_price\" value=\"$product_new_price\">
		        <input type = \"hidden\" class = \"product-old-price\" name= \"product_old_price\" value=\"$product_old_price\">
		        <input type = \"hidden\" class = \"product-image\" name= \"product_image\" value=\"$productimg\">
		        <input type = \"hidden\" class = \"product-new-price\" name= \"product_new_price\" value=\"$product_detail\">
	    	</div>
		</div>
	</form>

	";
	echo $element;

}

function cartElement($productimg, $productname, $productprice, $productdetail) {
	$element = "
	<form action=\"cart.php\" method=\"get\" class=\"cart-items\">
        <div class=\"card mb-3\">
          	<div class=\"card-body\">
            	<div class=\"d-flex justify-content-between\">
              		<div class=\"d-flex flex-row align-items-center\">
                		<div>
                  			<img src=\"$productimg\" class=\"img-fluid rounded-3\" alt=\"Shopping item\" style=\"width: 65px;\">
                	    </div>
                	    <div class=\"ms-3\">
                	      	<h5>$productname</h5>
                	      	<p class=\"small mb-0\" style=\"display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 13ch;\">$productdetail</p>
                	    </div>
                	</div>
                	<div class=\"d-flex flex-row align-items-center\">
                		<button type=\"button\" class=\"btn bg-white border rounder-cicle m-0\"><i class=\"icon fas fa-minus\" style=\"font-size:10px;\"></i></button>
                	   	<div>
                	   		<input type=\"text\" name=\"form-control w-25 d-inline\" value=\"1\" style=\"width: 40px;text-align: center;font-size:19px;\">

                	    </div>
                	    <button type=\"button\" class=\"btn bg-white border rounder-cicle m-0\"><i class=\"icon fas fa-plus\" style=\"font-size:10px;\"></i></button>
                	    <div style=\"width: 100px;\">
                	      	<h5 class=\"mb-0 ml-3\">$$productprice</h5>
                	    </div>
                	    <a href=\"#!\" style=\"color: #cecece;\" name=\"remove\"><i class=\"fas fa-trash-alt\"></i></a>
                 	</div>
                </div>
            </div>
        </div>
    </form>
	";
	echo $element;
}
?>