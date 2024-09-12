<!DOCTYPE html>
<html lang="en-US" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php if($setting->first()->title != null): ?>
        <title><?php echo e($setting->first()->title); ?></title>
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/eh03duwi/a3jsn.css"
        media="all" />
    <style id='jetpack-sharing-buttons-style-inline-css' type='text/css'>
        .jetpack-sharing-buttons__services-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 0;
            list-style-type: none;
            margin: 5px;
            padding: 0
        }

        .jetpack-sharing-buttons__services-list.has-small-icon-size {
            font-size: 12px
        }

        .jetpack-sharing-buttons__services-list.has-normal-icon-size {
            font-size: 16px
        }

        .jetpack-sharing-buttons__services-list.has-large-icon-size {
            font-size: 24px
        }

        .jetpack-sharing-buttons__services-list.has-huge-icon-size {
            font-size: 36px
        }

        @media print {
            .jetpack-sharing-buttons__services-list {
                display: none !important
            }
        }

        .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
            gap: 0;
            padding-inline-start: 0
        }

        ul.jetpack-sharing-buttons__services-list.has-background {
            padding: 1.25em 2.375em
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/1y6plmk/5ukdx.css"
        media="all" />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/14oboyxa/5ukdx.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/2c3d52n2/5ukdx.css"
        media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/buoawj8/5ukdx.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/78qfj7b0/5u9rb.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/7xzwkiy0/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='elementor-post-2283-css'
        href='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/uploads/elementor/css/post-2283eefd.css?ver=1715248386' type='text/css'
        media='all' />
    <link rel="stylesheet" href="<?php echo e(asset('landingpage/sharee/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/6zsossqs/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='elementor-post-2325-css'
        href='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/uploads/elementor/css/post-23252ee6.css?ver=1715511391' type='text/css'
        media='all' />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/qa9ezqp0/5ukdx.css"
        media="all" />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/7ll98hwt/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='flatsome-googlefonts-css'
        href='http://fonts.googleapis.com/css?family=Lato%3Aregular%2C700%2C400%2C700%7CDancing+Script%3Aregular%2C400&amp;display=swap&amp;ver=3.9'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHind+Siliguri%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.3'
        type='text/css' media='all' />
    
    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/mob3d79n/5u9rb.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/quq3qn0g/5u9rb.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/pxrbfce/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/7io3j6c5/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/2nytrlxg/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/e5xv04yd/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/2z65b5dc/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/fpauzlgh/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/5awtn25/5ukdy.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/g38vfwxl/4euc4.js' type="text/javascript"></script>


    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/dq7tdaz1/a3jsn.js' type="text/javascript"></script>

    <script src='<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/kc8sjhif/5ukdy.js' type="text/javascript"></script>

    <style>
        img#wpstats {
            display: none
        }
    </style>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    <?php if($setting->first()->favicon != null): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->favicon); ?>">
    <?php endif; ?>

    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #f88613;
        }

        .header-main {
            height: 84px
        }

        #logo img {
            max-height: 84px
        }

        #logo {
            width: 251px;
        }

        .header-bottom {
            min-height: 33px
        }

        .header-top {
            min-height: 30px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 164px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .search-form {
            width: 93%;
        }

        .header-bottom {
            background-color: #f88613
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        .header-bottom-nav>li>a {
            line-height: 47px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .nav-dropdown-has-arrow li.has-dropdown:before {
            border-bottom-color: #FFFFFF;
        }

        .nav .nav-dropdown {
            border-color: #FFFFFF
        }

        .nav-dropdown {
            font-size: 100%
        }

        .nav-dropdown-has-arrow li.has-dropdown:after {
            border-bottom-color: #FFFFFF;
        }

        .nav .nav-dropdown {
            background-color: #FFFFFF
        }

        .header-top {
            background-color: #F7F7F7 !important;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,[data-color='primary'],
        .is-outline.primary {
            color: #f88613;
        }

        /* Color !important */[data-text-color="primary"]{color: #f88613!important;}/* Background Color */[data-text-bg="primary"]{background-color: #f88613;}/* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #f88613;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #f88613
        }

        .nav-tabs>li.active>a {
            border-top-color: #f88613
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #f88613
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #f88613
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #f88613;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button {
            background-color: #f88613;

            }[data-text-bg="secondary"] {
                background-color: #f88613;
            }

            /* Color */
            .secondary.is-underline,
            .secondary.is-link,
            .secondary.is-outline,
            .stars a.active,
            .star-rating:before,
            .woocommerce-page .star-rating:before,
            .star-rating span:before,
            .color-secondary {
                color: #f88613
            }

            /* Color !important */[data-text-color="secondary"]{color: #f88613!important;}/* Border */
            .secondary.is-outline:hover {
                border-color: #f88613
            }

            .alert.is-underline:hover,
            .alert.is-outline:hover,
            .alert {
                background-color: #dd3333
            }

            .alert.is-link,
            .alert.is-outline,
            .color-alert {
                color: #dd3333;
            }

            /* Color !important */[data-text-color="alert"]{color: #dd3333!important;}/* Background Color */[data-text-bg="alert"]{background-color: #dd3333;}body{font-size: 100%;}body{font-family:"Lato", sans-serif}body{font-weight: 400}body{color: #2b2a2a}.nav > li > a {font-family:"Lato", sans-serif;}.nav > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Lato", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #555555;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.current .breadcrumb-step, [data-icon-label]:after, .button#place_order,.button.checkout,.checkout-button,.single_add_to_cart_button.button{background-color: #f88613!important }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.footer-1{background-color: #e5e5e5}.footer-2{background-color: #0a0a0a}.absolute-footer, html{background-color: #f88613}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}
    </style>

    <!-- Meta Pixel Code -->
    <?php if($markatingsetting->first()->fb_pixel != null): ?>
        <?php echo $markatingsetting->first()->fb_pixel; ?>

    <?php endif; ?>
    

    <!-- googletag Code -->
    <?php if($markatingsetting->first()->google_tag != null): ?>
        <?php echo $markatingsetting->first()->google_tag; ?>

    <?php endif; ?>
    <!-- End googletag Code -->
</head>

<body class="cartflows_step-template cartflows_step-template-cartflows-canvas single single-cartflows_step postid-2325 theme-flatsome woocommerce-checkout woocommerce-page woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-flatsome wvs-show-label wvs-tooltip lightbox nav-dropdown-has-arrow cartflows-2.0.6  cartflows-pro-2.0.4 elementor-default elementor-kit-2283 elementor-page elementor-page-2325 cartflows-canvas">
    <div class="cartflows-container">
        <div data-elementor-type="wp-post" data-elementor-id="2325" class="elementor elementor-2325"
            data-elementor-post-type="cartflows_step">
            <div class="elementor-element elementor-element-a9c6b75 e-flex e-con-boxed e-con e-parent"
                data-id="a9c6b75" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-514ca3e elementor-headline--style-rotate elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-animated-headline"
                        data-id="514ca3e" data-element_type="widget"
                        data-settings="{&quot;headline_style&quot;:&quot;rotate&quot;,&quot;rotating_text&quot;:&quot;\u09e9 \u09a6\u09bf\u09a8\u09c7\u09b0 \u099c\u09a8\u09cd\u09af \u09aa\u09cd\u09b0\u09af\u09cb\u099c\u09cd\u09af&quot;,&quot;animation_type&quot;:&quot;typing&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;rotate_iteration_delay&quot;:2500}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet" type="text/css"
                                href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/zixf9ao/5ukdx.css" media="all" />
                            <h3
                                class="elementor-headline elementor-headline-animation-type-typing elementor-headline-letters">
                                <span class="elementor-headline-plain-text elementor-headline-text-wrapper">হোম
                                    ডেলিভারি ফ্রি </span>
                                <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span class="elementor-headline-dynamic-text elementor-headline-text-active">
                                        ৩&nbsp;দিনের&nbsp;জন্য&nbsp;প্রযোজ্য </span>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-14a677d elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-countdown--label-block elementor-widget elementor-widget-countdown"
                        data-id="14a677d" data-element_type="widget" data-widget_type="countdown.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! pro-elements - v3.21.0 - 30-04-2024 */
                                .elementor-widget-countdown .elementor-countdown-expire--message {
                                    display: none;
                                    padding: 20px;
                                    text-align: center
                                }

                                .elementor-widget-countdown .elementor-countdown-wrapper {
                                    flex-direction: row
                                }

                                .elementor-widget-countdown .elementor-countdown-item {
                                    padding: 20px 0;
                                    text-align: center;
                                    color: #fff
                                }

                                .elementor-widget-countdown .elementor-countdown-digits,
                                .elementor-widget-countdown .elementor-countdown-label {
                                    line-height: 1
                                }

                                .elementor-widget-countdown .elementor-countdown-digits {
                                    font-size: 69px
                                }

                                .elementor-widget-countdown .elementor-countdown-label {
                                    font-size: 19px
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-wrapper {
                                    display: flex;
                                    justify-content: center;
                                    margin-right: auto;
                                    margin-left: auto
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-digits,
                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-label {
                                    display: block
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-item {
                                    flex-basis: 0;
                                    flex-grow: 1
                                }

                                .elementor-widget-countdown.elementor-countdown--label-inline {
                                    text-align: center
                                }

                                .elementor-widget-countdown.elementor-countdown--label-inline .elementor-countdown-item {
                                    display: inline-block;
                                    padding-left: 5px;
                                    padding-right: 5px
                                }
                            </style>
                            <div id="simple_timer" class="elementor-countdown-wrapper">
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-hours"></span> <span
                                        class="elementor-countdown-label">Hours</span></div>
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-minutes"></span> <span
                                        class="elementor-countdown-label">Minutes</span></div>
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-seconds"></span> <span
                                        class="elementor-countdown-label">Seconds</span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-fe03454 e-con-full e-flex e-con e-parent"
                data-id="fe03454" data-element_type="container">
                <div class="elementor-element elementor-element-eecf8aa elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="eecf8aa" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;wd-anim-top-flip-x&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-heading-title {
                                padding: 0;
                                margin: 0;
                                line-height: 1
                            }

                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                color: inherit;
                                font-size: inherit;
                                line-height: inherit
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                font-size: 15px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                font-size: 19px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                font-size: 29px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                font-size: 39px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                font-size: 59px
                            }
                        </style>
                        <h2 class="elementor-heading-title elementor-size-default">
                            প্রিয় মানুষকে মনের মতো সাজিয়ে নিন এই সুন্দর ড্রেস টি গিফট দিয়ে।
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-078d25b elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                    data-id="078d25b" data-element_type="widget">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-widget-image-carousel .swiper,
                            .elementor-widget-image-carousel .swiper-container {
                                position: static
                            }

                            .elementor-widget-image-carousel .swiper-container .swiper-slide figure,
                            .elementor-widget-image-carousel .swiper .swiper-slide figure {
                                line-height: inherit
                            }

                            .elementor-widget-image-carousel .swiper-slide {
                                text-align: center
                            }

                            .elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide {
                                max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                            }
                        </style>
                        <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                            <div class="imageautoplay" aria-live="off">
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/1.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/2.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/3.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/4.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/11.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/22.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/33.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/44.JPG')); ?>" alt="3.jpg" /></figure>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e0c25d4 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget__width-initial elementor-widget elementor-widget-button"
                    data-id="e0c25d4" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                href="#chackout">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                        <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                    <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-278d1b5 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                    data-id="278d1b5" data-element_type="widget">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper">
                            <div class="imageautoplay">
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/8.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/6.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/7.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/111.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/222.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/333.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/444.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/1111.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/2222.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/3333.JPG')); ?>" alt="3.jpg" /></figure>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-82347ec elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                    data-id="82347ec" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">১০০% কোয়ালিটিফুল</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dda0f6e elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                    data-id="dda0f6e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"> ১০০% কালার গ্যারান্টি</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4370643 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="4370643" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">প্রিমিয়াম কোয়ালিটির নিশ্চয়তা</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a428d27 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                    data-id="a428d27" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                background-color: #69727d;
                                color: #fff
                            }

                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                color: #69727d;
                                border: 3px solid;
                                background-color: transparent
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                margin-top: 8px
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                width: 1em;
                                height: 1em
                            }

                            .elementor-widget-text-editor .elementor-drop-cap {
                                float: left;
                                text-align: center;
                                line-height: 1;
                                font-size: 50px
                            }

                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                display: inline-block
                            }
                        </style>
                        <p><span style="font-weight: 400;">&#8221;দেখতে অসম্ভব সুন্দর এই জামা + ওড়না সেট </span><span style="font-weight: 400;">খুবই প্রিমিয়াম ও আরামদায়ক&#8221;</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2928c85 e-flex e-con-boxed e-con e-parent"
                data-id="2928c85" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-71c4e31 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                        data-id="71c4e31" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">প্রডাক্টের <span
                                    style="color: #FFCB00">"ভিডিও দেখুন" </span> </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-69ca886 elementor-widget__width-initial elementor-widget elementor-widget-video"
                        data-id="69ca886" data-element_type="widget">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.21.0 - 08-05-2024 */
                                .elementor-widget-video .elementor-widget-container {
                                    overflow: hidden;
                                    transform: translateZ(0)
                                }

                                .elementor-widget-video .elementor-wrapper {
                                    aspect-ratio: var(--video-aspect-ratio)
                                }

                                .elementor-widget-video .elementor-wrapper iframe,
                                .elementor-widget-video .elementor-wrapper video {
                                    height: 100%;
                                    width: 100%;
                                    display: flex;
                                    border: none;
                                    background-color: #000
                                }

                                @supports not (aspect-ratio:1/1) {
                                    .elementor-widget-video .elementor-wrapper {
                                        position: relative;
                                        overflow: hidden;
                                        height: 0;
                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                    }

                                    .elementor-widget-video .elementor-wrapper iframe,
                                    .elementor-widget-video .elementor-wrapper video {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0
                                    }
                                }

                                .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    bottom: 0;
                                    left: 0;
                                    background-size: cover;
                                    background-position: 50%
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay {
                                    cursor: pointer;
                                    text-align: center
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                    opacity: 1
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                    display: block;
                                    width: 100%;
                                    aspect-ratio: var(--video-aspect-ratio);
                                    -o-object-fit: cover;
                                    object-fit: cover;
                                    -o-object-position: center center;
                                    object-position: center center
                                }

                                @supports not (aspect-ratio:1/1) {
                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                        position: relative;
                                        overflow: hidden;
                                        height: 0;
                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                    }

                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0
                                    }
                                }

                                .elementor-widget-video .e-hosted-video .elementor-video {
                                    -o-object-fit: cover;
                                    object-fit: cover
                                }

                                .e-con-inner>.elementor-widget-video,
                                .e-con>.elementor-widget-video {
                                    width: var(--container-widget-width);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }
                            </style>
                            <div class="elementor-wrapper elementor-open-inline">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/3FRV5dPs7EE?si=EfX3HXr-arKrSxqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5ae27e9 e-con-full e-flex e-con e-parent"
                data-id="5ae27e9" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-2120b29 e-con-full e-flex e-con e-child"
                    data-id="2120b29" data-element_type="container">
                    <div class="elementor-element elementor-element-449a027 elementor-widget elementor-widget-heading"
                        data-id="449a027" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><?php echo e($products->name); ?>

                            </h2>
                        </div>
                    </div>

                    <div class="elementor-element elementor-element-022d10a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="022d10a" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">মদীনা প্রিন্ট করা কালার ১০০% গ্যারান্টি।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">লং ৪৭"+ ফেব্রিক্স ১০০%কটন।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">জামা+ওরনা টু পিস।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">পায়জামার কাপড় থাকবে না।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">বডি ৬০"পর্যন্ত বানাতে পারবেন।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">ওড়নার কাপড় দেওয়া আছে ৫ হাত।</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5cfe451 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-widget elementor-widget-button"
                        data-id="5cfe451" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                    href="#chackout">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                        <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9011660 e-con-full e-flex e-con e-child"
                    data-id="9011660" data-element_type="container">
                    <div class="elementor-element elementor-element-703b89f elementor-widget__width-initial elementor-widget elementor-widget-heading"
                        data-id="703b89f" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">সবগুলো ছবি একসাথে দেখুন</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d879611 elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                        data-id="d879611" data-element_type="widget">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                <div class="imageautoplay" aria-live="off">
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/2.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/1.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/5.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/6.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/7.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/11.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/22.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/111.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/222.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/333.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/444.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/1111.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/2222.JPG')); ?>" alt="3.jpg" /></figure>
                                <figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('landingpage/sharee/fourdress/3333.JPG')); ?>" alt="3.jpg" /></figure>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-42bc362 e-flex e-con-boxed e-con e-parent"
                data-id="42bc362" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-2eb5ba3 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                        data-id="2eb5ba3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">-------বিঃদ্রঃ------</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7b4be82 elementor-widget elementor-widget-text-editor"
                        data-id="7b4be82" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>বাজারে সবার চেয়ে কম প্রাইজে অর্ডার করতে চাইলে এখনি অর্ডার করুন কারন * আমরা নিজস্ব কারখানায় ২০১২ সাল থেকে ইসলামপুরে পোশাক তৈরি করে আসছি।* আমাদের সকল কাপড় প্রস্তুত করি।জামা ও ওড়নার কাপড় সম্পুর্ন সুতি।</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a7a7989 e-con-full e-flex e-con e-parent"
                data-id="a7a7989" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-561989e elementor-widget elementor-widget-heading"
                    data-id="561989e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            প্রিয় মানুষকে মনের মতো সাজিয়ে নিন এই সুন্দর ড্রেস টি গিফট দিয়ে।
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9353576 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="9353576" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider"
                            style="--divider-pattern-url: url(_data_image/svg%2bxml%2c_svg%20xmlns%3dhttp_/www.w3.org/2000/svg%20preserveAspectRatio%3dnone%20overflow%3dvisible%20h/__/svg_-2.html);">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5219f14 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-align-center elementor-widget__width-initial elementor-widget elementor-widget-button"
                    data-id="5219f14" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                href="#chackout">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                        <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                    <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5219f14 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-align-center elementor-widget__width-initial elementor-widget elementor-widget-button"
                    data-id="5219f14" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <?php if($setting->first()->number_two != null): ?>
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                    href="https://api.whatsapp.com/send?phone=88<?php echo e($setting->first()->number_two); ?>&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20Product." target="_blank" style="background: #33D422">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <img style="width: 65px"
                                                src="<?php echo e(asset('landingpage/sharee/whatsapp.png')); ?>" alt="">
                                            <span
                                                class="elementor-button-text"><?php echo e($setting->first()->number_two); ?></span>
                                        </span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="elementor-widget-wrap elementor-element-populated e-swiper-container" style="padding-top: 20px; text-align: center">
                    <div class="elementor-element elementor-element-1eb4728a elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                        data-id="1eb4728a" data-element_type="widget"
                        data-settings="{&quot;marker&quot;:&quot;x&quot;,&quot;highlighted_text&quot;:&quot;\u09e7\u09ee\u09e6\u09e6\/-&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet"
                                href="https://elegentbd.com/wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css">
                                <style>
                                    .elementor-headline--style-highlight .elementor-headline-plain-text {
                                        z-index: 1;
                                        position: relative;
                                        color: #000;
                                        font-size: 25px;
                                    }
                                    .elementor-headline-dynamic-wrapper .elementor-headline-dynamic-text.elementor-headline-text-active {
                                        position: relative;
                                        color: #000;
                                    }
                                </style>
                            <h3 class="elementor-headline e-animated">
                                <span style="font-family: 'Hind Siliguri', Sans-serif" class="elementor-headline-plain-text elementor-headline-text-wrapper">মদিনা ডাইং, আনস্টিচ টু পিস, রেগুলার প্রাইস </span>
                                <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span
                                        class="elementor-headline-dynamic-text elementor-headline-text-active">১২৫০/-</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
                                        preserveAspectRatio="none">
                                        <path style="stroke: red;" d="M497.4,23.9C301.6,40,155.9,80.6,4,144.4"></path>
                                        <path style="stroke: red;" d="M14.1,27.6c204.5,20.3,393.8,74,467.3,111.7"></path>
                                    </svg></span>
                                <span class="elementor-headline-plain-text elementor-headline-text-wrapper">টাকা</span>
                            </h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-65994e40 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                        data-id="65994e40" data-element_type="widget"
                        data-settings="{&quot;highlighted_text&quot;:&quot;\u09e7\u09e9\u09e6\u09e6\/-&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-headline e-animated">
                                <span style="font-family: 'Hind Siliguri', Sans-serif" class="elementor-headline-plain-text elementor-headline-text-wrapper">আজকের অফার প্রাইস </span>
                                <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span
                                        class="elementor-headline-dynamic-text elementor-headline-text-active">৯৫০/-</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
                                        preserveAspectRatio="none">
                                        <path
                                            d="M325,18C228.7-8.3,118.5,8.3,78,21C22.4,38.4,4.6,54.6,5.6,77.6c1.4,32.4,52.2,54,142.6,63.7 c66.2,7.1,212.2,7.5,273.5-8.3c64.4-16.6,104.3-57.6,33.8-98.2C386.7-4.9,179.4-1.4,126.3,20.7">
                                        </path>
                                    </svg></span>
                                <span class="elementor-headline-plain-text elementor-headline-text-wrapper">টাকা</span>
                            </h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-65994e40 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                        data-id="65994e40" data-element_type="widget"
                        data-settings="{&quot;highlighted_text&quot;:&quot;\u09e7\u09e9\u09e6\u09e6\/-&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-headline e-animated">
                                <span style="font-family: 'Hind Siliguri', Sans-serif" class="elementor-headline-plain-text elementor-headline-text-wrapper">দুই সেট অর্ডার করলে সারাদেশে হোম ডেলিভারি ফ্রি।</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-e6e60b8 e-con-full e-flex e-con e-parent"
                data-id="e6e60b8" data-element_type="container">
                <div class="elementor-element elementor-element-1fc5908 elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="1fc5908" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">অর্ডার করতে নিচের ফর্মটি সঠিক ভাবে
                            পুরন করুন</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-02908c6 elementor-widget-mobile__width-initial elementor-widget elementor-widget-checkout-form"
                    data-id="02908c6" data-element_type="widget" id="chackout"
                    data-widget_type="checkout-form.default">
                    <div class="elementor-widget-container">
                        <div class = "wcf-el-checkout-form cartflows-elementor__checkout-form">
                            <div id="wcf-embed-checkout-form"
                                class="wcf-embed-checkout-form wcf-embed-checkout-form-one-column  wcf-field-default">
                                <!-- CHECKOUT SHORTCODE -->
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <form action="<?php echo e(route('landing.order.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">
                                        <input type="hidden" name="attribute_id" value="86">
                                        <input type="hidden" name="inventory_id" value="37">
                                        <?php if($products->inventorie_id != null): ?>
                                            <?php if($products->rel_to_inventorie): ?>
                                                <?php
                                                    $inventorie = $products->rel_to_inventorie
                                                ?>
                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($attribute->sell_price != null): ?>
                                                        <input type="hidden" name="price" value="<?php echo e($attribute->sell_price); ?>">
                                                    <?php else: ?>
                                                        <input type="hidden" id="product_price" name="price" value="<?php echo e($attribute->price); ?>">
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if($products->sell_price != null): ?>
                                                <input type="hidden" id="product_price" name="price" value="<?php echo e($products->sell_price); ?>">
                                            <?php else: ?>
                                                <input type="hidden" id="product_price" name="price" value="<?php echo e($products->price); ?>">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <div  class="wcf-product-option-wrap wcf-yp-skin-classic wcf-product-option-before-customer">
                                            <h3 id="billing_fields_heading">Billing details</h3>
                                            <h3 id="your_products_heading"> একপিচ এর অধিক অর্ডার এর জন্য পরিমান লিখুন ও পছন্দের কালার গুলি সিলেক্ট করুন</h3>
                                            <!-- Product Options Table -->
                                            <div class="wcf-qty-options">
                                                <div class="wcf-qty-row wcf-qty-table-titles">
                                                    <div class="wcf-qty-header wcf-item">
                                                        <div class="wcf-field-label">পণ্য</div>
                                                    </div>
                                                    <div class="wcf-qty-header wcf-qty ">
                                                        <div class="wcf-field-label">পরিমান</div>
                                                    </div>
                                                    <div class="wcf-qty-header wcf-price">
                                                        <div class="wcf-field-label">মূল্য</div>
                                                    </div>
                                                </div>
                                                <div class="wcf-qty-row wcf-qty-row-2276">
                                                    <!-- Product Row 1 -->
                                                    <div class="wcf-item">
                                                        <div class="wcf-item-selector wcf-item-single-sel">
                                                            <?php if($products->inventorie_id != null): ?>
                                                                <?php if($products->rel_to_inventorie): ?>
                                                                    <?php
                                                                        $inventorie = $products->rel_to_inventorie
                                                                    ?>
                                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($attribute->sell_price != null): ?>
                                                                            <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($attribute->sell_price); ?>" data-image="" checked="checked">
                                                                        <?php else: ?>
                                                                            <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($attribute->price); ?>" data-image="" checked="checked">
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php if($products->sell_price != null): ?>
                                                                    <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($products->sell_price); ?>" data-image="" checked="checked">
                                                                <?php else: ?>
                                                                    <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($products->price); ?>" data-image="" checked="checked">
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="wcf-item-image" style="">
                                                            <?php if($products->inventorie_id != null): ?>
                                                                <?php if($products->rel_to_inventorie): ?>
                                                                    <?php
                                                                        $inventorie = $products->rel_to_inventorie
                                                                    ?>
                                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <img fetchpriority="high" decoding="async" width="300" height="300" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <img fetchpriority="high" decoding="async" width="300" height="300" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                            <?php endif; ?>

                                                        </div>
                                                        <div class="wcf-item-all-text">
                                                            <div class="wcf-item-wrap">
                                                                <span class="wcf-display-title"><?php echo e($products->name); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wcf-qty">
                                                        <div class="wcf-qty-selection-wrap">
                                                            <input type="number" id="quantity" value="1" step="1" min="1" name="quantity" class="wcf-qty-selection" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="wcf-price">
                                                        <div class="wcf-display-price wcf-field-label">
                                                            <?php if($products->inventorie_id != null): ?>
                                                                <?php if($products->rel_to_inventorie): ?>
                                                                    <?php
                                                                        $inventorie = $products->rel_to_inventorie
                                                                    ?>
                                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($attribute->sell_price != null): ?>
                                                                            <label for="product_1" id="subtotal"><?php echo e($attribute->sell_price); ?>৳</label>
                                                                        <?php else: ?>
                                                                            <label for="product_1" id="subtotal"><?php echo e($attribute->price); ?>৳</label>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php if($products->sell_price != null): ?>
                                                                    <label for="product_1" id="subtotal"><?php echo e($products->sell_price); ?>৳</label>
                                                                <?php else: ?>
                                                                    <label for="product_1" id="subtotal"><?php echo e($products->price); ?>৳</label>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <p style="padding-top: 20px" class=" address-field form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_address_1_field" data-priority="20">
                                                    <label style="margin-bottom: 0" for="color" class="">পছন্দের কালারটি সিলেক্ট করুন&nbsp;
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <style>
                                                        .woocommerce-input-wrapper label{
                                                            margin: 0 6px ;
                                                        }
                                                    </style>
                                                    <div class="woocommerce-input-wrapper" style="display: inline-flex">
                                                        <label>
                                                            <input type="hidden" name="color[]" checked value="টিয়া" class="input-checkbox">
                                                            টিয়া
                                                        </label>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wcf-col2-set col2-set" id="customer_details">
                                            <div class="wcf-col-1 col-1">
                                                <div class="woocommerce-billing-fields">

                                                    <div class="woocommerce-billing-fields__field-wrapper">

                                                        <p class="form-row form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_first_name_field" data-priority="10">
                                                            <label for="name" class="">আপনার নাম&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="name" id="name" placeholder="সম্পূর্ন নামটি লিখুন" value="" autocomplete="given-name" required />
                                                            </span>
                                                        </p>
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <p class="form-row address-field form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_address_1_field" data-priority="20">
                                                            <label for="address" class="">আপনার সম্পূর্ণ ঠিকানা&nbsp;
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="address" id="address" placeholder="আপনার সম্পূর্ণ ঠিকানা লিখুন" value="" autocomplete="address-line1" required />
                                                            </span>
                                                        </p>
                                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <p class="form-row form-row-wide thwcfd-required thwcfd-field-wrapper thwcfd-field-tel wcf-column-100 validate-required validate-phone" id="billing_phone_field" data-priority="30">
                                                            <label for="mobile" class="">আপনার ফোন নাম্বার&nbsp;
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="tel" class="input-text " name="mobile" id="mobile" placeholder="আপনার ফোন নাম্বার লিখুন" value="" autocomplete="tel" required />
                                                            </span>
                                                        </p>
                                                        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <script>
                                                                Swal.fire({
                                                                    icon: "error",
                                                                    title: "Oops...",
                                                                    text: "Something went wrong!",
                                                                });
                                                            </script>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wcf-col-2 col-2">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered woocommerce-checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Sample Product Row -->
                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        <div class="wcf-product-image">
                                                                            <div class="wcf-product-thumbnail">
                                                                                <?php if($products->inventorie_id != null): ?>
                                                                                    <?php if($products->rel_to_inventorie): ?>
                                                                                        <?php
                                                                                            $inventorie = $products->rel_to_inventorie
                                                                                        ?>
                                                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <img fetchpriority="high" decoding="async" width="80" height="80" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php endif; ?>
                                                                                <?php else: ?>
                                                                                    <img fetchpriority="high" decoding="async" width="80" height="80" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($products->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                                                <?php endif; ?>
                                                                                <a href="#" rel="nofollow"
                                                                                    class="wcf-remove-product cartflows-icon cartflows-circle-cross"
                                                                                    data-id="138"
                                                                                    data-item-key="013d407166ec4fa56eb1e1f8cbe183b9"></a>
                                                                            </div>
                                                                            <div class="wcf-product-name"><?php echo e($products->name); ?></div>
                                                                        </div>
                                                                        <strong class="product-quantity"></strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <?php if($products->inventorie_id != null): ?>
                                                                            <?php if($products->rel_to_inventorie): ?>
                                                                                <?php
                                                                                    $inventorie = $products->rel_to_inventorie
                                                                                ?>
                                                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($attribute->sell_price != null): ?>
                                                                                        <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($attribute->sell_price); ?>

                                                                                            <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                        </span>
                                                                                    <?php else: ?>
                                                                                        <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($attribute->price); ?>

                                                                                            <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                        </span>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php else: ?>
                                                                            <?php if($products->sell_price != null): ?>
                                                                                <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($products->sell_price); ?>

                                                                                    <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                </span>
                                                                            <?php else: ?>
                                                                                <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($products->price); ?>

                                                                                    <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                </span>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>

                                                                    </td>
                                                                </tr>
                                                                <!-- Add more product rows as needed -->
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td>
                                                                        <?php if($products->inventorie_id != null): ?>
                                                                            <?php if($products->rel_to_inventorie): ?>
                                                                                <?php
                                                                                    $inventorie = $products->rel_to_inventorie
                                                                                ?>
                                                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($attribute->sell_price != null): ?>
                                                                                        <input type="hidden" name="sub_total" value="<?php echo e($attribute->sell_price); ?>" id="sub_total_input">
                                                                                        <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($attribute->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                    <?php else: ?>
                                                                                        <input type="hidden" name="sub_total" value="<?php echo e($attribute->price); ?>" id="sub_total_input">
                                                                                        <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($attribute->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php else: ?>
                                                                            <?php if($products->sell_price != null): ?>
                                                                                <input type="hidden" name="sub_total" value="<?php echo e($products->sell_price); ?>" id="sub_total_input">
                                                                                <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($products->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                            <?php else: ?>
                                                                                <input type="hidden" name="sub_total" value="<?php echo e($products->price); ?>" id="sub_total_input">
                                                                                <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($products->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>

                                                                    </td>
                                                                </tr>
                                                                <!-- Shipping Options -->
                                                                <tr class="woocommerce-shipping-totals shipping">
                                                                    <th>Shipping</th>
                                                                    <td data-title="Shipping">
                                                                        <!-- Shipping Methods -->
                                                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                            <!-- Sample Shipping Method 1 -->
                                                                            <li>
                                                                                <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_flat_rate2" value="60" class="shipping_method" checked="checked">
                                                                                <label for="shipping_method_0_flat_rate2">ঢাকার ভিতরে: <span class="woocommerce-Price-amount amount"><bdi>60<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                            </li>
                                                                            <!-- Sample Shipping Method 2 -->
                                                                            <li>
                                                                                <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_local_pickup3" value="120" class="shipping_method">
                                                                                <label for="shipping_method_0_local_pickup3">ঢাকার বাহিরে: <span class="woocommerce-Price-amount amount"><bdi>120<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <!-- End Shipping Options -->
                                                                <!-- Order Total -->
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td>
                                                                        <?php if($products->inventorie_id != null): ?>
                                                                            <?php if($products->rel_to_inventorie): ?>
                                                                                <?php
                                                                                    $inventorie = $products->rel_to_inventorie
                                                                                ?>
                                                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($attribute->sell_price != null): ?>
                                                                                        <input type="hidden" name="total" value="<?php echo e($attribute->sell_price); ?>" id="total_input">
                                                                                        <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($attribute->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                                    <?php else: ?>
                                                                                        <input type="hidden" name="total" value="<?php echo e($attribute->price); ?>" id="total_input">
                                                                                        <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($attribute->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php else: ?>
                                                                            <?php if($products->sell_price != null): ?>
                                                                                <input type="hidden" name="total" value="<?php echo e($products->sell_price); ?>" id="total_input">
                                                                                <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($products->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                            <?php else: ?>
                                                                                <input type="hidden" name="total" value="<?php echo e($products->price); ?>" id="total_input">
                                                                                <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($products->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                                <!-- End Order Total -->
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                    <!-- Payment Section -->
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <!-- Payment Methods -->
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <!-- Cash on Delivery (COD) Method -->
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="" style="display: none;">

                                                                <label for="payment_method_bacs">
                                                                    ক্যাশঅন ডেলিভারি 	</label>
                                                                        <div class="payment_box payment_method_bacs">
                                                                        <p>ডেলিভারি চার্জ প্রযোজ্য ১০০% কনফার্ম হয়ে অর্ডার করবেন। আপনার কোন কারনে  অর্ডার রিসিভ না করলে ডেলিভারি চার্জ দিয়ে রিটার্ন করতে পারবেন।</p>
                                                                    </div>
                                                            </li>
                                                            <!-- Add more payment methods as needed -->
                                                        </ul>

                                                        <!-- Terms and Conditions -->
                                                        <div class="form-row place-order">
                                                            <!-- Place Order Button -->
                                                            <button type="submit"
                                                                class="btn btn-warning w-100 mt-3 py-2 text-white mobile_btn"
                                                                style="background-color: #D01D3D;"
                                                                value="অর্ডার করুন">অর্ডার করুন</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- END CHECKOUT SHORTCODE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-color: #eee
            }

            .chat-btn {
                position: fixed;
                right: 14px;
                bottom: 30px;
                cursor: pointer
            }

            .chat-btn .close {
                display: none
            }

            .chat-btn i {
                transition: all 0.9s ease
            }

            #check:checked~.chat-btn i {
                display: block;
                pointer-events: auto;
                transform: rotate(180deg)
            }

            #check:checked~.chat-btn .comment {
                display: none
            }

            .chat-btn i {
                font-size: 22px;
                color: #fff !important
            }

            .chat-btn {
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50px;
                background-color: blue;
                color: #fff;
                font-size: 22px;
                border: none
            }

            .wrapper {
                position: fixed;
                right: 20px;
                bottom: 100px;
                width: 300px;
                background-color: #fff;
                border-radius: 5px;
                opacity: 0;
                transition: all 0.4s
            }

            #check:checked~.wrapper {
                opacity: 1
            }

            .header {
                padding: 13px;
                background-color: blue;
                border-radius: 5px 5px 0px 0px;
                margin-bottom: 10px;
                color: #fff
            }

            .chat-form {
                padding: 15px
            }

            .chat-form input,
            textarea,
            button {
                margin-bottom: 10px
            }

            .chat-form textarea {
                resize: none
            }

            .form-control:focus,
            .btn:focus {
                box-shadow: none
            }

            .btn,
            .btn:focus,
            .btn:hover {
                background-color: blue;
                border: blue
            }

            #check {
                display: none !important
            }
            .popup_image{
                text-align: center;
                padding: 20px 0;
            }
            .popup_btns li a{
                width: 100%;

            }
    </style>
    
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/cache/wpfc-minified/78qrtsnc/5ukdx.css"
        media="all" />


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php echo e(asset('landingpage/sharee/slick.min.js')); ?>"></script>

<script>
    // Function to start the countdown
    function startCountdown() {
        var countdownElement = document.getElementById('simple_timer');

        // Get the current time
        var now = new Date().getTime();

        // Set the target time to 24 hours from now
        var targetTime = now + (24 * 60 * 60 * 1000);

        // Update the countdown every second
        var x = setInterval(function() {
            // Get current time
            var now = new Date().getTime();

            // Find the distance between now and the target time
            var distance = targetTime - now;

            // Calculate hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the elements
            countdownElement.querySelector('.elementor-countdown-hours').innerHTML = hours;
            countdownElement.querySelector('.elementor-countdown-minutes').innerHTML = minutes;
            countdownElement.querySelector('.elementor-countdown-seconds').innerHTML = seconds;

            // If the countdown is over, reset it
            if (distance < 0) {
                clearInterval(x); // Stop the countdown interval
                startCountdown(); // Restart the countdown for the next 24 hours
            }
        }, 1000); // Update every second
    }

    // Start the countdown when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        startCountdown();
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('quantity');
        const shippingMethods = document.querySelectorAll('.shipping_method');
        const subtotalElement = document.getElementById('subtotal');
        const subtotalFooterElement = document.getElementById('subtotal_footer');
        const totalElement = document.getElementById('total');
        const productPrice = <?php echo e($attribute->price); ?>;
        let shippingCost = 60;

        function updateSubtotalAndTotal() {
            const quantity = parseInt(quantityInput.value);
            const subtotal = productPrice * quantity;
            const total = subtotal + shippingCost;

            subtotalElement.textContent = subtotal + '৳';
            subtotalFooterElement.textContent = subtotal + '৳';
            totalElement.textContent = total + '৳';

            document.getElementById('sub_total_input').value = subtotal;
            document.getElementById('total_input').value = total;
        }

        quantityInput.addEventListener('input', function() {
            updateSubtotalAndTotal();
        });

        shippingMethods.forEach(function(method) {
            method.addEventListener('change', function() {
                shippingCost = parseInt(this.value);
                updateSubtotalAndTotal();
            });
        });

        // Initial update
        updateSubtotalAndTotal();
    });
</script>

<script>
    $('.imageautoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
    });
</script>
        
        


    <script type="text/javascript" id="woo-variation-swatches-js-extra">
        /* <![CDATA[ */
        var woo_variation_swatches_options = {
            "show_variation_label": "1",
            "clear_on_reselect": "",
            "variation_label_separator": ":",
            "is_mobile": "",
            "show_variation_stock": "",
            "stock_label_threshold": "5",
            "cart_redirect_after_add": "no",
            "enable_ajax_add_to_cart": "yes",
            "cart_url": "https:\/\/cottonbd.nitebiz.com\/cart\/",
            "is_cart": ""
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="flatsome-js-js-extra">
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "https:\/\/cottonbd.nitebiz.com\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "70",
            "lightbox": {
                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            }
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="jetpack-stats-js-after">
        /* <![CDATA[ */
        _stq = window._stq || [];
        _stq.push(["view", JSON.parse(
            "{\"v\":\"ext\",\"blog\":\"233461444\",\"post\":\"2325\",\"tz\":\"6\",\"srv\":\"cottonbd.nitebiz.com\",\"j\":\"1:13.4.3\"}"
            )]);
        _stq.push(["clickTrackerInit", "233461444", "2325"]);
        /* ]]> */
    </script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/step\/silk-sharee\/?wc-ajax=%%endpoint%%&wcf_checkout_id=2325",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/pro-elements/assets/js/webpack-pro.runtime.min08e6.js?ver=3.21.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/elementor/assets/js/webpack.runtime.min63aa.js?ver=3.21.5"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/elementor/assets/js/frontend-modules.min63aa.js?ver=3.21.5"
        id="elementor-frontend-modules-js"></script>
    
    <script type="text/javascript" src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/pro-elements/assets/js/frontend.min08e6.js?ver=3.21.2"
        id="elementor-pro-frontend-js"></script>
    <script type="text/javascript"
        src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>

    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.21.5",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "container_grid": true,
                "theme_builder_v2": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "display-conditions": true,
                "form-submissions": true,
                "taxonomy-filter": true
            },
            "urls": {
                "assets": "https:\/\/cottonbd.nitebiz.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "woocommerce_notices_elements": []
            },
            "post": {
                "id": 2325,
                "title": "silk-Sharee%20-%20Bahari%20Color",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/elementor/assets/js/frontend.min63aa.js?ver=3.21.5"
        id="elementor-frontend-js"></script>
    <script type="text/javascript"
        src="<?php echo e(asset('landingpage/sharee')); ?>/wp-content/plugins/pro-elements/assets/js/elements-handlers.min08e6.js?ver=3.21.2"
        id="pro-elements-handlers-js"></script>

</body>
</html>
<?php /**PATH F:\all project\cottonbd\resources\views/landingpage/nine.blade.php ENDPATH**/ ?>