<!DOCTYPE html>
<html>
<head>
    <title><?= $page_title ?></title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0d1b2a; color: #e0e1dd; text-align: center; padding-top: 80px; }
        h1 { color: #00b4d8; }
        .status { display: inline-block; padding: 6px 16px; border-radius: 20px; font-weight: bold; margin: 10px 0 20px; }
        .status.on { background: #2a9d8f; color: #0d1b2a; }
        .status.off { background: #e63946; color: #fff; }
        a.btn { display: inline-block; margin: 10px; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold; }
        .btn-profile { background: #00b4d8; color: #0d1b2a; }
        .btn-login { background: #2a9d8f; color: #0d1b2a; }
        .btn-logout { background: #e63946; color: #fff; }
        a.btn:hover { opacity: 0.85; }
    </style>
</head>
<body>
    <h1>👋 Welcome to <?= $page_title ?></h1>
    <p>BSIT 3rd Year — Section F1</p>

    <?php if ($is_logged_in): ?>
        <div class="status on">🟢 Logged In</div>
    <?php else: ?>
        <div class="status off">🔴 Logged Out</div>
    <?php endif; ?>

    <br>

    <a class="btn btn-profile" href="<?= site_url('student/profile') ?>">View Profile (Protected)</a>

    <?php if ($is_logged_in): ?>
        <a class="btn btn-logout" href="<?= site_url('student/logout') ?>">Logout</a>
    <?php else: ?>
        <a class="btn btn-login" href="<?= site_url('student/login') ?>">Login</a>
    <?php endif; ?>
</body>
</html>