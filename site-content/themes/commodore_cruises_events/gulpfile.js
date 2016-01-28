var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass = require('gulp-compass'),
    livereload = require('gulp-livereload'),
    concat = require('gulp-concat');

var sassSources = ['_components/sass/style.scss'];

var jsSources = [
	'_components/js/main.js'
];

gulp.task('js', function() {
	gulp.src(jsSources)
		.pipe(concat('main.js'))
		.pipe(browserify())
		.pipe(gulp.dest('_development/js'));
});

gulp.task('compass', function() {
	gulp.src(sassSources)
		.pipe(compass({
			sass: '_components/sass',
			image: 'images',
			style: 'expanded'
		}))
		.on('error', gutil.log)
		.pipe(gulp.dest('_development/css'))
		.pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('_components/sass/*.scss', ['compass']);
});