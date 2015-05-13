
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php //$repeat = the_field('wireframes',17) ?>
		<?php $list = get_field('wireframes',17); ?>
		<?php $images = $list[count($list)-1]['files']; ?>
		<?php// debug($list[count($list)-1]); ?>

<?php
		if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>
							<div class="item active">
		                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		                <p><?php echo $image['caption']; ?></p>
		            </div>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript">
$('.carousel').carousel()

</script>
