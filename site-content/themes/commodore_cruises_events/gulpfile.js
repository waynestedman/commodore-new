var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass = require('gulp-compass'),
    livereload = require('gulp-livereload'),
    concat = require('gulp-concat');

var env,
	jsSources,
	sassSources,
	htmlSources,
	phpSources,
	outputDir,
	sassStyle;

env = process.env.NODE_ENV || 'development';

if (env==='development') {
	outputDir = '_development/', '/';
	sassStyle = 'expanded';
} else {
	outputDir = '/';
	sassStyle = 'compressed';
}


jsSources = [
	'_components/js/main.js'
];
sassSources = ['_components/sass/style.scss'];
htmlSources = ['*.html'];
phpSources = ['*.php', 'template-parts/*.php'];

gulp.task('js', function() {
	gulp.src(jsSources)
		.pipe(concat('main.js'))
		.pipe(browserify())
		.pipe(gulp.dest(outputDir + 'js'));
		.pipe(livereload());
});

gulp.task('compass', function() {
	gulp.src(sassSources)
		.pipe(compass({
			sass: '_components/sass',
			image: 'images',
			style: sassStyle
		}))
		.on('error', gutil.log)
		.pipe(gulp.dest(outputDir + 'css'))
		.pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(jsSources, ['js']);
  gulp.watch('_components/sass/*.scss', ['compass']);
  gulp.watch(htmlSources, ['html']);
  gulp.watch(phpSources, ['php']);
});

gulp.task('html', function() {
	gulp.src(htmlSources)
		.pipe(livereload());
});

gulp.task('php', function() {
	gulp.src(phpSources)
		.pipe(livereload());
});

gulp.task('default', ['php', 'html', 'js', 'compass', 'watch']);