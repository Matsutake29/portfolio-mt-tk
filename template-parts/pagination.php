<?php
$pagination = paginate_links([
  'type'      => 'array',
  'prev_text' => '&lt;',
  'next_text' => '&gt;',
]);

if ($pagination) :
?>
<nav class="c-pagination" aria-label="ページナビゲーション">
  <ul class="c-pagination__list">
    <?php foreach ($pagination as $page) : ?>
      <li class="c-pagination__item"><?php echo $page; ?></li>
    <?php endforeach; ?>
  </ul>
</nav>
<?php endif; ?>
