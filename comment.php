<div id="kommentar_formular">

<h3 id="respond">Schreibe einen Kommentar:</h3>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments.php" method="post" id="commentform">
        <p>
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
            <label for="author">Name</label>
        </p>
        
        <p>
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
            <label for="email">E-Mail<small>(wird nicht ver&ouml;ffentlicht)</small></label>
        </p>
</div>
