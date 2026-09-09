<!DOCTYPE html>
<html>
<head>
    <title>Login — Product Management</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0d1b2a; color: #e0e1dd; padding-top: 100px; text-align: center; }
        form { width: 320px; margin: 0 auto; background: #1b263b; padding: 30px; border-radius: 10px; text-align: left; }
        h1 { color: #00b4d8; }
        label { display: block; margin-top: 12px; font-size: 14px; }
        input { width: 100%; padding: 8px; margin-top: 4px; border-radius: 4px; border: none; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 20px; width: 100%; background: #2a9d8f; color: #0d1b2a; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
        .msg { color: #e63946; margin-top: 10px; font-size: 14px; }
    </style>
</head>
<body>
    <h1>🔐 Login</h1>
    <form action="<?= site_url('login/authenticate') ?>" method="POST">
        <?php if (isset($_SESSION['login_message'])): ?>
            <p class="msg"><?= $_SESSION['login_message']; unset($_SESSION['login_message']); ?></p>
        <?php endif; ?>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>