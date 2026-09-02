<!DOCTYPE html>
<html>
<head>
    <title>User Management — Gayuso</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0d1b2a; color: #e0e1dd; padding: 40px; }
        h1 { color: #00b4d8; text-align: center; }
        table { width: 90%; margin: 20px auto; border-collapse: collapse; background: #1b263b; }
        th, td { padding: 12px 16px; text-align: left; border-bottom: 1px solid #334155; }
        th { background: #00b4d8; color: #0d1b2a; }
        tr:hover { background: #24344d; }
    </style>
</head>
<body>
    <h1>User Management Module</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['username'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>