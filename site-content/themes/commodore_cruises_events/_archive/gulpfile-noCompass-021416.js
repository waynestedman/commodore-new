var gulp = require('gulp'),
    gutil = require('gulp-util'),
    // browserify = require('gulp-browserify'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    livereload = require('gulp-livereload'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

var env,
	jsSources,
	sassSources,
	htmlSources,
	phpSources,
	outputDir,
	sassStyle;

env = process.env.NODE_ENV || 'development';

if (env === 'development') {
	outputDir = '_development/';
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
		// .pipe(browserify())
		.pipe(gulpif(env === 'production', uglify()))
		.pipe(gulp.dest(outputDir + 'js'))
		.pipe(livereload());
});

gulp.task('styles', function() {
	gulp.src('_components/sass/**/*')
		.pipe(sass({outputStyle: 'expanded'})
		.pipe(sass().on('error', sass.logError)
		.pipe(gulp.dest(outputDir + 'css'));
});

gulp.task('prefix', function () {
	gulp.src(outputDir + 'css' + '/style.css')
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('css/style.css'))
		.pipe(livereload());
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(jsSources, ['js']);
  gulp.watch('_components/sass/**/*.scss', ['styles']);
  gulp.watch(htmlSources, ['html'])
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

gulp.task('default', ['php', 'html', 'js', 'styles', 'prefix', 'watch']);