module.exports = function(grunt) {
	//project configurations
	grunt.initConfig({

		watch: {
			files: 'resources/assets/styles/*.scss',
			tasks: ['sass']
		},
		uglify : {
			build : {
				src : ["resources/assets/script/*.js"],
				dest : "public/dist/script.min.js"
			}
		},
		sass: {
			dist: {
				files: {
					'resources/assets/style.css' : 'resources/assets/styles/all.scss'
				}
			}
		},
		cssmin : {
			target : {
				src : ['resources/assets/style.css'],
				dest : 'public/dist/style.min.css'
			}
		}
	});

	//load uglify plugin
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	//create default task
	grunt.registerTask("default", ["uglify", "sass", 'cssmin']);

};