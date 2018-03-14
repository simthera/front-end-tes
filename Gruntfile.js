module.exports = function (grunt) {
    require('jit-grunt')(grunt);

    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "stylesheets/style.css": "stylesheets/style.less",
                    "stylesheets/responsive.css": "stylesheets/responsive.less"
                }
            }
        },
        watch: {
            styles: {
                files: ['stylesheets/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    grunt.registerTask('default', ['less', 'watch']);
};