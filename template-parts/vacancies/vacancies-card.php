<div class="vacancy_block">
    <div class="top_row">
        <?php 
            $city = get_field('city');
            $payment = get_field('payment');
            $button = get_field('button');
        ?>
        <?php if($city): ?>
            <div class="adres">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.9732 22.3819C15.3952 20.7589 21.5 16.1114 21.5 10.5C21.5 5.25329 17.2467 1 12 1C6.75329 1 2.5 5.25329 2.5 10.5C2.5 16.1114 8.60477 20.7589 11.0268 22.3819C11.6218 22.7806 12.3782 22.7806 12.9732 22.3819ZM12 13.5C13.6569 13.5 15 12.1569 15 10.5C15 8.84315 13.6569 7.5 12 7.5C10.3431 7.5 9 8.84315 9 10.5C9 12.1569 10.3431 13.5 12 13.5Z"
                        fill="#084074" />
                </svg>
                <span><?php echo $city; ?></span>
            </div>
        <?php endif; ?>
        <?php if(have_rows('requirements')): ?>
            <div class="tags">
                <ul>
                    <?php while(have_rows('requirements')): the_row(); ?>
                        <li><?php the_sub_field('requirement') ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="center_row">
        <?php if(!empty(get_the_title())): ?>
            <div class="name">
                <p><?php the_title(); ?></p>
            </div>
        <?php endif; ?>
        <?php if($payment): ?>
            <div class="price">
                <p><?php echo $payment; ?></p>
            </div>
        <?php endif; ?>
    </div>
    <?php if($button): ?>
        <div class="btn_row">
            <a href="<?php echo $button['url']; ?>" class="button button--white">
                <?php echo $button['title']; ?>
                <svg width="5" height="8" viewBox="0 0 5 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z"
                        fill="#084074" />
                </svg>
            </a>
        </div>
    <?php endif; ?>
</div>