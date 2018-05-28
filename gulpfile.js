var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');

/*
 * Variables
 */
// Sass Source
// var scssFiles = './src/scss/style.scss';

var PATH = {
	css: 'sites/all/themes/infante/css/',
	scss: 'sites/all/themes/infante/src/scss/'
};

// CSS destination
var cssDest = './css';

// Options for development
var sassDevOptions = {
  outputStyle: 'expanded'
}

// Options for production
var sassProdOptions = {
  outputStyle: 'compressed'
}

/*
 * Tasks
 */
// Task 'sassdev' - Run with command 'gulp sassdev'
gulp.task('sassdev', function() {
  return gulp.src(PATH.scss + 'style.scss')
    .pipe(sass(sassDevOptions).on('error', sass.logError))
    .pipe(gulp.dest(PATH.css));
});

// Task 'sassprod' - Run with command 'gulp sassprod'
gulp.task('sassprod', function() {
  return gulp.src(PATH.scss + 'style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass(sassProdOptions).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(PATH.css));
});

// Task 'watch' - Run with command 'gulp watch'
gulp.task('watch', function() {
  gulp.watch(PATH.scss + '*.scss', ['sassdev', 'sassprod']);
});

// Default task - Run with command 'gulp'
gulp.task('default', ['sassdev', 'sassprod', 'watch']);