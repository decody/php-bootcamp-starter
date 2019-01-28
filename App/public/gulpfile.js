const gulp = require('gulp'),
      connect = require('gulp-connect-php7'),
      bs = require('browser-sync').create()
;

gulp.task('connect-sync', function() {
    connect.server({}, function () {
        bs.init({
            proxy: 'localhost:8000'
        });
    });
    gulp.watch('**/*').on('change', bs.reload);
});