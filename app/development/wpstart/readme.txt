=== WPstart ===
Contributors: kruszepl
Donate link: http://krusze.com/wpstart
Tags: accessibility-ready, custom-background, custom-header, editor-style, fluid-layout, full-width-template, left-sidebar, one-column, post-formats, responsive-layout, right-sidebar, rtl-language-support, sticky-post, threaded-comments, translation-ready, two-columns
Requires at least: 4.1
Tested up to: 4.2.4
Stable tag: 1.2.7
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WPstart is a WordPress theme allowing you to create any type of website you want.

== Description ==

WPstart is a responsive, simple, WordPress Theme built with HTML5 and CSS3. WPstart looks great on any device and 
allow you to create any type of website you want. WPstart features: cross-browser compatible, custom background, 
developer friendly, drop-down menu, editor styles, fast loading, header image, highly customizable and adaptable, 
Multisite ready, post formats support, print styles, responsive, Search Engine Friendly, threaded comments, 
translation ready (currently translated into 28 languages), W3C valid, widget-ready areas & more... 
Everyone from first-time WordPress users to advanced developers and designers can take advantage of WPstart.

For a live demo go to http://demo.krusze.com/wpstart/

Sources and credits:

* [html5shiv] (https://github.com/aFarkas/html5shiv/) | License: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)
* [normalize.css] (http://necolas.github.io/normalize.css/) | License: [MIT] (http://www.opensource.org/licenses/mit-license.php)
* [Respond] (https://github.com/scottjehl/Respond) | License: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)

== Installation ==

Manual installation:

1. Download WPstart theme from [Themes Directory] (http://wordpress.org/themes/wpstart)
1. Unzip and upload the `wpstart` folder to the `/wp-content/themes/` directory
1. Activate the Theme through the 'Themes' menu in WordPress

Installation using "Add New Theme":

1. From your Admin UI (Dashboard), use the menu to select Themes -> Add New
1. Search for 'WPstart'
1. Click the 'Install' button to open the theme's repository listing
1. Activate the Theme

== Frequently Asked Questions ==

= I need a helping hand with theme? =

If you have any questions, suggestions, bug reports or feature requests feel free to visit 
[support forum] (http://wordpress.org/support/theme/wpstart).

== Screenshots ==

1. Theme screenshot screenshot.png

== Changelog ==

= 1.2.7 - 11.08.2015 =
* Changed : secure post meta in post-custom-meta-post-layout.php and post-custom-meta-site-layout.php
* Changed : minor css fixes
* Changed : upgrade html5shiv to 3.7.3

= 1.2.6 - 24.06.2015 =
* Changed : added new colors of header: black, gray and tan
* Changed : update translations
* Changed : rename folder 'includes' to 'inc' and 'assets' to 'js'
* Changed : added searchform.php file - template for displaying search forms
* Changed : changes in wpstart actions: wpstart_content_before to wpstart_main_before ,
wpstart_content_top to wpstart_main_top, wpstart_content_bottom to wpstart_main_bottom, 
wpstart_content_after to wpstart_main_after
* Changed : minor changes in comments.php, content-extensions.php, custom-header.php, 
footer.php, header.php, sidebar-footer.php (form now on theme 
has one footer widget area), sidebar.php (from now on theme has one sidebar widget area)
* Changed : added add_theme_support( 'title-tag' ) and add backwards compatibility for wp_title, 
prior to version 4.1. - function wpstart_render_title
* Changed : declare new image size 'wpstart-large'
* Changed : upgrade normalize.css to v3.0.2

= 1.2.5 - 30.09.2014 =
* Changed : fixed navigation menus: dropdown navigation menus are now hidden using position: absolute - 
updated to meet the [accessibility guidelines] (https://make.wordpress.org/themes/handbook/guidelines/accessibility/)
* Changed : added context-specific text to "Read more" summary link
* Changed : changed header image (decorative images MUST be included using CSS)
* Changed : minor css fixes
* Changed : fixed link title on meta-date and meta-author
* Bugfix : fixed back to entry link in wpstart_entry_title function

= 1.2.4 - 14.07.2014 =
* Changed : move nav to header area

= 1.2.3 - 12.07.2014 =
* Bugfix : text domain problems in comments.php and search form; new strings added to language traslations
* Changed : minor changes in wpstart actions / hooks, prepare them to be Theme Hook Alliance ready 
[Theme Hook Alliance] (https://github.com/zamoose/themehookalliance)
* Changed : added rtl.css
* Changed : added label text to nav-header-toggle and nav-toggle (Label text was empty)
* Changed : added .screen-reader-text:focus

= 1.2.2 - 29.06.2014 =
* Bugfix : move $content_width to setup function
* Bugfix : .comment-list .avatar changed position to relative
* Changed : upgrade html5shiv to 3.7.2, added unminified version as well
* Changed : added unminified version of respond.js
* Changed: added visual asterisk to comment field marking it as required (the comment field is marked as 
aria-required="true" for screen-readers too)
* Changed : added html5 support for search form, gallery and caption
* Changed : added suport for default search form (remove searchform.php and wpstart_search_form function)
* Changed : h1.site-title and h2.site-description only for home page

= 1.2.1 - 26.04.2014 =
* Bugfix : fix unicode icon character support on Android devices; changed from &#9776; to &#8801;
* Changed : upgrade html5shiv to 3.7.1 and .min version added
* Changed : upgrade normalize.css to v3.0.1

= 1.2 - 25.04.2014 =
* Changed : added support for css only mobile navigation

= 1.1.9 - 14.04.2014 =
* Bugfix : fix the error when there are no search results.

= 1.1.8 - 13.04.2014 =
* Changed : some css modifications and fixes

= 1.1.7 - 23.02.2014 =
* Changed : upgrade normalize.css to v3.0.0
* Changed : add the post title to 'edit links' and hide text from visual (.edit-link-entry-title)
* Changed : move 'skip links' to correct position
* Changed : remove complementary role inside footer, footer wrapped in a contentinfo role
* Changed : crop method for screen-reader-text class for better internationalization
* Bugfix : wpstart.pot corrected

= 1.1.6 - 09.02.2014 =
* Changed : added tag 'accessibility-ready'; 
validate through [WAVE web accessibilty evauation tool] (http://wave.webaim.org/) and 
[Web Accessibility Checker] (http://achecker.ca/checker/index.php)
* Changed : add title to wpstart_read_more_link
* Changed : removed gpl.txt file
* Changed : validate theme readme.txt file

= 1.1.5 - 31.12.2013 =
* Changed : upgrade normalize.css to v2.1.3
* Changed : upgrade Respond to 1.4.2
* Changed : upgrade html5shiv to 3.7.0
* Changed : added translations: Brazilian Portuguese (pt_BR), British English (en_GB), Bulgarian (bg_BG), 
Chinese Taiwan (zh_TW), Czech (cs_CZ), Finnish (fi), Hungarian (hu_HU), Indonesian (id_ID), Korean (ko_KR), 
Norwegian Bokmål (nb_NO), Norwegian Nynorsk (nn_NO), Romanian (ro_RO), Slovak (sk_SK), Swedish (sv_SE), 
Turkish (tr_TR)
* Changed : added header widget area
* Changed : added assets folder and rename inc folder to includes
* Changed : allow the use of HTML5 markup for the comment forms, search forms and comment lists; 
added add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
* Changed : added wpstart_author_info() for displaying author bios
* Changed : added .main-container class to style.css
* Changed : added .screen-reader-text class to comments navigation
* Changed : minor changes in wpstart actions / hooks, made them more user friendly 
(removed: wpstart_head, wpstart_header_image)
* Changed : added 'responsive-layout' tag; changed 'flexible-width' tag to 'fluid-layout' tag
* Changed : changed theme screenshot (screenshot.png) dimensions to 880x660px

= 1.1.4 - 06.08.2013 =
* Bugfix : Added generated .mo translation files
* Changed : move do_action('wpstart_main') from 404.php, archive.php, attachment.php, author.php, category.php, 
index.php, page.php, 
search.php, single.php, tag.php to header.php

= 1.1.3 - 07.07.2013 =
* Changed : minify style.css; added style.dev.css for web developers
* Changed : added respond.min.js (A fast & lightweight polyfill for min/max-width CSS3 Media Queries 
(for IE 6-8, and more))
* Changed : minor changes in style.css:
- added "word-wrap: break-word" to: #main article, .comment-author cite.fn, .widget-container
- added flexible margin to #header hgroup: "margin-left: 1%; margin-right: 1%;"
- added "-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" to #respond textarea
- removed unncecessary margin from #respond {}
- minor fixes in main navigation (#nav); removed unnecessary .nav-menu class from #nav ul.nav-menu
- fixed custom menu widget, added: .widget_nav_menu ul.sub-menu { margin: 0 0 0 20px; margin: 0 0 0 2rem; }
- added "border: none!important;" to .gallery .gallery-icon img
- added "margin: 5px 20px 10px 0; margin: 0.5rem 2rem 1rem 0;" to .attachment-archive-thumbnail and 
.attachment-single-post-thumbnail 
- added sections: /* Entry summary */, /* Entry content */, /* Post format: aside */, /* Post format: audio */, 
/* Post format: chat */, /* Post format: gallery */, /* Post format: link */, /* Post format: video */, /* Categories */, 
/* Menu */, /* Meta */, /* Pages */, /* Recent posts */, /* RSS */, /* Search */, /* Tag cloud */, /* Text */
- removed word "added" and changed "fixed:" to "fixed ->"

* Changed : added translations: Arabic (ar), Catalan (ca), Chinese (zh_CN), Danish (da_DK), Dutch (nl_NL), 
French (fr_FR), German (de_DE), Italian (it_IT), Japanese (ja), Portuguese (pt_PT), Russian (ru_RU), Spanish (es_ES)
* Changed : changes in translation files (.po files and wpstart.pot)
- changed string "More &raquo;" to "Continue reading <span class=\"meta-nav\">&rarr;</span>" 
- changed string "Newer <span class=\"meta-nav\">&rarr;</span>" to "Newer posts <span class=\"meta-nav\">&rarr;</span>"
- changed string "<span class=\"meta-nav\">&larr;</span> Older" to "<span class=\"meta-nav\">&larr;</span> Older posts"
- removed unnecessary strings: "Bookmark"; "Header"; "Permalink: %s"; "Search for:"; "Meta"; msgstr[2] "%1$s odpowiedzi na %2$s"

* Changed : content-extensions.php: 
- fixed order of functions
- wpstart_head added: "<meta name="viewport" content="width=device-width">"; changed from: 
<title><?php wp_title('', true); ?></title> to <title><?php wp_title( '|', true, 'right' ); ?></title>
- rename "meta-category-prep" to "meta-categories-prep"

* Changed : added wpstart_enqueue_scripts_and_styles and wpstart_wp_title to functions.php
* Changed : wpstart_footer_content: added esc_url to home_url
* Changed : wpstart_admin_header_style: css fixes; added "@media screen and (min-width: 600px)"

= 1.1.2 - 26.04.2013 =
* Changed : layout changed to responsive, based on: [Fluid 960 Grid System] (https://github.com/bauhouse/fluid960gs/) | License: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* Changed : minor css fixes (.entry-summary; #nav; .navigation; Comments form) & added "Media Queries" section

= 1.1.1 - 15.04.2013 =
* Changed : added support for Post Formats
* Changed : minor css fixes (added .meta-tags; changed position of .edit-link; removed 940px from some classes; 
added img.wp-smiley, .rsswidget img)
* Changed : minor css fixes in editor-style.css
* Changed : functions.php: wpstart_nav moved to wpstart_header
* Changed : changes in wpstart actions (added: wpstart_before_post & wpstart_after_post; 
removed wpstart_search_no_results_not_found and moved to wpstart_post_no_results_not_found; 
added: wpstart_single_entry_thumbnail, wpstart_post_entry_thumbnail, wpstart_page_entry_content_start, 
wpstart_page_entry_content_end, wpstart_single_entry_content_start, wpstart_single_entry_content_end, 
wpstart_post_entry_content_start, wpstart_post_entry_content_end, wpstart_attachment_entry_content_start, 
wpstart_attachment_entry_content_end)

= 1.1 - 08.04.2013 =
* Bugfix : fixed letter "Ł" (Themes are required to have all public-facing text in English)
* Bugfix : make string "Original dimensions" translatable
* Changed : implemented CSS Coding Standards (http://make.wordpress.org/core/handbook/coding-standards/css/) and 
minor changes (added table of contents; append .hentry class to an "article" block; added .wp-caption;)
* Changed : added compatibility with WP-PageNavi plugin
* Changed : minor changes in WPstart actions; made hooks names more user friendly

= 1.0.9 - 20.01.2013 =
* Changed : CSS & html output fixes towards html5, added html5shiv.js

= 1.0.8 - 07.01.2013 =
* Changed : change theme screenshot (screenshot.png) dimensions to 600x450px
* Changed : layout improvements: move #main, #container, #content, #footer to content-extensions.php
* Changed : wpstart_entry_title divided to: wpstart_post_entry_title and wpstart_single_entry_title

= 1.0.7 - 01.07.2012 =
* Changed : changed header image
* Changed : added wpstart_before_container and wpstart_after_container
* Changed : added wpstart_before_content and wpstart_after_content

= 1.0.6 - 07.06.2012 =
* Changed : add_custom_background replaced with add_theme_support( 'custom-background' ) and add_custom_image_header 
replaced with add_theme_support( 'custom-header' ); provide backward-compatibility for Custom Background and 
Custom Header [functions.php]

= 1.0.5 - 29.04.2012 =
* Bugfix : changed _e() to esc_attr__() in "permalink" translations [content-extensions.php]

= 1.0.4 - 29.04.2012 =
* Changed : removed wpstart_body action and function - added wpstart_body_class [function.php, content-extensions.php]
* Bugfix : added textdomain to: 'Permalink: %s'; 'Permalink: '; 'One Response to %2$s', '%1$s Responses to %2$s'
* Changed : added <h1 class="page-title"> to daily archives, monthly archives, yearly archives page titles 
[content-extensions.php]
* Changed : some CSS fixes

= 1.0.3 - 27.04.2012 =
* Bugfix : removed function_exists() conditional for functions introduced more than one (recommended) or 
two (optionally) WordPress version prior [functions.php]
* Bugfix : fixed "Clearing Floats" - Edit link is cleared now
* Bugfix : textdomain in translation functions is now 'wpstart' 
* Bugfix : fixed printf in content-extensions.php
* Bugfix : pages in search results - removed meta information and added missing whitespace between them

= 1.0.2 - 24.04.2012 =
* Bugfix : get_template_directory()/get_stylesheet_directory() instead of TEMPLATEPATH/STYLESHEETPATH
* Bugfix : added function_exists() conditional where appropriate in functions.php
* Bugfix : restored default actions in wp_head (rsd_link, wp_generator, index_rel_link, wlwmanifest_link, 
feed_links_extra, start_post_rel_link, parent_post_rel_link, adjacent_posts_rel_link)
* Bugfix : fixed "Clearing Floats"
* Bugfix : removed "Comments are closed." message on page with comments disabled
* Bugfix : prevent wide images get cut off when overflowing the content area - .entry-content img { height:auto; max-width:100%; }
* Changed : fixed header image preview in the admin area; added wpstart_admin_header_image

= 1.0.1 - 19.04.2012 =
* Changed : new screenshot.png
* Changed : moved get_search_form from wpstart_header_content to sidebar-first area
* Changed : added CSS styles - img.alignleft, img.alignright, .nav-previous; added clear:"both" to .link-page
* Bugfix : CSS fixes - removed unnecessary styles: #headline, #breadcrumb, #banner, .opacity, .gallery-thumbs, 
input:focus, input[type="text"]:focus, input[type="submit"]:hover, img.header-image, .home #content

= 1.0 - 14.04.2012 =
* Initial release.

== Upgrade Notice ==

= 1.2.6 =
Update release.

= 1.2.5 =
Update release.

= 1.2.4 =
Update release.

= 1.2.3 =
Update release.

= 1.2.2 =
Update release.

= 1.2.1 =
Update release.

= 1.2 =
Update release.

= 1.1.9 =
Update release.

= 1.1.8 =
Update release.

= 1.1.7 =
Update release.

= 1.1.6 =
Update release.

= 1.1.5 =
Update release.

= 1.1.4 =
Update release.

= 1.1.3 =
Update release.

= 1.1.2 =
Update release.

= 1.1.1 =
Update release.

= 1.1 =
Update release.

= 1.0.9 =
Update release.

= 1.0.8 =
Update release.

= 1.0.7 =
Update release.

= 1.0.6 =
Update release.

= 1.0.5 =
Update release.

= 1.0.4 =
Update release.

= 1.0.3 =
Update release.

= 1.0.2 =
Update release.

= 1.0.1 =
Update release.

= 1.0 =
Initial release.