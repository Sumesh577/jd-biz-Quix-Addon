<?php
// Icon
Css::fontSize(".media-icon", $field['icon_font_size']);
?>
.jd-services .jd-services-wrapper .flipper-box-wrapper:hover .card-body .box-content p{
  color:white;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper:hover .card-body .box-content <?php echo $field['title_tag'];  ?>{
  color:white;
}
<?php if($field['bg_color']):?>
  .jd-services .jd-services-wrapper .flipper-box-wrapper {
    <?php Css::prop("background", $field['bg_color'])?>
}
<?php endif;?> 
<?php if($field['border']):?>
  #<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper {
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
    <?php Css::prop("border-style", $field['border_style'])?>
    <?php Css::prop("border-color", $field['border_color'])?>
    -webkit-border-radius: <?php echo $field['border_radius']; ?>
    -moz-border-radius: <?php echo $field['border_radius']; ?>
    -ms-border-radius: <?php echo $field['border_radius']; ?>
    -o-border-radius: <?php echo $field['border_radius']; ?>
  }
<?php endif;?> 
.jd-services .jd-services-wrapper .flipper-box-wrapper:hover {
  color:white;
}
<?php if($field['body_color']):?>
  #<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-content p{
    <?php Css::prop("color", $field['body_color'])?>
  }
<?php endif;?> 
<?php if( $field['bg_hover_color'] OR $field['border_hover_color'] ):?>
	#<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper:hover{
      <?php Css::prop('background', $field['bg_hover_color']);?>
      <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>
<?php if($field['header_color']):?>
	#<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-content .card-title{
		<?php Css::prop("color", $field['header_color'])?>
  }
<?php endif;?> 
<?php if( $field['header_hover_color']):?>
   #<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-content .card-title:hover{
    <?php Css::prop('color', $field['header_hover_color']);?>
  }
<?php endif;?>
<?php if( $field['body_hover_color']):?>
  #<?php echo $id; ?> .jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-content p:hover{
    <?php Css::prop('color', $field['body_hover_color']);?>
  }
<?php endif;?>
.jd-services .jd-services-wrapper .flipper-box-wrapper {
	position: relative;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper .card-body {
	position: relative;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-icon {
	opacity: 1;
	visibility: visible;
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper .card-body .box-content {
	-webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	transform: translateY(0);
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper:hover .card-body .box-icon {
	opacity: 0;
	visibility: hidden;
}
.jd-services .jd-services-wrapper .flipper-box-wrapper:hover .card-body .box-icon+.box-content {
	-webkit-transform: translateY(-60px);
	-moz-transform: translateY(-60px);
	-ms-transform: translateY(-60px);
	-o-transform: translateY(-60px);
	transform: translateY(-60px);
}
@media (max-width: 991px) {
	.jd-services .jd-services-wrapper {
		-ms-flex-direction: column;
		flex-direction: column;
		display: block;
	}
	.jd-services .jd-services-wrapper .flipper-box-wrapper:last-child {
		margin-bottom: 0;
	}
}