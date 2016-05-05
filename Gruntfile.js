module.exports = function(grunt) {

grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    php: {
        test: {
            options: {
            	base: 'src',
            	port: 8010,
               keepalive: true,
               open: 'home.php'
            }
        }
    }
});

grunt.loadNpmTasks('grunt-php');
grunt.registerTask('default', 'php:test');

};
