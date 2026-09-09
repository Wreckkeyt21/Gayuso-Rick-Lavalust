<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0d1b2a; color: #e0e1dd; padding: 40px; text-align: center; }
        form { width: 400px; margin: 0 auto; background: #1b263b; padding: 30px; border-radius: 10px; text-align: left; }
        label { display: block; margin-top: 12px; font-size: 14px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; border-radius: 4px; border: none; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 20px; background: #f4a261; color: #0d1b2a; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        a { color: #00b4d8; display: block; margin-top: 14px; }
    </style>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="<?= site_url('products/update/'.$product['id']) ?>" method="POST">
        <label>Product Name</label>
        <input type="text" name="product_name" value="<?= $product['product_name'] ?>" required>

        <label>Description</label>
        <textarea name="description" rows="3"><?= $product['description'] ?></textarea>

        <label>Price</label>
        <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required>

        <label>Quantity</label>
        <input type="number" name="quantity" value="<?= $product['quantity'] ?>" required>

        <button type="submit">Update Product</button>
    </form>
    <a href="<?= site_url('products') ?>">← Back to list</a>
</body>
</html>