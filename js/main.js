import $ from 'jquery';

import {
    lazy
} from './lazy';

import {
    lottie
} from './lottie';

import {
    header
} from './template-parts/header/header';

import {
    footer
} from './template-parts/footer/footer';

//animations

//blocks

import {
    first_slider
} from './template-parts/parts/first-section';

import {
    programs_slider
} from './template-parts/parts/programs-section';

import {
    reviews_slider
} from './template-parts/parts/reviews';

import {
    sponsors_slider
} from './template-parts/parts/sponsors-section';

import {
    news_text
} from './template-parts/parts/news_img_section';

import {
    form_select
} from './template-parts/parts/form-section';

import {
    news_block
} from './template-parts/parts/all_news';

import {
    article_block
} from './template-parts/parts/article_section';

import {
    our_programs_slider
} from './template-parts/parts/our_programs';
// import {
//     videoBlock
// } from './template-parts/blocks/video';
// import {
//     videoBanner
// } from './template-parts/blocks/video-banner';
// import {
//     testimonialsSlider
// } from './template-parts/blocks/testimonials-slider';
// import {
//     accordion
// } from './template-parts/blocks/accordion';
// import {
//     partners
// } from './template-parts/blocks/partners';
// import {
//     process
// } from './template-parts/blocks/process';
// import {
//     popup
// } from './template-parts/blocks/popup';
// import {
//     blogAjax
// } from './template-parts/blocks/blog-ajax';
// import {
//     textTabs
// } from './template-parts/blocks/text_tabs';


header();
footer();
lazy();
lottie();

//animations
// appearence();

//blocks

// videoBlock();
// testimonialsSlider();
// blogAjax();
// textTabs();
// scrollToAnchor();
first_slider();
programs_slider();
reviews_slider();
sponsors_slider();
news_text();
form_select();
news_block();
article_block();
our_programs_slider();