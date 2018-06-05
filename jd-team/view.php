<?php 
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses);
  $animation_class = ($field['animation']) ? 'wow ' . $field['animation'] : '';
  // Hover animation
  $hover_animation = ($field['hover_animation']) ? " qx-hvr-{$field['hover_animation']}" : '' ;
  $animation_delay = (array_key_exists('animation_delay', $field)) ? $field['animation_delay'] : '';
?>
<div id="<?php echo $id; ?>" class="<?php echo $classes;?> <?php echo $animation_class . $hover_animation?>" <?php echo ($field['animation']) ? 'data-wow-delay="'. $animation_delay .'s"' : '';?>>
	<div class="jd-skilled-team">
	   <div class="col m-0 p-0">
			<div class="team-member-wrapper text-center">
				 <div class="team-member-image <?php echo $field['image_style']?> mb-2">
					  <img src="<?php echo $field['image']?>" alt="<?php echo $field['name']?>">
					  <div class="team-social-profile d-flex">
						  <?php if($field['social-f'])  { ?>
						   <a href="<?php  echo $field['social-f']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						  <?php } ?>
						  <?php if($field['social-t'])  { ?>
						   <a href="<?php  echo $field['social-t']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						   <?php } ?>
						   <?php if($field['social-i'])  { ?>
						   <a href="<?php  echo $field['social-i']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						   <?php } ?>
						   <?php if($field['social-g'])  { ?>
						   <a href="<?php  echo $field['social-g']; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						   <?php } ?>
					  </div><!-- End team social profile -->
					  <div class="team-overly"></div>
				 </div><!-- End Team member image -->
				 <div class="team-member-info">
					  <h4 class="member-name m-0"><?php echo $field['name']?></h4>
					  <p class="member-designation"><?php echo $field['position']?></p>
				 </div><!-- End Team Member info -->
			</div><!-- Team member wrapper -->
	   </div>
	</div>
</div>