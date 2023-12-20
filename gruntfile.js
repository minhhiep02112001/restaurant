/*
 * grunt-cli
 * http://gruntjs.com/
 *
 * Copyright (c) 2012 Tyler Kellen, contributors
 * Licensed under the MIT license.
 * https://github.com/gruntjs/grunt-init/blob/master/LICENSE-MIT
 */

'use strict';

module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            css: {
                src: [ 
                    'public/assets/css/style.css', 
                    'public/assets/css/customer.css', 
                ],
                dest: 'public/assets/css/css_minified.css'
            },

            js: {
                src: [  
                    'public/assets/js/app.js', 
                    'public/assets/plugin/notify.js', 
                    'public/assets/js/customer.js',   
                ],
                dest: 'public/assets/js/script_minified.js'
            }
        },
        uglify: {
            js: {
                src: 'public/assets/js/script_minified.js',
                dest: 'public/assets/js/script_minified.min.js'
            }
        },
        cssmin: {
            css: {
                src: 'public/assets/css/css_minified.css',
                dest: 'public/assets/css/css_minified.min.css'
            }
        },
        watch: {
            css: {
                files: ['public/assets/css/custom.css'],
                tasks: ['concat', 'cssmin'],
            },
            scripts: {
                files: ['public/assets/js/custom.js'],
                tasks: ['concat', 'uglify'],
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('build', ['concat', 'cssmin','uglify']);
    grunt.registerTask('runwatch', ['watch']);
};
