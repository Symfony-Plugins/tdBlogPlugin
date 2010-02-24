<?php use_helper('Date') ?>

<tr>
    <td valign="top">
        <div>
            <table class="contentpaneopen">
                <tbody>
                    <tr>
                        <td class="contentheading" width="100%">
                            <?php echo $article['title'] ?>
                            <div>
                                <div class="small">
                                    <span class="small">
                                        autor: <?php echo $article['author_name'] ?>
                                    </span>
                                    &nbsp;&nbsp;
                                </div>
                                <div class="createdate">
                                    <?php echo (false !== strtotime($article['created_at']) ? format_date($article['created_at'], "f") : '&nbsp;') ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="contentpaneopen">
                <tbody>
                    <tr>
                        <td colspan="2" class="article_indent" valign="top">
                            <?php if ($article['image']) echo image_tag('/uploads/td/blog/'.$article['image'], array('align' => 'left', 'border' => 0)) ?>
                            <p><?php echo ($mode == 'multi' ? mb_substr($article['text'], 0, 500).'...' : $article['text']) ?><p>
                            <div class="modifydate">
                                Ostatnia data aktualizacji (<?php echo (false !== strtotime($article['updated_at']) ? format_date($article['updated_at'], "f") : '&nbsp;') ?>)
                            </div>
                            <div class="special">
                              <?php if($mode == 'multi'): ?>
                                <?php echo link_to('Czytaj więcej...', '@article?id='.$article['id'], array('class' => 'readon')) ?>
                              <?php else: ?>
                                <?php echo link_to('Powrót do aktualności...', '@articles', array('class' => 'readon')) ?>
                              <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span class="article_separator">&nbsp;</span>
        </div>
    </td>
</tr>