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
    'public/assets/css/plugins.css',
    'public/assets/css/style.css',
    'public/assets/css/colors/grape.css',
    'public/assets/css/fonts/urbanist.css',
    ], 'public/css/app.css');

 mix.scripts([
      'public/assets/js/plugins.js',
      'public/assets/js/theme.js',
      // 'public/vendor/jquery-browser-mobile/jquery.browser.mobile.js',
      // 'public/vendor/popper/umd/popper.min.js',
      // 'public/vendor/bootstrap/js/bootstrap.js',
      // 'public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
      // 'public/vendor/common/common.js',
      // 'public/vendor/nanoscroller/nanoscroller.js',
      // 'public/vendor/magnific-popup/jquery.magnific-popup.js',
      // 'public/vendor/jquery-placeholder/jquery.placeholder.js',
      // 'public/vendor/jquery-appear/jquery.appear.js',
      // 'public/vendor/owl.carousel/owl.carousel.js',
      // 'public/vendor/isotope/isotope.js',
      // 'public/js/theme.js',
      // 'public/js/custom.js',
      // 'public/js/theme.init.js',
      // 'public/vendor/datatables/media/js/jquery.dataTables.min.js',
      // 'public/vendor/datatables/media/js/dataTables.bootstrap4.min.js',
      // 'public/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js',
      // 'public/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js',
      // 'public/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js',
      // 'public/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js',
      // 'public/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js',
      // 'public/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js',
      // 'public/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js',
      // 'public/js/examples/examples.landing.dashboard.js',
      // 'public/js/examples/examples.datatables.default.js',
      // 'public/js/examples/examples.datatables.row.with.details.js',
      // 'public/js/examples/examples.datatables.tabletools.js',
   ], 'public/js/app.js');