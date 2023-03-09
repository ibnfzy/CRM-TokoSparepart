<?php $pager->setSurroundCount(4); ?>

<div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
  <nav aria-label="...">
    <ul class="pagination">
      <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
          <a href="<?= $pager->getPrevious() ?>" class="page-link">Previous</a>
        </li>
      <?php else : ?>
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
      <?php endif ?>

      <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'aria-current="page"' : '' ?> class="page-item <?= $link['active'] ? 'active' : '' ?>">
          <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
        </li>
      <?php endforeach ?>

      <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getNext() ?>">Next</a>
        </li>
      <?php else : ?>
        <li class="page-item disabled">
          <a class="page-link">Next</a>
        </li>
      <?php endif ?>
    </ul>
  </nav>
</div>