var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var maps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var shell = require('gulp-shell');

gulp.task('styles', function() {
    gulp.src('wp-template/style/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./wp-template/style/css/'));
});

gulp.task('watch',function() {
    gulp.watch('wp-template/style/sass/**/*.scss',['styles']);
});