<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNGC
 */

get_header();
?>

<main id="main">
    <section class="first_section section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="text_block">
                    <div class="title_wrapper">
                        <div class="title">
                            <h1>Hope Starts Here</h1>
                        </div>
                    </div>
                    <div class="block_wrapper">
                        <div class="subtitle">
                            <p>Specializing in mental health and substance use disorder treatment</p>
                        </div>
                        <a href="#" class="button button--text button--lg">explore more
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="bottom_wrapper">
                        <div class="arrow_block">
                            <button class="prev_btn btn">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                                </svg>
                            </button>
                            <button class="next_btn btn">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="socials_block">
                            <ul>
                                <li>
                                    <a class="img_36" href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="img_24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.2995 5.55011C14.5395 5.54999 13.8098 5.84824 13.2674 6.38068C12.7251 6.91313 12.4134 7.63721 12.3995 8.39711L12.3715 9.97211C12.3699 10.0567 12.3504 10.1399 12.3143 10.2164C12.2782 10.2929 12.2264 10.3609 12.1622 10.416C12.098 10.471 12.0228 10.5119 11.9417 10.5359C11.8606 10.5599 11.7754 10.5664 11.6915 10.5551L10.1305 10.3431C8.07653 10.0631 6.10853 9.11711 4.22053 7.54411C3.62253 10.8541 4.79053 13.1471 7.60353 14.9161L9.35053 16.0141C9.43354 16.0663 9.5025 16.138 9.55138 16.223C9.60026 16.308 9.62757 16.4036 9.63093 16.5016C9.63428 16.5996 9.61358 16.6969 9.57062 16.785C9.52767 16.8731 9.46378 16.9494 9.38453 17.0071L7.79253 18.1701C8.73953 18.2291 9.63853 18.1871 10.3845 18.0391C15.1025 17.0971 18.2395 13.5471 18.2395 7.69111C18.2395 7.21311 17.2275 5.55011 15.2995 5.55011ZM10.3995 8.36011C10.417 7.39616 10.7184 6.45878 11.2661 5.66534C11.8138 4.87189 12.5833 4.25763 13.4784 3.89948C14.3736 3.54133 15.3544 3.45519 16.2983 3.65186C17.2421 3.84853 18.107 4.31926 18.7845 5.00511C19.4955 5.00011 20.1005 5.18011 21.4535 4.36011C21.1185 6.00011 20.9535 6.71211 20.2395 7.69111C20.2395 15.3331 15.5425 19.0491 10.7765 20.0001C7.50853 20.6521 2.75653 19.5811 1.39453 18.1591C2.08853 18.1051 4.90853 17.8021 6.53853 16.6091C5.15953 15.7001 -0.329469 12.4701 3.27753 3.78611C4.97053 5.76311 6.68753 7.10911 8.42753 7.82311C9.58553 8.29811 9.86953 8.28811 10.4005 8.36111L10.3995 8.36011Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="img_36" href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="img_24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 9.55C12.917 8.613 14.111 8 15.5 8C16.9587 8 18.3576 8.57946 19.3891 9.61091C20.4205 10.6424 21 12.0413 21 13.5V21H19V13.5C19 12.5717 18.6313 11.6815 17.9749 11.0251C17.3185 10.3687 16.4283 10 15.5 10C14.5717 10 13.6815 10.3687 13.0251 11.0251C12.3687 11.6815 12 12.5717 12 13.5V21H10V8.5H12V9.55ZM5 6.5C4.60218 6.5 4.22064 6.34196 3.93934 6.06066C3.65804 5.77936 3.5 5.39782 3.5 5C3.5 4.60218 3.65804 4.22064 3.93934 3.93934C4.22064 3.65804 4.60218 3.5 5 3.5C5.39782 3.5 5.77936 3.65804 6.06066 3.93934C6.34196 4.22064 6.5 4.60218 6.5 5C6.5 5.39782 6.34196 5.77936 6.06066 6.06066C5.77936 6.34196 5.39782 6.5 5 6.5ZM4 8.5H6V21H4V8.5Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="img_36" href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="img_24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 9H17.5L17 11H13V20H11V11H7V9H11V7.128C11 5.345 11.186 4.698 11.534 4.046C11.875 3.40181 12.4018 2.87501 13.046 2.534C13.698 2.186 14.345 2 16.128 2C16.65 2 17.108 2.05 17.5 2.15V4H16.128C14.804 4 14.401 4.078 13.99 4.298C13.686 4.46 13.46 4.686 13.298 4.99C13.078 5.401 13 5.804 13 7.128V9Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="img_36" href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="img_24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75ZM12 4C9.526 4 9.122 4.007 7.971 4.058C7.187 4.095 6.661 4.2 6.173 4.39C5.739 4.558 5.426 4.759 5.093 5.093C4.78001 5.3954 4.53935 5.76458 4.389 6.173C4.199 6.663 4.094 7.188 4.058 7.971C4.006 9.075 4 9.461 4 12C4 14.474 4.007 14.878 4.058 16.029C4.095 16.812 4.2 17.339 4.389 17.826C4.559 18.261 4.759 18.574 5.091 18.906C5.428 19.242 5.741 19.443 6.171 19.609C6.665 19.8 7.191 19.906 7.971 19.942C9.075 19.994 9.461 20 12 20C14.474 20 14.878 19.993 16.029 19.942C16.811 19.905 17.338 19.8 17.826 19.611C18.259 19.442 18.574 19.241 18.906 18.909C19.243 18.572 19.444 18.259 19.61 17.829C19.8 17.336 19.906 16.809 19.942 16.029C19.994 14.925 20 14.539 20 12C20 9.526 19.993 9.122 19.942 7.971C19.905 7.189 19.8 6.661 19.61 6.173C19.4593 5.765 19.2191 5.39596 18.907 5.093C18.6047 4.77985 18.2355 4.53917 17.827 4.389C17.337 4.199 16.811 4.094 16.029 4.058C14.925 4.006 14.539 4 12 4ZM12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="img_36" href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="img_24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.606 6.995C19.53 6.697 19.314 6.472 19.067 6.403C18.63 6.28 16.5 6 12 6C7.5 6 5.372 6.28 4.931 6.403C4.687 6.471 4.471 6.696 4.394 6.995C4.285 7.419 4 9.196 4 12C4 14.804 4.285 16.58 4.394 17.006C4.47 17.303 4.686 17.528 4.932 17.596C5.372 17.72 7.5 18 12 18C16.5 18 18.629 17.72 19.069 17.597C19.313 17.529 19.529 17.304 19.606 17.005C19.715 16.581 20 14.8 20 12C20 9.2 19.715 7.42 19.606 6.995ZM21.543 6.498C22 8.28 22 12 22 12C22 12 22 15.72 21.543 17.502C21.289 18.487 20.546 19.262 19.605 19.524C17.896 20 12 20 12 20C12 20 6.107 20 4.395 19.524C3.45 19.258 2.708 18.484 2.457 17.502C2 15.72 2 12 2 12C2 12 2 8.28 2.457 6.498C2.711 5.513 3.454 4.738 4.395 4.476C6.107 4 12 4 12 4C12 4 17.896 4 19.605 4.476C20.55 4.742 21.292 5.516 21.543 6.498ZM10 15.5V8.5L16 12L10 15.5Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="slider_block">
            <div class="slider_block__list">
                <img src="<?= get_template_directory_uri() ?>/assets/images/main_slider_1.jpg" alt="">
                <img src="<?= get_template_directory_uri() ?>/assets/images/main_slider_2.jpg" alt="">
                <img src="<?= get_template_directory_uri() ?>/assets/images/main_slider_3.jpg" alt="">
            </div>
            <div class="right_work_img">
                <img src="<?= get_template_directory_uri() ?>/assets/images/top_work_img_1.png" alt="">
                <img src="<?= get_template_directory_uri() ?>/assets/images/top_work_img_2.png" alt="">
            </div>
        </div>
    </section>
    <section class="alone section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>You are not alone</h2>
                    </div>
                    <div class="btn_block">
                        <a href="#" class="button button--secondary">Get in touch</a>
                    </div>
                </div>
                <div class="content_wrapper">
                    <div class="col">
                        <p>Each year, an estimated 1 in 5 or 451,000 Long Island residents suffer from some form
                            of
                            mental health disorder. But many suffer in silence???because most can???t ask for help,
                            especially those who need it the most. That???s why it is so important for friends,
                            families, and neighbors to be the voice of those who can???t or won???t seek help for
                            themselves. CN Guidance & Counseling Services is a 501 (c) 3 nonprofit organization
                            with
                            experience since 1972.</p>
                    </div>
                    <div class="col">
                        <p>CN (Central Nassau) Guidance & Counseling Services has grown substantially since its
                            inception. Our evolution has been shaped largely by the emerging needs of consumers
                            as
                            they move through the process of recovery.</p>
                    </div>
                </div>
                <div class="image_center_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/alone_center_img.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mission section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="col">
                    <div class="title">
                        <h2>Our Mission:</h2>
                    </div>
                </div>
                <div class="col">
                    <p>CN??Guidance & Counseling Services, a??nonprofit organization, inspires and catalyzes
                        recovery
                        for people living with mental health and substance use conditions through innovative and
                        person-centered integrated clinical treatment, counseling, housing and support services
                        ???
                        empowering those served to??live healthy and fulfilling lives.</p>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo_white.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="understand section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>You are not alone</h2>
                    </div>
                </div>
                <div class="content_wrapper">
                    <div class="col">
                        <p><b>Approximately 195,000 adults on??Long Island suffer from some form of??substance use
                                disorder in??any given year</b></p>
                        <p>Drug overdose is??now the #1 cause of??death for people under age 50 and an??estimated
                            77,000 Long Island adults experience BOTH a??mental health disorder and a??substance
                            use
                            disorder that interfere with functioning or??quality of??life.</p>
                        <p>Many Long Island residents with mental health and/or??substance use disorders are
                            dying
                            young.
                            People with serious mental illness???SMI???die 25 years earlier than the general
                            population,
                            on??average (Morbidity and Mortality in??People with Serious Mental Illness, NASMHPD,
                            2006).</p>
                        <a href="#" class="button button--secondary">Continue reading</a>
                    </div>
                    <div class="col">
                        <div class="image_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/understand_img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events_section section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>Upcoming events</h2>
                    </div>
                    <div class="btn_block">
                        <a href="#" class="button button--icon_right">view all Events
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.43937 7.75746L0.875631 1.50252C0.629645 0.518582 1.83571 -0.164287 2.55288 0.552877L9.29289 7.29289C9.68342 7.68342 9.68342 8.31658 9.29289 8.70711L2.55288 15.4471C1.83572 16.1643 0.629645 15.4814 0.87563 14.4975L2.43937 8.24254C2.47918 8.0833 2.47918 7.9167 2.43937 7.75746Z"
                                    fill="#084074" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="content_wrapper events_row">
                    <div class="event_block">
                        <div class="top_event">
                            <div class="date">
                                <span>28</span>
                                May
                            </div>
                            <div class="time">
                                <span class="year">2022</span>
                                <span class="time">7:00 am</span>
                            </div>
                        </div>
                        <div class="img_event">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/img_event.jpg" alt="">
                        </div>
                        <div class="title_event">
                            <p>22nd Annual Golf Outing</p>
                        </div>
                        <a href="#"></a>
                    </div>
                    <div class="event_block">
                        <div class="top_event">
                            <div class="date">
                                <span>25</span>
                                July
                            </div>
                            <div class="time">
                                <span class="year">2022</span>
                                <span class="time">1:00 pm</span>
                            </div>
                        </div>
                        <div class="img_event">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/img_event_2.jpg" alt="">
                        </div>
                        <div class="title_event">
                            <p>The Barbara Bartell Memorial??Runday</p>
                        </div>
                        <a href="#"></a>
                    </div>
                    <div class="event_block">
                        <div class="top_event">
                            <div class="date">
                                <span>17</span>
                                November
                            </div>
                            <div class="time">
                                <span class="year">2022</span>
                                <span class="time">11:00 am</span>
                            </div>
                        </div>
                        <div class="img_event">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/img_event_3.jpg" alt="">
                        </div>
                        <div class="title_event">
                            <p>Gift of Hope Drive</p>
                        </div>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="programs section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>Our programs</h2>
                    </div>
                    <div class="btn_block">
                        <a href="#" class="button button--icon_right">view all programs
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.43937 7.75746L0.875631 1.50252C0.629645 0.518582 1.83571 -0.164287 2.55288 0.552877L9.29289 7.29289C9.68342 7.68342 9.68342 8.31658 9.29289 8.70711L2.55288 15.4471C1.83572 16.1643 0.629645 15.4814 0.87563 14.4975L2.43937 8.24254C2.47918 8.0833 2.47918 7.9167 2.43937 7.75746Z"
                                    fill="#084074" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="content_wrapper programs_row">
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_1.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>Care Management ???Health Home???</p>
                        </div>
                    </div>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_2.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>Certified Community Behavioral Health Clinic</p>
                        </div>
                    </div>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_3.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>Community Oriented Recovery and Empowerment (CORE...</p>
                        </div>
                    </div>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_1.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>Care Management ???Health Home???</p>
                        </div>
                    </div>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_1.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>Drop-In Center</p>
                        </div>
                    </div>
                    <div class="program_block">
                        <div class="img_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/program_img_1.jpg" alt="">
                            <a class="btn" href="#">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24254 2.43937L14.4975 0.87563C15.4814 0.629645 16.1643 1.83571 15.4471 2.55288L8.70711 9.29289C8.31658 9.68342 7.68342 9.68342 7.29289 9.29289L0.552879 2.55288C-0.164284 1.83571 0.518579 0.629644 1.50252 0.87563L7.75746 2.43937C7.9167 2.47918 8.0833 2.47918 8.24254 2.43937Z"
                                        fill="white" />
                            </a>
                        </div>
                        <div class="title_block">
                            <p>6</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recovery section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>Mobile recovery unit</h2>
                    </div>
                </div>
                <div class="content_wrapper">
                    <div class="col">
                        <div class="image_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/mobile_recovery_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <p><b>Nassau County???s first ever mobile recovery unit!</b></p>
                        <p>Easy, anonymous, and innovative access to substance use disorder treatment starts at
                            CN
                            Guidance & Counseling. We break down barriers for individuals and families by
                            integrating a holistic level of affordable, effective, and patient-centered care;
                            bringing it all closer to home in Nassau County???s first ever tech-powered mobile
                            recovery unit.</p>

                        <a href="#" class="button button--secondary">Hope rides here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>What people are saying</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews_row">
            <div class="inner_block">
                <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.6"
                        d="M54.8936 64C53.1915 64 51.2057 63.4311 48.9362 62.2933C46.6667 61.1556 44.3972 60.3022 42.1277 59.7333C41.2766 59.7333 40.8511 58.88 40.8511 57.1733C40.8511 54.6133 41.844 50.9156 43.8298 46.08C45.8156 40.96 48.227 35.5556 51.0638 29.8667C53.9007 24.1778 56.8794 19.0578 60 14.5067C63.1206 9.67112 65.8156 6.40001 68.0851 4.69335C72.3404 1.56445 75.7447 0 78.2979 0C79.4326 0 80 0.426672 80 1.28001C80 2.70223 79.2908 4.12445 77.8723 5.54668C75.6028 8.39112 73.3333 12.9422 71.0638 19.2C69.078 25.4578 67.0922 32.1422 65.1064 39.2533C63.1206 46.08 61.2766 51.9111 59.5745 56.7467C57.8723 61.5822 56.312 64 54.8936 64ZM14.0426 64C12.3404 64 10.3546 63.4311 8.0851 62.2933C5.8156 61.1556 3.5461 60.3022 1.2766 59.7333C0.425533 59.7333 0 58.88 0 57.1733C0 54.6133 0.992907 50.9156 2.97872 46.08C4.96454 40.96 7.37589 35.5556 10.2128 29.8667C13.0496 24.1778 16.0284 19.0578 19.1489 14.5067C22.2695 9.67112 24.9645 6.40001 27.234 4.69335C31.4894 1.56445 34.8936 0 37.4468 0C38.5816 0 39.1489 0.426672 39.1489 1.28001C39.1489 2.70223 38.4397 4.12445 37.0213 5.54668C34.7518 8.39112 32.4823 12.9422 30.2128 19.2C28.2269 25.4578 26.2411 32.1422 24.2553 39.2533C22.2695 46.08 20.4255 51.9111 18.7234 56.7467C17.0213 61.5822 15.461 64 14.0426 64Z"
                        fill="white" />
                </svg>
                <p>I??loved this program. While attending these classes I??was currently having issues
                    in??my??relationship and dealt with a??break up??and Project Forward helped me??rationalize
                    and understand my current situation.</p>
            </div>
            <div class="inner_block">
                <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.6"
                        d="M54.8936 64C53.1915 64 51.2057 63.4311 48.9362 62.2933C46.6667 61.1556 44.3972 60.3022 42.1277 59.7333C41.2766 59.7333 40.8511 58.88 40.8511 57.1733C40.8511 54.6133 41.844 50.9156 43.8298 46.08C45.8156 40.96 48.227 35.5556 51.0638 29.8667C53.9007 24.1778 56.8794 19.0578 60 14.5067C63.1206 9.67112 65.8156 6.40001 68.0851 4.69335C72.3404 1.56445 75.7447 0 78.2979 0C79.4326 0 80 0.426672 80 1.28001C80 2.70223 79.2908 4.12445 77.8723 5.54668C75.6028 8.39112 73.3333 12.9422 71.0638 19.2C69.078 25.4578 67.0922 32.1422 65.1064 39.2533C63.1206 46.08 61.2766 51.9111 59.5745 56.7467C57.8723 61.5822 56.312 64 54.8936 64ZM14.0426 64C12.3404 64 10.3546 63.4311 8.0851 62.2933C5.8156 61.1556 3.5461 60.3022 1.2766 59.7333C0.425533 59.7333 0 58.88 0 57.1733C0 54.6133 0.992907 50.9156 2.97872 46.08C4.96454 40.96 7.37589 35.5556 10.2128 29.8667C13.0496 24.1778 16.0284 19.0578 19.1489 14.5067C22.2695 9.67112 24.9645 6.40001 27.234 4.69335C31.4894 1.56445 34.8936 0 37.4468 0C38.5816 0 39.1489 0.426672 39.1489 1.28001C39.1489 2.70223 38.4397 4.12445 37.0213 5.54668C34.7518 8.39112 32.4823 12.9422 30.2128 19.2C28.2269 25.4578 26.2411 32.1422 24.2553 39.2533C22.2695 46.08 20.4255 51.9111 18.7234 56.7467C17.0213 61.5822 15.461 64 14.0426 64Z"
                        fill="white" />
                </svg>
                <p>I Really loved this program thank you for all the help!
                    needed financial resources into a??strong grassroots community movement. Based on??this
                    community???s??and our organization???s??direct experience, we??know the work this grant enables
                    will
                    save the lives of??young people and change their trajectory as??adults.</p>
            </div>
            <div class="inner_block">
                <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.6"
                        d="M54.8936 64C53.1915 64 51.2057 63.4311 48.9362 62.2933C46.6667 61.1556 44.3972 60.3022 42.1277 59.7333C41.2766 59.7333 40.8511 58.88 40.8511 57.1733C40.8511 54.6133 41.844 50.9156 43.8298 46.08C45.8156 40.96 48.227 35.5556 51.0638 29.8667C53.9007 24.1778 56.8794 19.0578 60 14.5067C63.1206 9.67112 65.8156 6.40001 68.0851 4.69335C72.3404 1.56445 75.7447 0 78.2979 0C79.4326 0 80 0.426672 80 1.28001C80 2.70223 79.2908 4.12445 77.8723 5.54668C75.6028 8.39112 73.3333 12.9422 71.0638 19.2C69.078 25.4578 67.0922 32.1422 65.1064 39.2533C63.1206 46.08 61.2766 51.9111 59.5745 56.7467C57.8723 61.5822 56.312 64 54.8936 64ZM14.0426 64C12.3404 64 10.3546 63.4311 8.0851 62.2933C5.8156 61.1556 3.5461 60.3022 1.2766 59.7333C0.425533 59.7333 0 58.88 0 57.1733C0 54.6133 0.992907 50.9156 2.97872 46.08C4.96454 40.96 7.37589 35.5556 10.2128 29.8667C13.0496 24.1778 16.0284 19.0578 19.1489 14.5067C22.2695 9.67112 24.9645 6.40001 27.234 4.69335C31.4894 1.56445 34.8936 0 37.4468 0C38.5816 0 39.1489 0.426672 39.1489 1.28001C39.1489 2.70223 38.4397 4.12445 37.0213 5.54668C34.7518 8.39112 32.4823 12.9422 30.2128 19.2C28.2269 25.4578 26.2411 32.1422 24.2553 39.2533C22.2695 46.08 20.4255 51.9111 18.7234 56.7467C17.0213 61.5822 15.461 64 14.0426 64Z"
                        fill="white" />
                </svg>
                <p>Maybe consider making the sessions shorter? I??think I??would prefer more sessions at??1 hour
                    each
                    than the 9 at??2 hours each. 2 hours for some sessions especially is??a??bit
                    heavy/much. Just a thought though! Cait and Ericka are really great.</p>
            </div>
            <div class="inner_block">
                <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.6"
                        d="M54.8936 64C53.1915 64 51.2057 63.4311 48.9362 62.2933C46.6667 61.1556 44.3972 60.3022 42.1277 59.7333C41.2766 59.7333 40.8511 58.88 40.8511 57.1733C40.8511 54.6133 41.844 50.9156 43.8298 46.08C45.8156 40.96 48.227 35.5556 51.0638 29.8667C53.9007 24.1778 56.8794 19.0578 60 14.5067C63.1206 9.67112 65.8156 6.40001 68.0851 4.69335C72.3404 1.56445 75.7447 0 78.2979 0C79.4326 0 80 0.426672 80 1.28001C80 2.70223 79.2908 4.12445 77.8723 5.54668C75.6028 8.39112 73.3333 12.9422 71.0638 19.2C69.078 25.4578 67.0922 32.1422 65.1064 39.2533C63.1206 46.08 61.2766 51.9111 59.5745 56.7467C57.8723 61.5822 56.312 64 54.8936 64ZM14.0426 64C12.3404 64 10.3546 63.4311 8.0851 62.2933C5.8156 61.1556 3.5461 60.3022 1.2766 59.7333C0.425533 59.7333 0 58.88 0 57.1733C0 54.6133 0.992907 50.9156 2.97872 46.08C4.96454 40.96 7.37589 35.5556 10.2128 29.8667C13.0496 24.1778 16.0284 19.0578 19.1489 14.5067C22.2695 9.67112 24.9645 6.40001 27.234 4.69335C31.4894 1.56445 34.8936 0 37.4468 0C38.5816 0 39.1489 0.426672 39.1489 1.28001C39.1489 2.70223 38.4397 4.12445 37.0213 5.54668C34.7518 8.39112 32.4823 12.9422 30.2128 19.2C28.2269 25.4578 26.2411 32.1422 24.2553 39.2533C22.2695 46.08 20.4255 51.9111 18.7234 56.7467C17.0213 61.5822 15.461 64 14.0426 64Z"
                        fill="white" />
                </svg>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem facere a dolorum sint
                    praesentium, eos voluptates facilis aspernatur iure ducimus soluta doloremque quasi
                    voluptatum,
                    asperiores consequuntur dolore. Assumenda, optio ullam.</p>
            </div>
            <div class="inner_block">
                <svg width="80" height="64" viewBox="0 0 80 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.6"
                        d="M54.8936 64C53.1915 64 51.2057 63.4311 48.9362 62.2933C46.6667 61.1556 44.3972 60.3022 42.1277 59.7333C41.2766 59.7333 40.8511 58.88 40.8511 57.1733C40.8511 54.6133 41.844 50.9156 43.8298 46.08C45.8156 40.96 48.227 35.5556 51.0638 29.8667C53.9007 24.1778 56.8794 19.0578 60 14.5067C63.1206 9.67112 65.8156 6.40001 68.0851 4.69335C72.3404 1.56445 75.7447 0 78.2979 0C79.4326 0 80 0.426672 80 1.28001C80 2.70223 79.2908 4.12445 77.8723 5.54668C75.6028 8.39112 73.3333 12.9422 71.0638 19.2C69.078 25.4578 67.0922 32.1422 65.1064 39.2533C63.1206 46.08 61.2766 51.9111 59.5745 56.7467C57.8723 61.5822 56.312 64 54.8936 64ZM14.0426 64C12.3404 64 10.3546 63.4311 8.0851 62.2933C5.8156 61.1556 3.5461 60.3022 1.2766 59.7333C0.425533 59.7333 0 58.88 0 57.1733C0 54.6133 0.992907 50.9156 2.97872 46.08C4.96454 40.96 7.37589 35.5556 10.2128 29.8667C13.0496 24.1778 16.0284 19.0578 19.1489 14.5067C22.2695 9.67112 24.9645 6.40001 27.234 4.69335C31.4894 1.56445 34.8936 0 37.4468 0C38.5816 0 39.1489 0.426672 39.1489 1.28001C39.1489 2.70223 38.4397 4.12445 37.0213 5.54668C34.7518 8.39112 32.4823 12.9422 30.2128 19.2C28.2269 25.4578 26.2411 32.1422 24.2553 39.2533C22.2695 46.08 20.4255 51.9111 18.7234 56.7467C17.0213 61.5822 15.461 64 14.0426 64Z"
                        fill="white" />
                </svg>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem facere a dolorum sint
                    praesentium, eos voluptates facilis aspernatur iure ducimus soluta doloremque quasi
                    voluptatum,
                    asperiores consequuntur dolore. Assumenda, optio ullam.</p>
            </div>
        </div>
    </section>
    <section class="involved section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>How you can get involved</h2>
                    </div>
                </div>
                <div class="content_wrapper">
                    <p class="subtitle">As??a??supporter of??Central Nassau Guidance & Counseling Services, you can
                        make a??difference in??a??number of??different ways:</p>
                    <div class="involved_wrapper">
                        <div class="inner_block">
                            <div class="service_block">
                                <p><b>Volunteer</b></p>
                                <p>Time and Talent</p>
                                <div class="text">
                                    <p>Help fill our food pantry, help out at an event, or share your expertise!
                                    </p>
                                </div>
                                <a href="#" class="button">Help out</a>
                            </div>
                            <div class="service_block img_block">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service_img_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="inner_block">
                            <div class="service_block">
                                <p><b>Sponsors</b></p>
                                <p>Support an Event</p>
                                <div class="text">
                                    <p>We are so thankful for our sponsors! Click here to help support us.</p>
                                </div>
                                <a href="#" class="button">sponsorship</a>
                            </div>
                            <div class="service_block img_block">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service_img_2.jpg" alt="">
                            </div>
                        </div>
                        <div class="inner_block">
                            <div class="service_block">
                                <p><b>Donate</b></p>
                                <p>Give Financially</p>
                                <div class="text">
                                    <p>Your donation will make a??positive impact upon the life of??someone
                                        in??need.
                                    </p>
                                </div>
                                <a href="#" class="button">Donate now</a>
                            </div>
                            <div class="service_block img_block">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service_img_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="inner_block">
                            <div class="service_block">
                                <p><b>Careers</b></p>
                                <p>Job Opportunities</p>
                                <div class="text">
                                    <p>Make a difference every day! Come join the CN Guidance Team.</p>
                                </div>
                                <a href="#" class="button">Join the team</a>
                            </div>
                            <div class="service_block img_block">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service_img_4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsors section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="main_block">
                <div class="title_wrapper">
                    <div class="title">
                        <h2>Sponsors</h2>
                    </div>
                    <div class="btn_block">
                        <a href="#" class="button">See all sponsors</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsors_row">
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_1.png" alt="">
                </div>
                <div class="level_block heart">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                            fill="#6182A2" />
                    </svg>
                    <span>Presenting sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_2.png" alt="">
                </div>
                <div class="level_block heart">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                            fill="#6182A2" />
                    </svg>
                    <span>Presenting sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_3.png" alt="">
                </div>
                <div class="level_block heart">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                            fill="#6182A2" />
                    </svg>
                    <span>Presenting sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_4.png" alt="">
                </div>
                <div class="level_block heart">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                            fill="#6182A2" />
                    </svg>
                    <span>Presenting sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_5.png" alt="">
                </div>
                <div class="level_block heart">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99961 18.0451C-6.66672 8.8333 4.99993 -1.1667 9.99961 5.15668C14.9999 -1.1667 26.6666 8.8333 9.99961 18.0451Z"
                            fill="#6182A2" />
                    </svg>
                    <span>Presenting sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_6.png" alt="">
                </div>
                <div class="level_block gold">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1159_18726)">
                            <path
                                d="M10.4909 0.585205C15.9978 0.585205 20.4213 5.00876 20.4213 10.5156C20.4213 16.0224 15.9978 20.446 10.4909 20.446C4.9841 20.446 0.560547 16.0224 0.560547 10.5156C0.560547 5.00876 4.9841 0.585205 10.4909 0.585205Z"
                                fill="" />
                            <path
                                d="M10.4916 3.29346C6.51953 3.29346 3.26953 6.54336 3.26953 10.5156C3.26953 14.4878 6.51943 17.7377 10.4916 17.7377C14.4639 17.7377 17.7138 14.4878 17.7138 10.5156C17.7138 6.54336 14.4638 3.29346 10.4916 3.29346ZM10.4916 15.9321C7.51251 15.9321 5.07511 13.4946 5.07511 10.5156C5.07511 7.53654 7.51261 5.09903 10.4916 5.09903C13.4707 5.09903 15.9082 7.53654 15.9082 10.5156C15.9082 13.4946 13.4707 15.9321 10.4916 15.9321Z"
                                fill="#E1E7EC" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1159_18726">
                                <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Gold sponsor</span>
                </div>
            </div>
            <div class="sponsors_block">
                <div class="img_block">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/sponsor_7.png" alt="">
                </div>
                <div class="level_block silver">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1159_18726)">
                            <path
                                d="M10.4909 0.585205C15.9978 0.585205 20.4213 5.00876 20.4213 10.5156C20.4213 16.0224 15.9978 20.446 10.4909 20.446C4.9841 20.446 0.560547 16.0224 0.560547 10.5156C0.560547 5.00876 4.9841 0.585205 10.4909 0.585205Z"
                                fill="" />
                            <path
                                d="M10.4916 3.29346C6.51953 3.29346 3.26953 6.54336 3.26953 10.5156C3.26953 14.4878 6.51943 17.7377 10.4916 17.7377C14.4639 17.7377 17.7138 14.4878 17.7138 10.5156C17.7138 6.54336 14.4638 3.29346 10.4916 3.29346ZM10.4916 15.9321C7.51251 15.9321 5.07511 13.4946 5.07511 10.5156C5.07511 7.53654 7.51261 5.09903 10.4916 5.09903C13.4707 5.09903 15.9082 7.53654 15.9082 10.5156C15.9082 13.4946 13.4707 15.9321 10.4916 15.9321Z"
                                fill="#E1E7EC" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1159_18726">
                                <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Silver sponsor</span>
                </div>
            </div>
        </div>
    </section>
    <section class="form_section section">
        <div class="container">
            <div class="main_block">
                <div class="col">
                    <div class="title">
                        <h2>Contact us</h2>
                    </div>
                    <div class="subtitle">
                        <p>CN Guidance & Counseling Services</p>
                    </div>
                    <div class="content_block">
                        <p class="adres">950 South Oyster Bay Road
                            Hicksville, NY 11801</p>
                        <p><span>Phone:</span> <a href="tel:+5168226111">(516) 822-6111</a></p>
                        <p><span>Fax:</span> <a href="tel:+5168226111">(516) 822-6111</a></p>
                    </div>
                </div>
                <div class="col form">
                    <form action="#">
                        <div class="nf-form-wrap nf-form-content">
                            <input type="text" name="your_name" id="your_name" placeholder="Enter your First Name">
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
                                    <input type="radio" id="contactChoice1" name="contact" value="email" checked>
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
</main><!-- #main -->

<?php
get_footer();