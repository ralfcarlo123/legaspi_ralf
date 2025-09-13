<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student</title>
  <?php require __DIR__.'/_styles.php'; ?>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="title">Student <span class="badge"><?php echo count($rows ?? []); ?> total</span></div>
      <a class="btn btn-primary" href="<?php echo site_url('people/create'); ?>">Add Student</a>
    </div>

    <div class="card">
      <table class="table">
        <thead>
          <tr>
            <th style="width:70px;">ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th style="width:180px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($rows)): ?>
            <?php foreach ($rows as $r): ?>
              <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo htmlspecialchars($r['first_name']); ?></td>
                <td><?php echo htmlspecialchars($r['last_name']); ?></td>
                <td><?php echo htmlspecialchars($r['email']); ?></td>
                <td class="row-actions">
                  <a class="link" href="<?php echo site_url('people/edit/'.$r['id']); ?>">Edit</a>
                  <a class="link" href="<?php echo site_url('people/delete/'.$r['id']); ?>" onclick="return confirm('Delete this record?')">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr><td colspan="5" class="empty">No records found</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
