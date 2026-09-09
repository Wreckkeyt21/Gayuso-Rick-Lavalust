<!DOCTYPE html>
<html>
<head>
    <title>Products — Gayuso</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0d1b2a; color: #e0e1dd; padding: 40px; }
        h1 { color: #00b4d8; text-align: center; }
        .top-bar { width: 90%; margin: 0 auto 20px; display: flex; justify-content: space-between; align-items: center; }
        table { width: 90%; margin: 0 auto; border-collapse: collapse; background: #1b263b; }
        th, td { padding: 12px 16px; text-align: left; border-bottom: 1px solid #334155; }
        th { background: #00b4d8; color: #0d1b2a; }
        a.btn { padding: 6px 14px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 14px; margin-right: 6px; }
        .btn-add { background: #2a9d8f; color: #0d1b2a; }
        .btn-edit { background: #f4a261; color: #0d1b2a; }
        .btn-delete { background: #e63946; color: #fff; }
        .btn-logout { background: #444; color: #fff; }
    </style>
</head>
<body>
    <div class="top-bar">
        <h1>📦 Products</h1>
        <div>
            <a class="btn btn-add" href="<?= site_url('products/create') ?>">+ Add Product</a>
            <a class="btn btn-logout" href="<?= site_url('logout') ?>">Logout</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Qty</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['product_name'] ?></td>
                <td><?= $p['description'] ?></td>
                <td>₱<?= number_format($p['price'], 2) ?></td>
                <td><?= $p['quantity'] ?></td>
                <td>
                    <a class="btn btn-edit" href="<?= site_url('products/edit/'.$p['id']) ?>">Edit</a>
                    <a class="btn btn-delete" href="<?= site_url('products/delete/'.$p['id']) ?>" onclick="return confirm('Delete this product?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>