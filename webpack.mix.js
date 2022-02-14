const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    // 'public/vendors/overlayscrollbars/OverlayScrollbars.min.css',
    'public/assets/css/theme-rtl.min.css',
    'public/assets/css/theme.min.css',
    'public/assets/css/user-rtl.min.css',
    'public/assets/css/user.min.css'
    ], 'public/css/admin.css');

 mix.scripts([
      'public/vendors/popper/popper.min.js',
      'public/vendors/bootstrap/bootstrap.min.js',
      'public/vendors/anchorjs/anchor.min.js',
      'public/vendors/is/is.min.js',
      'public/vendors/echarts/echarts.min.js',
      'public/vendors/fontawesome/all.min.js',
      'public/vendors/lodash/lodash.min.js',
      // 'https://polyfill.io/v3/polyfill.min.js?features=window.scroll',
      'public/vendors/list.js/list.min.js',
      'public/assets/js/theme.js',
   ], 'public/js/admin.js');