<?php
$page = 'cat'; $title = 'Categories';
require '../includes/header.php';

$cats = $pdo->query("
    SELECT c.*, COUNT(m.item_id) AS item_count
    FROM categories c
    LEFT JOIN menu_items m ON m.category_id = c.category_id
    GROUP BY c.category_id
    ORDER BY c.category_id
")->fetchAll();
?>
<div class="head">
  <div><h1>Categories</h1><p>The parent records. Each one can have many menu items.</p></div>
  <a class="btn" href="add.php">Add category</a>
</div>
<div class="panel">
<?php if (!$cats): ?><div class="empty">No categories yet. Add one to get started.</div><?php else: ?>
<table>
  <tr><th>ID</th><th>Category</th><th>Description</th><th class="num">Items</th><th></th></tr>
  <?php foreach ($cats as $c): ?>
  <tr>
    <td><?= $c['category_id'] ?></td>
    <td><strong><?= e($c['category_name']) ?></strong></td>
    <td><?= e($c['description']) ?></td>
    <td class="num"><span class="badge"><?= $c['item_count'] ?></span></td>
    <td class="act">
      <a class="btn ghost sm" href="edit.php?id=<?= $c['category_id'] ?>">Edit</a>
      <a class="btn danger sm" href="delete.php?id=<?= $c['category_id'] ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif; ?>
</div>
<?php require '../includes/footer.php'; ?>
