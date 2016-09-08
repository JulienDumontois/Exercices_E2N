module.exports = function(grunt) {

  // Configuration de Grunt
  grunt.initConfig({
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'assets/css',
          src: ['*.css', '!*.min.css'],
          dest: 'assets/css',
          ext: '.min.css'
        }]
      }
    }
  });
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // Définition des tâches Grunt
    grunt.registerTask('default', '')

  }
