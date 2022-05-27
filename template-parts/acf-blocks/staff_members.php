<?php if(have_rows('staff_members_list')): ?>
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
<?php endif; ?>