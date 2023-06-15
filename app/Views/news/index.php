<div class="container title-news mr-auto">
  <h1><?= esc($title) ?></h1>
  <div class="row">
    <?php if (! empty($news) && is_array($news)): ?>
      <?php foreach ($news as $news_item): ?>
        <div class="col-4">
          <h3><?= esc($news_item['title']) ?></h3>

          <div class="main">
              <?= esc($news_item['body']) ?>
          </div>
          <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
        </div>
      <?php endforeach ?>
    <?php else: ?>
    <h3>No News</h3>

    <p>Unable to find any news for you.</p>
    <?php endif ?>
  </div>
  <p>Page rendered in {elapsed_time} seconds</p>
  <button type="button" class="btn btn-link">Link</button>
  <button type="button" class="btn btn-primary btn-lg">Botão grande</button>
  <button type="button" class="btn btn-secondary btn-lg">Botão grande</button>
</div>
