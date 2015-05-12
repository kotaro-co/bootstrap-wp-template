'use strict';

var gulp = require('gulp');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var compass = require('gulp-compass'); //OSX Yosemiteでgulp-compassが動かない可能性あり。その場合はgulp-ruby-sassで代用
var webserver = require('gulp-webserver');

gulp.task('compass', function() {
	gulp.src('dev/scss/*.scss')
		.pipe(plumber({errorHandler:notify.onError('<%= error.message %>')}))
		.pipe(compass({
			css: 'static/assets/css/',
			sass: 'dev/scss/',
			comments: true,
			style: 'expanded' //:expanded or :nested or :compact or :compressed
		}))
		.pipe(notify('CSS Compiled: <%= file.relative %>'));
});

gulp.task('webserver', function() {
	gulp.src('wordpress')
	.pipe(webserver({
		livereload: true,
		port: 8500
	}));
});

gulp.task('wp-theme', function() {
	gulp.src('dev/wp/wp-content/themes/bootstrap/**/*')
	.pipe(gulp.dest('wordpress/wp/wp-content/themes/bootstrap'));
});

gulp.task('watch', function () {
	gulp.watch('dev/scss/*.scss', ['compass']);
	gulp.watch('dev/wp/wp-content/themes/bootstrap/**/*', ['wp-theme']);
});

gulp.task('default', ['compass','webserver','watch']);