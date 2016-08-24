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
					'bower_components/jquery/dist/jquery.js',
					'bower_components/modernizr/modernizr.js',
					'bower_components/flexslider/jquery.flexslider.js',
					'bower_components/smartmenus/dist/jquery.smartmenus.js',
					'src/js/resizeImages.js',
					'src/js/slideshow.js', 
					'src/js/main.js'
				],
				dest: 'public/main.js'
			},			
			dist_album: {
	  			src: [
	  				'bower_components/jquery/dist/jquery.js',
					'bower_components/lightgallery/dist/js/lightgallery.min.js',
					'src/js/resizeImages.js',
					'src/js/album-scripts.js',
					'src/js/main.js'
				],
				dest: 'public/album.js'
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
					 	'bower_components/smartmenus/dist/css/sm-core-css.css',
					 	'bower_components/smartmenus/dist/css/sm-simple/sm-simple.css',
						'public/main.css'
					 ],
					 'public/album.css': [
					 'bower_components/lightgallery/dist/css/lightgallery.css'
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
	grunt.registerTask('build-js', ['concat:dist', 'concat:dist_album', 'uglify']);
	grunt.registerTask('build', ['build-css', 'build-js']);
	grunt.registerTask('sync', ['browserSync', 'watch']);
	grunt.registerTask('default',['watch']);
};
