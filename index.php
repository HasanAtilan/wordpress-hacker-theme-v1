<?php get_header(); ?>
  <main class="cell -9of12">
          <div>
  <section>
    <h1>/home</h1>
  </section>
    <h2>BugReseArcher</h2>
    <h2>son yazilar:</h2>
  <section>
  
<?php $i=1; if (have_posts()) : while (have_posts($i<=get_option('posts_per_page'))) : the_post(); ?>


	  
     <div class="media t-hackcss-media" style="
    padding: 4px;
">
      <div class="media-body">
        <div class="media-heading">
          <span> &raquo;
              <a href="<?php the_permalink() ?>" title="">
                <?php the_title(); ?>
              </a>
          </span>
        </div>
        <div class="media-content">
		
          <?php the_content();?>
        </div>
      </div>
	  
		$Yazar == <a>$<?php the_author(''); ?>;</a> -- $Saat == <a><?php echo get_the_time(); ?>;</a> -- $Etiketler == <a>$<?php the_tags(''.__('').'',',',''); ?></a>


     </section>
</div>
  


  


<?php $i++; endwhile; else: ?>
<?php endif; ?>



        </main>
      </div>

<?php get_footer(); ?>