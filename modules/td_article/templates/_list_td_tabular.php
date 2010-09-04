<td class="sf_admin_boolean sf_admin_list_td_active" id="article_is_active_column_<?php echo $td_article->getId() ?>">
  <?php echo get_partial('td_article/list_field_boolean', array('value' => $td_article->getActive())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $td_article->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_author">
  <?php echo $td_article->getAuthor() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_text">
  <?php echo $td_article->getText() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($td_article->getCreatedAt()) ? format_date($td_article->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($td_article->getUpdatedAt()) ? format_date($td_article->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
