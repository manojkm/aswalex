//http://connelhooley.uk/blog/getting-wordpress-gruntjs-and-bower-to-get-along/

module.exports = {

    theme: {
    src: [
      '<%= site.dev %>/functions.php',
      // 'path/to/scss/main.scss',
    ],
    exclude: [ // files to exclude, I manually include these so they appear in the header, not at the end of the body tag
      /modernizr.js/,
      /html5shiv.js/,
      /respond.src.js/,
    ],
    ignorePath: '../../source/',
    fileTypes: {
      php: {
        block: /(([ \t]*)\/\/\s*bower:*(\S*))(\n|\r|.)*?(\/\/\s*endbower)/gi,
        detect: {
          js: /wp_enqueue_script\(['"]([^'"]+)/gi,
          css: /wp_enqueue_style\(['"]([^'"]+)/gi,
        },
        replace: {
          js: function (filePath) {
            return 'wp_enqueue_script(\'' + filePath + '\', get_stylesheet_directory_uri() . \'/' + filePath + '\', false, false, true);'
          },
          css: function (filePath) {
            return 'wp_enqueue_style(\'' + filePath + '\', get_stylesheet_directory_uri() . \'/' + filePath + '\');'
          },
        },
      },
      scss: {
        replace: {
          css: '@import "../{{filePath}}";',
          sass: '@import "../{{filePath}}";',
          scss: '@import "../{{filePath}}";',
        },
      },
    },
  },


// Then place the following in your enqueue_scripts.php

// //Enqueue scripts
// if (!function_exists('theme_name_bower_scripts')) :
// function theme_name_bower_scripts() {
//   // bower:js
//   // endbower
// }
// add_action('wp_enqueue_scripts', 'theme_name_bower_scripts');
// endif;

// //Enqueue styles
// if (!function_exists('theme_name_bower_styles')) :
// function theme_name_bower_styles() {
//   // bower:css
//   // endbower
// }
// add_action('wp_enqueue_scripts', 'theme_name_bower_styles');
// endif;

};
