<h1>Aktualności</h1>

<table class="blog" cellpadding="0" cellspacing="0">
  <tbody>
    <?php foreach($articles as $article): ?>
      <?php include_partial('tdSampleArticle/article', array('article' => $article, 'mode' => 'multi')) ?>
    <?php endforeach; ?>
  </tbody>
</table>