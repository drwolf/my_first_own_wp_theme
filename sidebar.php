<h2>Über mich</h2>
<p class="mini_about">Seit 2007 erstelle und pflege ich Webseiten in Wordpress für gemeinnützige Organisationen in Berlin, 
<a href="http://londonchurch.org.uk/">London</a>, Tallinn, <a href="http://bostonicc.org/">Boston</a>, <a href="http://amsterdamicc.org/">Amsterdam</a>, <a href="http://joburgicc.org">
Johannesburg</a> uvm. und war oder bin als Berater für diese Seiten tätig.</p> 
<?php get_search_form(); ?>
<h2> Themen </h2>
<ul>
      <?php wp_list_categories('show_count=1&order=desc&title_li='); ?>
</ul>
<h2>Letzte Artikel</h2>

      <?php wp_get_archives('type=monthly');  ?>


	