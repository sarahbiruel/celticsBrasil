module.exports = function(grunt) {
	'use strict';

	// Load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Project configuration
	grunt.initConfig({
		pkg : grunt.file.readJSON('package.json'),
		concat : {
			celtics_brasil : {
				src : ['bootstrap/assets/js/bootstrap/tab.js', 'bootstrap/assets/js/bootstrap/transition.js', 'assets/js/src/**/*.js'],
				dest : 'assets/js/celtics_brasil.js'
			}
		},
		jshint : {
			browser : {
				all : ['assets/js/src/**/*.js'],
				options : {
					jshintrc : '.jshintrc'
				}
			},
			grunt : {
				all : ['Gruntfile.js'],
				options : {
					jshintrc : '.gruntjshintrc'
				}
			}
		},
		uglify : {
			all : {
				files : {
					'assets/js/celtics_brasil.min.js' : ['assets/js/celtics_brasil.js']
				},
				options : {
					banner : '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' + ' * <%= pkg.homepage %>\n' + ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' + ' * Licensed GPLv2+' + ' */\n',
					mangle : {
						except : ['jQuery']
					}
				}
			}
		},
		sass : {
			all : {
				files : {
					'assets/css/celtics_brasil.css' : 'assets/css/sass/celtics_brasil.scss',
					'bootstrap/assets/css/bootstrap.css' : 'bootstrap/assets/css/sass/bootstrap.scss'
				}
			}
		},
		compass : {
			dev : {
				options : {
					sassDir : ['assets/css/sass'],
					cssDir : ['assets/css'],
					imagesDir : ['images']
				}
			}
		},
		cssmin : {
			options : {
				banner : '/*! <%= pkg.title %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>\n' + ' * <%= pkg.homepage %>\n' + ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' + ' * Licensed GPLv2+' + ' */\n'
			},
			minify : {
				expand : true,

				cwd : 'assets/css/',
				src : 'celtics_brasil.css',

				dest : 'assets/css/',
				ext : '.min.css'
			}
		},
		watch : {
			compass : {
				files : ['assets/css/sass/**/*.scss', 'bootstrap/assets/css/sass/**/*.scss'],
				tasks : ['compass:dev', 'cssmin'],
				options : {
					interrupt : true,
				}
			},

			scripts : {
				files : ['assets/js/src/**/*.js'],
				tasks : ['jshint', 'concat', 'uglify'],
				options : {
					interrupt : true,
				},
			}
		}
	});

	// Default task.

	grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'sass', 'compass', 'cssmin']);

	grunt.util.linefeed = '\n';
};
