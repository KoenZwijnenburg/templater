var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var maps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var shell = require('gulp-shell');

gulp.task('styles', function() {
    gulp.src('style/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./style/css/'));
});


gulp.task('flat-template', function() {
    gulp.src('html_templates/flat.html')
        .pipe(rename("index.html"))
        .pipe(gulp.dest('./'));

    gulp.src('style/sass/templates/flat/_style.scss')
        .pipe(rename("style.scss"))
        .pipe(gulp.dest('./style/sass/'));

});

gulp.task('portfolio-template', function() {
    gulp.src('html_templates/portfolio.html')
        .pipe(rename("index.html"))
        .pipe(gulp.dest('./'));

    gulp.src('style/sass/templates/portfolio/_style.scss')
        .pipe(rename("style.scss"))
        .pipe(gulp.dest('./style/sass/'));
});

gulp.task('basic-template', function() {
    gulp.src('html_templates/basic.html')
        .pipe(rename("index.html"))
        .pipe(gulp.dest('./'));

    gulp.src('style/sass/templates/basic/_style.scss')
        .pipe(rename("style.scss"))
        .pipe(gulp.dest('./style/sass/'));
});


gulp.task('watch',function() {
    gulp.watch('style/sass/**/*.scss',['styles']);
});

gulp.task('serve', shell.task([
    'lite-server'
]));

gulp.task('run', ['serve', 'watch']);