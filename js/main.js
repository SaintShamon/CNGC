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


//animations

//blocks

import {
    first_slider
} from './template-parts/parts/first-section';

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