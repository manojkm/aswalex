module.exports = {
    dev: {

        bsFiles: {
            src: [
                '<%= site.env %>/css/*.css',
                '<%= site.env %>/assets/**',
                '<%= site.env %>/*.php'
            ]
        },

        options: {
          watchTask: true, //Option 'false' will open browser directly without watching grunt tasks.
          debugInfo: true,
          logConnections: true,
          notify: true,
          port:'<%= site.dev_port %>',
          proxy: "http://localhost/aswinalex/app/environment/",
          ghostMode: {
            scroll: true,
            links: true,
            forms: true
          }

        // proxy: "http://localhost/aswinalex/",

        // port: '<%= site.dev_port %>',
        // server: {
        //     baseDir: "app/environment/",
        //     index: "index.php"
        // }

            
        }
    },
};
