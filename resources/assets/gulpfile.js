var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');


gulp.task('default',['sass','js','watch']);

gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(concat('app.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('../../public/css'));
});

gulp.task('js', function() {
    return gulp.src('js/**/*.js')
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../../public/js'));
});

gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss',['sass']);
    gulp.watch('js/**/*.js',['js']);

});