  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <nav class="social">
      <?php foreach (page('about')->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
  </footer>

</body>
</html>
