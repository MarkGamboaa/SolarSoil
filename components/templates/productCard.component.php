<article class="product-card">
    <div class="product-image"><?php echo $product['emoji']; ?></div>
    <h3 class="product-name"><?php echo $product['name']; ?></h3>
    <p class="product-description"><?php echo $product['description']; ?></p>
    <div class="product-price"><?php echo $product['price']; ?></div>
    <button class="add-to-cart-btn" onclick="addToCart('<?php echo $product['name']; ?>')">Add to Cart</button>
</article>