module.exports = function (grunt) {
    "use strict";

    require('load-grunt-tasks')(grunt);

    var config = {
        sass: {
            style: {
                expand: true,
                files: [{
                    "src/css/styles.css": "src/sass/styles.scss"
                }]
            }
        },


        csscomb: {
            style: {
                options: {
                    config: '.csscomb.json'
                },
                expand: true,
                src: ["src/sass/**/*.scss", "src/css/**/*.css"]
            }
        },

        concat_css: {
            style: {
                src: ["src/css/wp.css", "src/css/styles.css"],
                dest: "src/style.css"
            }
        },

        copy: {
            style: {
                expand: true,
                flatten: true,
                // cwd: 'src/',
                src: ['src/*.php',
                    'src/style.css'],
                dest: 'G:/xampp2/htdocs/ngeservice/wp-content/themes/nge/'
            }
        },

        watch: {
            style: {
                files: ["src/**/*.*"],
                tasks: ["csscomb", "sass", "concat_css", "copy"],
                options: {
                    spawn: false,
                    livereload: true
                }
            }
        },


        express: {
            all: {
                options: {
                    port: 9000,
                    host: "localhost",
                    bases: ["src"],
                    livereload: true
                }
            }
        }
    }

    grunt.initConfig(config);
    grunt.registerTask("server", ["express", "watch"]);
};
