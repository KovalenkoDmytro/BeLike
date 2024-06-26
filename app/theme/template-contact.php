<?php

/**
 * Template name: Contact Template
 *
 */
get_header('contact');
$contact__components = get_field( 'contact_components' );
?>
    <main class="contact__page">
        <div class="content_wrapper">
	        <?php if ( ! empty( $contact__components['background'] ) ) { ?>
                <div class="background">
                    <img  src="<?= $contact__components['background']['url'] ?>"
                          alt="<?= $contact__components['background']['title'] ?>">
                </div>
	        <?php } ?>
            <div class="contact__page_wrapper">
                <section class="image">
		            <?= the_title( '<h1 class="headline pageTitle">', '</h1>' ); ?>
                </section>
                <section class="text">
                    <div class="contact__info">
			            <?php if ( ! empty( $contact__components['tittle'] ) ) { ?>
                            <p class="title"> <?= $contact__components['tittle'] ?></p>
			            <?php } ?>
                        <div class="contacts">

                            <ul class="social__media">
					            <?php if ( isset( $redux_demo['socialMedia-linkedin'] ) ) { ?>
                                    <li class="social__media__item"><a
                                                href="mailto:<?= $redux_demo['socialMedia-linkedin'] ?>">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.042 17.0421H14.0783V12.4009C14.0783 11.2941 14.0586 9.86991 12.5368 9.86991C10.9934 9.86991 10.7568 11.0753 10.7568 12.3211V17.0421H7.79411V7.49758H10.6395V8.80152H10.679C11.2595 7.81001 12.3377 7.21767 13.4859 7.26005C16.49 7.26005 17.043 9.23617 17.043 11.8056L17.042 17.0421ZM4.44998 6.19265C3.49986 6.19265 2.73011 5.42289 2.73011 4.47278C2.73011 3.52266 3.49986 2.75291 4.44998 2.75291C5.40009 2.75291 6.16984 3.52266 6.16984 4.47278C6.16984 5.42289 5.40009 6.19265 4.44998 6.19265ZM5.93133 17.0421H2.96468V7.49758H5.93133V17.0421ZM18.5194 0.00112022H1.47544C0.670207 -0.00775016 0.00985598 0.637817 0 1.44305V18.557C0.00985598 19.3632 0.670207 20.0088 1.47544 19.9999H18.5194C19.3266 20.0097 19.9899 19.3642 20.0007 18.557V1.44206C19.9889 0.63486 19.3256 -0.010707 18.5194 0.000134579"
                                                      fill="white"/>
                                            </svg>
                                        </a></li>
					            <?php } ?>
					            <?php if ( isset( $redux_demo['socialMedia-facebook'] ) ) { ?>
                                    <li class="social__media__item"><a
                                                href="mailto:<?= $redux_demo['socialMedia-facebook'] ?>">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 12.0608C22 17.082 18.3383 21.2446 13.5583 22V14.9885H15.8825L16.325 12.0876H13.5583V10.2054C13.5583 9.41144 13.945 8.63844 15.1833 8.63844H16.4408V6.16852C16.4408 6.16852 15.2992 5.97233 14.2083 5.97233C11.93 5.97233 10.4417 7.36156 10.4417 9.87592V12.0868H7.90917V14.9876H10.4417V21.9992C5.6625 21.2429 2 17.0811 2 12.0608C2 6.50472 6.4775 2 12 2C17.5225 2 22 6.50388 22 12.0608Z"
                                                      fill="white"/>
                                            </svg>
                                        </a></li>
					            <?php } ?>
					            <?php if ( isset( $redux_demo['socialMedia-instagram'] ) ) { ?>
                                    <li class="social__media__item"><a
                                                href="mailto:<?= $redux_demo['socialMedia-instagram'] ?>">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 3.80167C14.67 3.80167 14.9867 3.81167 16.0408 3.86C17.1308 3.91 18.2533 4.15833 19.0475 4.9525C19.8492 5.75417 20.09 6.86583 20.14 7.95917C20.1883 9.01333 20.1983 9.33 20.1983 12C20.1983 14.67 20.1883 14.9867 20.14 16.0408C20.0908 17.125 19.8367 18.2583 19.0475 19.0475C18.2458 19.8492 17.135 20.09 16.0408 20.14C14.9867 20.1883 14.67 20.1983 12 20.1983C9.33 20.1983 9.01333 20.1883 7.95917 20.14C6.88333 20.0908 5.735 19.8308 4.9525 19.0475C4.155 18.25 3.91 17.1275 3.86 16.0408C3.81167 14.9867 3.80167 14.67 3.80167 12C3.80167 9.33 3.81167 9.01333 3.86 7.95917C3.90917 6.87917 4.16583 5.73917 4.9525 4.9525C5.7525 4.1525 6.86833 3.91 7.95917 3.86C9.01333 3.81167 9.33 3.80167 12 3.80167ZM12 2C9.28417 2 8.94333 2.01167 7.87667 2.06C6.33083 2.13083 4.79583 2.56083 3.67833 3.67833C2.55667 4.8 2.13083 6.33167 2.06 7.87667C2.01167 8.94333 2 9.28417 2 12C2 14.7158 2.01167 15.0567 2.06 16.1233C2.13083 17.6675 2.5625 19.2067 3.67833 20.3217C4.79917 21.4425 6.33333 21.8692 7.87667 21.94C8.94333 21.9883 9.28417 22 12 22C14.7158 22 15.0567 21.9883 16.1233 21.94C17.6683 21.8692 19.205 21.4383 20.3217 20.3217C21.4442 19.1992 21.8692 17.6683 21.94 16.1233C21.9883 15.0567 22 14.7158 22 12C22 9.28417 21.9883 8.94333 21.94 7.87667C21.8692 6.33083 21.4383 4.795 20.3217 3.67833C19.2025 2.55917 17.6642 2.13 16.1233 2.06C15.0567 2.01167 14.7158 2 12 2Z"
                                                      fill="white"/>
                                                <path d="M12.0002 6.86523C9.1644 6.86523 6.86523 9.1644 6.86523 12.0002C6.86523 14.8361 9.1644 17.1352 12.0002 17.1352C14.8361 17.1352 17.1352 14.8361 17.1352 12.0002C17.1352 9.1644 14.8361 6.86523 12.0002 6.86523ZM12.0002 15.3336C10.1594 15.3336 8.6669 13.8411 8.6669 12.0002C8.6669 10.1594 10.1594 8.6669 12.0002 8.6669C13.8411 8.6669 15.3336 10.1594 15.3336 12.0002C15.3336 13.8411 13.8411 15.3336 12.0002 15.3336Z"
                                                      fill="white"/>
                                                <path d="M17.3382 7.86143C18.0009 7.86143 18.5382 7.32417 18.5382 6.66143C18.5382 5.99868 18.0009 5.46143 17.3382 5.46143C16.6754 5.46143 16.1382 5.99868 16.1382 6.66143C16.1382 7.32417 16.6754 7.86143 17.3382 7.86143Z"
                                                      fill="white"/>
                                            </svg>
                                        </a></li>
					            <?php } ?>
                            </ul>

				            <?php if ( isset( $redux_demo['company_email'] ) ) { ?>
                                <p class="email"><a href="mailto:<?= $redux_demo['company_email'] ?>">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.4167 2H5.58333C4.3682 2.00146 3.20326 2.48481 2.34403 3.34404C1.48481 4.20326 1.00146 5.3682 1 6.58333L1 17.5833C1.00146 18.7985 1.48481 19.9634 2.34403 20.8226C3.20326 21.6819 4.3682 22.1652 5.58333 22.1667H18.4167C19.6318 22.1652 20.7967 21.6819 21.656 20.8226C22.5152 19.9634 22.9985 18.7985 23 17.5833V6.58333C22.9985 5.3682 22.5152 4.20326 21.656 3.34404C20.7967 2.48481 19.6318 2.00146 18.4167 2ZM5.58333 3.83333H18.4167C18.9656 3.83441 19.5016 3.99972 19.9557 4.30799C20.4099 4.61625 20.7614 5.05337 20.965 5.56308L13.9452 12.5838C13.4286 13.0984 12.7291 13.3873 12 13.3873C11.2709 13.3873 10.5714 13.0984 10.0548 12.5838L3.035 5.56308C3.23864 5.05337 3.59015 4.61625 4.04429 4.30799C4.49844 3.99972 5.03445 3.83441 5.58333 3.83333ZM18.4167 20.3333H5.58333C4.85399 20.3333 4.15451 20.0436 3.63879 19.5279C3.12306 19.0122 2.83333 18.3127 2.83333 17.5833V7.95833L8.75867 13.88C9.61908 14.7382 10.7847 15.2202 12 15.2202C13.2153 15.2202 14.3809 14.7382 15.2413 13.88L21.1667 7.95833V17.5833C21.1667 18.3127 20.8769 19.0122 20.3612 19.5279C19.8455 20.0436 19.146 20.3333 18.4167 20.3333Z"
                                                  fill="white"/>
                                        </svg>
                                        <span><?= $redux_demo['company_email'] ?></span></a></p>
				            <?php } ?>
                        </div>
                    </div>
		            <?php if ( ! empty( $contact__components['contact_form_short_code'] ) ) { ?>
                        <div class="contact__form">
				            <?= do_shortcode( $contact__components['contact_form_short_code'] ) ?>
                        </div>
		            <?php } ?>
                </section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>