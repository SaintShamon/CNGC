<?php if(have_rows('staff_members_list')): ?>
    <div class="member_popup">
        <div class="row">
            <div class="col-5 member_popup__imageWrapper">
                <div class="member_popup__image">
                    <img src="" alt="">
                </div>
                <div class="member_popup__name_email">
                    <div class="member_popup__name">
                    </div>
                    <a class="member_popup__email" href="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/email_icon_2.png" alt="">
                    </a>
                </div>
                <div class="member_popup__position"></div>
            </div>
            <div class="col-7 member_popup__textWrapper">
                <div class="member_popup__text"></div>
            </div>
        </div>
    </div>
    <section class="agency section">
        <div class="container">
            <div class="main_block">
                <div class="agency_list">
                    <?php while(have_rows('staff_members_list')): the_row(); ?>
                        <?php 
                            $image = get_sub_field('image');
                            $name = get_sub_field('name');
                            $position = get_sub_field('position');
                            $address__email = get_sub_field('address__email');
                            $popup_text = get_sub_field('popup_text');
                        ?>
                        <div class="agency_block">
                            <?php if($image): ?>
                                <div class="img_block">
                                    <img src="<?php echo $image; ?>" alt="">
                                </div>
                            <?php endif; ?>
                            <div class="bio_block">
                                <?php if($name): ?>
                                    <div class="title">
                                        <p><?php echo $name; ?></p>
                                        <span>BIO</span>
                                    </div>
                                <?php endif; ?>
                                <?php if($position): ?>
                                    <p><?php echo $position; ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if($address__email): ?>
                                <div class="email_block">
                                    <?php echo $address__email; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($popup_text): ?>
                                <div class="popup_text" style="display: none">
                                    <?php echo $popup_text; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                    <?php $last_item = get_sub_field('last_members_item'); ?>
                    <?php if($last_item): ?>
                        <div class="agency_block last">
                            <div class="bio_block">
                                <?php echo $last_item; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<script>
    jQuery('.agency_list .agency_block').not('.agency_block.last').click(function(){
        var top = jQuery(this).offset().top + 340;
        jQuery('.member_popup').css('top', top + 'px');
        var name = jQuery(this).find('.bio_block .title p').html();
        var img = jQuery(this).find('img').attr('src');
        var position = jQuery(this).find('.bio_block > p').html();
        var email = jQuery(this).find('.email_block a').html();
        var text = jQuery(this).find('.popup_text').html();
        jQuery('.member_popup .member_popup__image img').attr('src', img);
        jQuery('.member_popup .member_popup__email').attr('href', 'mailto:' + email);
        jQuery('.member_popup .member_popup__name').html(name);
        jQuery('.member_popup .member_popup__position').html(position);
        jQuery('.member_popup .member_popup__text').html(text);
        jQuery('body').addClass('opened-popup');
    });
    jQuery('.overlay').click(function(){
        jQuery('body').removeClass('opened-popup');
    });
</script>
<?php endif; ?>