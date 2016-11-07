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


        watch: {
            style: {
                files: ["src/**/*.*"],
                tasks: ["csscomb", "sass"],
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