<?php
if($field['position_font']) {
Css::typography("#".$id." .jd-skilled-team .team-member-wrapper .team-member-info .member-designation", $field['position_font']);
}
?>
<?php
if($field['header_font']) {
Css::typography("#".$id." .jd-skilled-team .team-member-wrapper .team-member-info .member-name", $field['header_font']);
}
?>
<?php if($field['border']):?>
	#<?php echo $id; ?> .jd-skilled-team .team-member-wrapper .team-member-image {  
		<?php Css::prop("border-width", $field['border_width'] . 'px')?>
		<?php Css::prop("border-style", $field['border_style'])?>
		<?php Css::prop("border-color", $field['border_color'])?>
	}
<?php endif;?>

<?php if($field['icon_color']):?>
	#<?php echo $id; ?> .jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a {
	  color: <?php echo $field['icon_color']?> !important;
	}
<?php endif;?>

<?php if($field['icon_hover_color']):?>
	#<?php echo $id; ?> .jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a:hover {
	  background: <?php echo $field['icon_hover_color']?> !important;
	}
<?php endif;?>

<?php if($field['header_color']):?> 
	#<?php echo $id; ?> .jd-skilled-team .team-member-wrapper .team-member-info .member-name {
		color:<?php echo $field['header_color'] ?>;
	}
<?php endif;?>

<?php if($field['header_color']):?> 
	#<?php echo $id; ?> .jd-skilled-team .team-member-wrapper .team-member-info .member-designation {
		color:<?php echo $field['position_color'] ?>;
	}
<?php endif;?>
.img-circle { 
  border-radius:50% !important;
  -webkit-border-radius:50% !important;
  -moz-border-radius:50% !important;
  -ms-border-radius:50% !important;
  -o-border-radius:50% !important;
}
.img-rounded {
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}
.img-square {
  border-radius:1px !important;
  -webkit-border-radius:1px !important;
  -moz-border-radius:1px !important;
  -ms-border-radius:1px !important;
  -o-border-radius:1px !important;
}
.jd-skilled-team .team-member-wrapper {
  position: relative;
}
.jd-skilled-team .team-member-wrapper .team-member-image {
  position: relative;
  display: inline-block;
  overflow: hidden;
  text-align: center;
  max-height: 450px;
}
.jd-skilled-team .team-member-wrapper .team-member-image img {
  display: inline-block;
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile {
  background: #003;
  position: absolute;
  margin: auto;
  top: 50%;
  left: 50%;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
  -webkit-transform: translate(-50%, -50%) scale(0);
  -moz-transform: translate(-50%, -50%) scale(0);
  -ms-transform: translate(-50%, -50%) scale(0);
  -o-transform: translate(-50%, -50%) scale(0);
  transform: translate(-50%, -50%) scale(0);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 2;
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a {
  font-size: 22px;
  line-height: 38px;
  color: #fff;
  display: inline-block;
  height: 40px;
  width: 40px;
  text-align: center;
  margin: 0 5px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a:first-child {
  margin-left: 0;
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a:last-child {
  margin-right: 0;
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-social-profile > a:hover {
  background: #f39;
  -webkit-box-shadow: 0 0px 20px 1px #f6c;
  -moz-box-shadow: 0 0px 20px 1px #f6c;
  -ms-box-shadow: 0 0px 20px 1px #f6c;
  -o-box-shadow: 0 0px 20px 1px #f6c;
  box-shadow: 0 0px 20px 1px #f6c;
  -webkit-transform: scale(1.15);
  -moz-transform: scale(1.15);
  -ms-transform: scale(1.15);
  -o-transform: scale(1.15);
  transform: scale(1.15);
}
.jd-skilled-team .team-member-wrapper .team-member-image .team-overly {
  background: #09f;
  border-radius: 10px;
  position: absolute;
  top: 10px;
  left: 10px;
  display: block;
  height: calc(100% - 20px);
  width: calc(100% - 20px);
  box-sizing: border-box;
  opacity: 0;
  visibility: hidden;
  z-index: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.jd-skilled-team .team-member-wrapper .team-member-image:hover .team-social-profile {
  -webkit-transform: translate(-50%, -50%) scale(1);
  -moz-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  -o-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}
.jd-skilled-team .team-member-wrapper .team-member-image:hover .team-overly {
  opacity: 0.6;
  visibility: visible;
}
.jd-skilled-team .team-member-wrapper .team-member-info .member-name {
  margin: 0 0 10px;
}
.jd-skilled-team .team-member-wrapper .team-member-info .member-designation {
  margin: 0;
}