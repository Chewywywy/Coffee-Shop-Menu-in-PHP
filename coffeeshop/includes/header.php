<?php require_once __DIR__ . '/../dbconfig.php'; $page = $page ?? ''; $f = flash(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title ?? 'Coffee Shop') ?> | Bean Counter</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/style.css">
</head>
<body>
<header class="top">
  <a class="brand" href="<?= BASE_URL ?>/index.php">Bean Counter</a>
  <nav>
    <a class="<?= $page==='home' ? 'on' : '' ?>" href="<?= BASE_URL ?>/index.php">Menu overview</a>
    <a class="<?= $page==='cat' ? 'on' : '' ?>" href="<?= BASE_URL ?>/categories/list.php">Categories</a>
    <a class="<?= $page==='item' ? 'on' : '' ?>" href="<?= BASE_URL ?>/items/list.php">Menu items</a>
  </nav>
</header>
<main>
<?php if ($f): ?><div class="flash <?= e($f[1]) ?>"><?= e($f[0]) ?></div><?php endif; ?>
