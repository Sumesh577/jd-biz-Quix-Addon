<?php
// Title
$title = $field['title'] ? $field['title'] : "Service"; 
// H1,H2,H3,H4,H5,H6
$tag = $field['title_tag']; 
// link type (on media, title , body)
$link_type = $field['link_type'];
// URL
$link_url = $field['link']['url'] ? $field['link']['url'] : ""; 
// link mode
$link_target = $field['link']['target'] ? $field['link']['url'] : "_self"; 
// content
$text = $field['content'] ? $field['content'] : "Lorem ipsum dolor sit amet timeam deleniti mnesarchum ex sed alii hinc dolores ad cum." ;
//Text
$_text=str_ireplace('<p>','',$text);

// Media
if( $field['icon_enabled'] ){
    $icon = get_icon($field);
    $media = '<i class="media-icon '.$icon['class'].'" style="margin-bottom:20px;color:'.$field['icon_color'].';"></i>';
}
elseif( $field['image'] ){
    $media = '<img class="media-image" src="'.$field['image'].'" alt="'.$field['image_alt_text'].'" style="margin-bottom:20px;"/>';
}
// Animation Class
$classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses);
$animation_class = ($field['animation']) ? 'wow ' . $field['animation'] : '';
// Hover animation
$hover_animation = ($field['hover_animation']) ? " qx-hvr-{$field['hover_animation']}" : '' ;
// Delay Animation option111
$animation_delay = (array_key_exists('animation_delay', $field)) ? $field['animation_delay'] : '';
// RTL detection
$direction = Jfactory::getDocument()->direction;
?>
<div id="<?php echo $id; ?>" class="<?php echo $classes;?> <?php echo $animation_class . $hover_animation?>" <?php echo ($field['animation']) ? 'data-wow-delay="'. $animation_delay .'s"' : '';?> dir="<?php echo $direction; ?>">
	<div class="jd-services">
		<?php if($link_type == "full_section") { ?> 
		<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
			<div class="card-deck jd-services-wrapper">
				<div class="card flipper-box-wrapper">
					<div class="card-body box-flipper p-4">
						<div class="box-icon"><?php echo $media; ?></div>
						<div class="box-content">
							<<?php echo $tag; ?> class="card-title"><?php echo $title; ?></<?php echo $tag; ?>>
							<p class="card-text"><?php echo $_text; ?></p>
						</div>
					</div><!-- End flipper fornt -->
				</div> <!-- End flipper box wrapper --> 
			</div>
		</a>
	<?php  } ?>
	<?php if($link_type == "only_title") { ?>
		<div class="card-deck jd-services-wrapper">
			<div class="card flipper-box-wrapper">
				<div class="card-body box-flipper">
					<div class="box-icon"><?php echo $media; ?></div>
					<div class="box-content">
						<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
						<<?php echo $tag; ?> class="card-title"><?php echo $title; ?></<?php echo $tag; ?>></a>
						<p class="card-text"><?php echo $_text; ?></p>
					</div>
				</div><!-- End flipper fornt -->
			</div><!-- End flipper box wrapper --> 
		</div>
	<?php } ?>
	</div>
</div>