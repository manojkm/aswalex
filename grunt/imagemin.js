module.exports = {
    dist: {
        options: {
            optimizationLevel: 7
        },
        files: [{
            expand: true,
            cwd: '<%= site.src_img %>/',
            src: ['**/*.{png,jpg,gif}'],
            dest: '<%= site.dev_img %>/'
        }]
    }
};
