'use strict';

var gulp = require('gulp');

var less = require('gulp-less');
var concat = require('gulp-concat');
var uglyfly = require('gulp-uglyfly');
var gulpif = require('gulp-if');
var replace = require('gulp-replace');

var devMode = false;
var config = {
    jsSrcDir   : './public/assets/src/js/',
    jsDistDir  : './public/assets/go9999v0/js/',
    cssSrcDir  : './public/assets/src/less/',
    cssDistDir : './public/assets/go9999v0/css/'
};

gulp.task('default', ['style:less', 'scripts:build'], function () {});

gulp.task('style:less', function () {

    gulp.src(config.cssSrcDir + 'style.less')
        .pipe(less({'compress' : !devMode}))
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest(config.cssSrcDir));

    return gulp.src([
        config.cssSrcDir + 'bootstrap.min.css',
        config.cssSrcDir + 'bootstrap-responsive.min.css',
        config.cssSrcDir + 'app.min.css'
    ])
        .pipe(concat('core.min.css'))
        .pipe(gulp.dest(config.cssDistDir));
});

gulp.task('scripts:build', function () {

    var curDate = new Date();
    var sign = ['/*! Build Date:', curDate.toTimeString(), curDate.toDateString(), 'Project Name:', 'go9999.js', '*/'].join(' ');

    gulp.src([
        config.jsSrcDir + 'lib/jquery-1.11.3.min.js',
        config.jsSrcDir + 'lib/bootstrap.min.js',
        config.jsSrcDir + 'lib/jquery.smooth-scroll.min.js',
        config.jsSrcDir + 'lib/jquery.city.select.min.js',
		config.jsSrcDir + 'lib/jquery.validate.min.js',
		config.jsSrcDir + 'lib/jquery.form.min.js'
    ])
        .pipe(concat('core.min.js'))
        .pipe(gulpif(!devMode, replace(/^!f/, sign + '\n!f')))
        .pipe(gulp.dest(config.jsDistDir));

    gulp.src([config.jsSrcDir + 'page/index.js',
        config.jsSrcDir + 'page/join.js'
    ])
        .pipe(concat('app.min.js'))
        .pipe(gulpif(!devMode, uglyfly()))
        .pipe(gulpif(!devMode, replace(/^!f/, sign + '\n!f')))
        .pipe(gulp.dest(config.jsDistDir));

    return gulp.src([config.jsSrcDir + 'lib/html5.js']).pipe(gulp.dest(config.jsDistDir));
});
