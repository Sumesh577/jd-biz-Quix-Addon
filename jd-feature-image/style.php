<?php if($field['border']):?>
  #<?php echo $id;?> #jd-featured-image {
    <?php Css::prop('border-style', $field['border_style']);?>
    <?php Css::prop('border-color', $field['border_color']);?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
 }
<?php endif;?>

<?php if( $field['border_hover_color'] ):?>
  #<?php echo $id;?> #jd-featured-image:hover {
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

<?php if( $field['content_bgcolor'] ):?>
  #<?php echo $id;?>  .jd-featured-image .featured-box-wrapper .featured-box-body{
    <?php Css::prop('background', $field['content_bgcolor']);?>
  }
<?php endif;?>