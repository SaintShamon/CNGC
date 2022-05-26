<?php 
    $has_map = get_sub_field('has_map');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $address = get_sub_field('address');
    $phone__fax = get_sub_field('phone__fax');
    $map = get_sub_field('map_iframe');
?>
<?php if($has_map == false): ?>
<section class="form_section section">
    <div class="container">
        <div class="main_block">
            <div class="col">
                <?php if($title): ?>
                <div class="title">
                    <h2><?php echo $title; ?></h2>
                </div>
                <?php endif; ?>
                <?php if($subtitle): ?>
                    <div class="subtitle">
                        <p><?php echo $subtitle; ?></p>
                    </div>
                <?php endif; ?>
                <div class="content_block">
                    <?php if($address): ?>
                    <div class="adres"><?php echo $address; ?></div>
                    <?php endif; ?>
                    <?php if($phone__fax): ?>
                        <?php echo $phone__fax ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col form">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php elseif($has_map == true): ?>
<section class="map section">
    <?php if($map): ?>
        <div class="map_block" id="googlemaps">
            <?php echo $map; ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="main_block">
            <div class="col">
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($subtitle): ?>
                    <div class="subtitle">
                        <p><?php echo $subtitle; ?></p>
                    </div>
                <?php endif; ?>
                <div class="content_block">
                    <?php if($address): ?>
                    <div class="adres"><?php echo $address; ?></div>
                    <?php endif; ?>
                    <?php if($phone__fax): ?>
                        <?php echo $phone__fax ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col form">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>