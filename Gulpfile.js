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

gulp.task('serve-css', shell.task([
    'http-server -p 3000'
]));

gulp.task('serve', shell.task([
    'php-serve --hostname localhost --port 8000 ./wordpress.php'
]));

gulp.task('run', ['serve', 'serve-css', 'watch']);

gulp.task('build-template', function() {
    var template =  gulp.src('./wp-template/**/*')
        .pipe(gulp.dest('build/template'));

    var srcFiles =  gulp.src('./src/wordpress/*')
        .pipe(gulp.dest('build/template'));

    return [template, srcFiles];
});