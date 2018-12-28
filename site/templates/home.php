<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $site->title() ?></h1>
  </header>

  <ul class="grid">
    <?php foreach (page('photography')->children()->listed() as $album): ?>
    <li>
      <a href="<?= $album->url() ?>">
        <figure>
          <?= $album->cover()->toFile()->resize(1024, 1024) ?>
          <figcaption>
            <span>
              <span class="example-name"><?= $album->title() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>
