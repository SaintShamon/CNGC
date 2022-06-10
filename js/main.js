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

// import {
//     news_block
// } from './template-parts/parts/all_news';

// import {
//     article_block
// } from './template-parts/parts/article_section';

import {
    our_programs_slider
} from './template-parts/parts/our_programs';

import {
    history_slider
} from './template-parts/parts/history-section';

import {
    all_sponsors_slider
} from './template-parts/parts/all_sponsors';

import {
    scrollToAnchor
} from './template-parts/effects/smooth_scroll';

import {
    events_slider
} from './template-parts/blocks/events-slider';

import {
    disabledItem
} from './template-parts/blocks/form';


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
// news_block();
// article_block();
our_programs_slider();
history_slider();
all_sponsors_slider();

scrollToAnchor();
events_slider();
disabledItem();