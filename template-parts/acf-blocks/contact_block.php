<section class="form_section section">
    <div class="container">
        <div class="main_block">
            <div class="col">
                <?php 
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $address = get_sub_field('address');
                    $phone__fax = get_sub_field('phone__fax');
                ?>
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
                    <p class="adres"><?php echo $address; ?></p>
                    <?php endif; ?>
                    <?php if($phone__fax): ?>
                        <?php echo $phone__fax ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col form">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact"]'); ?>
                <form action="#">
                    <div class="nf-form-wrap nf-form-content">
                        <input type="text" name="your_name" id="your_name"
                            placeholder="Enter your First Name">
                        <input type="text" name="your_last_name" id="your_last_name"
                            placeholder="Enter your Last Name">
                    </div>
                    <div class="nf-form-wrap nf-form-content">
                        <input type="email" name="email" id="email" placeholder="Enter your Email">
                        <input type="tel" name="phone" id="phone" placeholder="Enter your Phone Number">
                    </div>
                    <div class="nf-form-wrap nf-form-content">
                        <input type="text" name="Select" id="select" placeholder="This message is about">
                        <input type="text" name="Subject" id="Subject" placeholder="Subject">
                    </div>
                    <div class="nf-form-wrap nf-form-content">
                        <textarea name="message" id="message" cols="30" rows="10"
                            placeholder="Type your Message"></textarea>
                        <div class="radio_block submit-wrap">
                            <p>How can we contact you</p>
                            <div class="nf-radio-wrap">
                                <input type="radio" id="contactChoice1" name="contact" value="email"
                                    checked>
                                <label for="contactChoice1">Email</label>
                            </div>
                            <div class="nf-radio-wrap">
                                <input type="radio" id="contactChoice2" name="contact" value="Phone">
                                <label for="contactChoice2">Phone call</label>
                            </div>
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>