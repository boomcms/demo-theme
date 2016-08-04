module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		autoprefixer: {
			options: {
			},
			no_dest: {
				src : 'public/main.css'
			}
		},
		concat: {
			dist: {
	  			src: [
					'bower_components/modernizr/modernizr.js',
					'bower_components/jquery/dist/jquery.js',
					'bower_components/flexslider/jquery.flexslider.js',
					'src/js/resizeImages.js',
					'src/js/slideshow.js',
					'src/js/main.js'
				],
				dest: 'public/main.js'
			}
		},
		uglify: {
			options: {
				sourceMap: true
			},
			build: {
				files: {
					'public/main.js': 'public/main.js',
				}
			}
		},
		less: {
			production: {
				options: {
					paths: ["src/css"]
				},
				files: {
					"public/main.css": "src/css/main.less"
				}
			}
		},
		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					 'public/main.css': [
						'public/main.css'
					 ]
				}
			}
		},
		watch: {
			css: {
				files: 'src/css/**/*.less',
				tasks: ['build-css']
			},
			js: {
				files: 'src/js/**/*.js',
				tasks: ['build-js']
			}
		},
		browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'public/*.css',
                        'public/*.js',
                        'src/views/**/*.php'
                    ]
                },
                options: {
                	watchTask: true,
                	logConnections: true,
                	notify: true,
                	open: 'external',
                	host: 'starter-iulian.assam.uxblondon.com',
                    proxy: 'starter-iulian.assam.uxblondon.com',
                    port: 3000
                }
            }
        }
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-browser-sync');

	grunt.registerTask('build-css', ['less', 'autoprefixer:no_dest', 'cssmin']);
	grunt.registerTask('build-js', ['concat:dist', 'uglify']);
	grunt.registerTask('build', ['build-css', 'build-js']);
	grunt.registerTask('sync', ['browserSync', 'watch']);
	grunt.registerTask('default',['watch']);
};
