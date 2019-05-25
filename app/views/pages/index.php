<?php require APPROOT. '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<ul>
  <?php foreach($data['pages'] as $page) : ?>
    <li><?php echo $page->id." ".$page->name; ?></li>
  <?php endforeach; ?>
</ul>
<?php require APPROOT. '/views/inc/footer.php'; ?>
