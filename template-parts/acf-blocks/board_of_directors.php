<section class="officers section">
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
            ?>
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(have_rows('directors')): ?>
                <div class="content_wrapper">
                    <div class="officers_list">
                        <?php while(have_rows('directors')): the_row(); ?>
                            <?php 
                                $name = get_sub_field('name');
                                $position = get_sub_field('position');
                            ?>
                            <div class="officer_block">
                                <?php if($name): ?>
                                    <div class="name">
                                        <p><?php echo $name; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if($position): ?>
                                    <div class="job_title">
                                        <p><?php echo $position; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>