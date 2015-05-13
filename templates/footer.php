<footer class="content-info" role="contentinfo">

  <div class="container">
  <div class="row">
  <div class="col-lg-16">
  	  <div class="col-sm-6">
  	  	<a href="#page">Back to Top <i class="glyphicon glyphicon-chevron-up"></i></a>
  	  </div>
  	<ul class="col-sm-6">
  		<li><i class="fa fa-facebook"></i></li>
  		<li><i class="fa fa-twitter"></i></li>
  		<li><i class="fa fa-linkedin"></i></li>
  	</ul>
  </div>
  </div>
  <?php
      if (has_nav_menu('footer')) :
        wp_nav_menu(['theme_location' => 'footer']);
      endif;
      ?>
 </div>
  	
  </div>
    <?php // dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <?php //get_template_part('templates/part-dev-ribbon'); ?>
  <?php get_template_part('templates/content-manager/page-single-approval'); ?>
 

</div>
</div>
</footer>
