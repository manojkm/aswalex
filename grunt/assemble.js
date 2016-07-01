// The "assemble" task
module.exports = {
    // Task-level options
    options: {
        flatten: true,
        layoutext: '.hbs',
        assets: '<%= site.dev_assets %>',

        // Metadata
        site: '<%= site %>',
        data: '<%= site.src_data %>',

        // Templates
        partials: '<%= site.src_partials %>',
        layoutdir: '<%= site.src_layoutdir %>',
        layout: '<%= site.src_layout %>',

        // Extensions
        helpers: '<%= site.src_helpers %>'
    },

    main: {
        options: {
            dist: false
        },
        files: [{
            expand: true,
            cwd: '<%= site.src_pages %>',
            src: ['**/*.hbs'],
            dest: '<%= site.dev %>'
        }]
    },

    // dev: {
    //     options: {
    //         dist: false
    //     },
    //     files: [{
    //         expand: true,
    //         cwd: '<%= site.src_pages %>',
    //         src: ['**/*.hbs'],
    //         dest: '<%= site.dist %>'
    //     }]
    // },

    // dist: {
    //     options: {
    //         dist: true
    //     },
    //     files: [{
    //         expand: true,
    //         cwd: '<%= site.src_pages %>',
    //         src: ['**/*.hbs'],
    //         dest: '<%= site.dist %>'
    //     }]
    // },

    rtl: {
        options: {
            layout: 'default',
            rtl: true
        },
        files: [{
            expand: true,
            cwd: '<%= site.src_pages %>',
            src: ['**/*.hbs'],
            dest: '<%= site.dev %>/rtl'
        }]
    }
};
