<?php
$items = array_chunk($items, (12/$field['column']));

?>
<!-- qx-element-joomla-article -->
<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" <?php echo $animation_delay; ?>>
    <?php foreach ($items as $col) : ?>
        <div class="qx-row">
          <?php foreach( $col as $item):?>
            <div class="qx-col-md-<?php echo $field['column']?>">
              <?php $images = json_decode($item->images); ?>
              <div class="qx-media-grid">
                <div class="qx-media-inner">
                  <?php if ($params->get('show_image') == 1 AND !empty($images->image_intro) ) : ?>
                    <?php if(isset($images->image_intro)) : ?>
                      <figure>
                        <img class="qx-img-responsive" src="<?php echo JURI::base().$images->image_intro; ?>" alt="<?php echo $images->image_intro_alt; ?>">
						<?php if ( $field['show_hits'] ) : ?>
						<span class="qx-element-jarticle-hitsby">      
							 <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="<?php echo $item->hits; ?>"><i class="fa fa-eye"></i><?php if ( $field['show_meta_icon'] ) : ?></button>
							<?php endif; ?>
							
						</span>
					<?php endif;?>
                      </figure> <!-- end of media -->
                    <?php endif; ?>
                  <?php endif; ?> <!--//end show_image-->
                  <div class="qx-media-body">
						<div class="post-meta">

							<?php if ( $field['show_date'] ) : ?>
							  <?php $date = new DateTime($item->displayDate); ?>

							  <span class="qx-element-jarticle-date pull-left">
								<?php if ( $field['show_meta_icon'] ) : ?>
								<?php endif; ?>
								<?php echo $date->format($field['date_format']); ?>

							  </span>
							<?php endif; ?>
							
							<?php if ($item->displayCategoryTitle) : ?>
							  <span class="qx-element-jarticle-category">
								<?php if ( $field['show_meta_icon'] ) : ?>
								  <i class="fa fa-folder-open"></i>
								<?php endif; ?>
								<?php echo $item->displayCategoryTitle; ?>
							  </span>
							<?php endif; ?>
						</div><!--/.post-meta-->
                    <h4 class="qx-media-heading">
                      <?php if ( $field['link_titles'] ) : ?>
                        <a href="<?php echo $item->link; ?>">
                          <?php echo $item->title; ?>
                        </a>
                      <?php else : ?>
                        <?php echo $item->title; ?>
                      <?php endif; ?>
                    </h4>
                    <div class="qx-element-jartil-details">
                      <?php if ( $field['show_introtext'] ) : ?>
                        <p class="qx-element-jarticle-introtext">
                          <?php echo $item->displayIntrotext; ?>
                        </p>
                      <?php endif; ?>

                      <?php if ( $field['show_readmore'] ) : ?>
                        <a class="qx-btn <?php echo $field['readmore_style'];?>" href="<?php echo $item->link; ?>">
                          <?php echo $field['readmore_text']; ?>
                        </a>
                      <?php endif; ?>
					  
						<?php if ( $field['show_author'] ) : ?>
							<span class="qx-element-jarticle-writtenby">
								<?php if ( $field['show_meta_icon'] ) : ?>
								  <i class="fa fa-user"></i>
								<?php endif; ?>
								<?php echo $item->displayAuthorName; ?>
							</span>
						<?php endif;?>

                    </div><!--/.details-->
                  </div> <!-- media-body end -->
                </div> <!-- media-inner end-->
              </div> <!-- media end -->
            </div>
          <?php endforeach;?>
        </div>
    <?php endforeach; ?>
</div>