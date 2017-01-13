// Clean your /dist folder
module.exports = {

    // dist: ['<%= site.dist %>'],
    // js: ['<%= site.dist_assets %>/js'],
    // css: ['<%= site.dist_assets %>/css'],
    // html: ['<%= site.dist %>/*.html'],
    // img: ['<%= site.dist_img %>'],

    dev: ['<%= site.dev_assets %>/**/*', '!<%= site.dev_assets %>/.{git,gitignore,gitkeep}'],
    env: ['<%= site.env_assets %>/**/*', '!<%= site.env_assets %>/.{git,gitignore,gitkeep}'],

};
