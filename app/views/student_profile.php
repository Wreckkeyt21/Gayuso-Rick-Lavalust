<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #1b263b; color: #e0e1dd; text-align: center; padding-top: 60px; }
        .card { background: #0d1b2a; display: inline-block; padding: 30px 50px; border-radius: 12px; border: 2px solid #00b4d8; }
        h1 { color: #00b4d8; }
        p { text-align: left; }
        a { color: #00b4d8; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>
        <p><strong>Student ID:</strong> <?= $student_id ?></p>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>
        <p><strong>Year Level:</strong> <?= $year ?></p>
        <p><strong>Section:</strong> <?= $section ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
        <p><em>"<?= $quote ?>"</em></p>
        <br>
        <a href="<?= site_url('student') ?>">← Home</a>
    </div>
</body>
</html>