module.exports = {

    task: {
        src: [
            '<%= site.dev %>/header.php',
        ],
        exclude: [
             
        ],
        options: {
            ignorePath: '../../'

        }
    }

};
