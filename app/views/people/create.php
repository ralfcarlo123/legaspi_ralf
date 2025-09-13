<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Person</title>
  <?php require __DIR__.'/_styles.php'; ?>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="title">Add Person</div>
      <a class="btn btn-ghost" href="<?php echo site_url('people'); ?>">Back</a>
    </div>

    <div class="card">
      <form class="form" method="post" action="<?php echo site_url('people/create'); ?>">
        <div>
          <label class="label">First name</label>
          <input class="input" type="text" name="first_name" required>
        </div>
        <div>
          <label class="label">Last name</label>
          <input class="input" type="text" name="last_name" required>
        </div>
        <div>
          <label class="label">Email</label>
          <input class="input" type="email" name="email" required>
        </div>
        <div class="actions">
          <button class="btn btn-primary" type="submit">Save</button>
          <a class="btn btn-ghost" href="<?php echo site_url('people'); ?>">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
