'use strict';

const gulp = require('gulp');
const server = require('browser-sync').create();
const sass = require('gulp-sass');


// Paths
const dirs = {
  scss:           './src/sass/style.scss',
  scssWatch:      './src/sass/**/*.scss',
  js:             './src/js/**/*.js',
  php:            './src/*.php',
  wp:             '/mnt/e/xampp/htdocs/ngeservice/wp-content/themes/nge',

  dist:         `./docs`,
};

/**
 * Starts browser sync server
 */
const startServer = () => {
  server.init({
    server: {
      baseDir: dirs.dist,
    },
    port: 1337,
    ghostMode: {
      clicks: false,
      forms: false,
      location: false,
      scroll: false,
    },
  });
};


/**
 * Reloads browser sync server
 * @param {Function} done callback
 */
const reloadServer = (done) => {
  server.reload();
  done();
}

/**
 * Compiles scss files to styles.css
 * And move to ./docs
 * @param {Function} cb callback
 */
const compileStyles = (cb) => {
  gulp.src(dirs.scss)
    .pipe(sass().on(`error`, sass.logError))
    .pipe(gulp.dest(dirs.dist))
    .pipe(server.stream())
    .pipe(gulp.dest(dirs.wp));

    cb();
};


/**
 * Compiles js code
 * @param {function} done callback
 */
const compileScripts = (done) => {
  gulp.src(dirs.js)
    .pipe(gulp.dest(dirs.wp));

  done();
};


const copyPHP = (cb) => {
  gulp.src(dirs.php)
    .pipe(gulp.dest(dirs.wp));

  cb();
};


/**
 * Watches files for changes
 */
const watch = () => {
  startServer();
  gulp.watch(dirs.scssWatch, gulp.series(compileStyles));
  // gulp.watch(dirs.js, gulp.series(compileScripts, reloadServer));
  // gulp.watch(dirs.php, gulp.series(copyPHP));
};



// Single tasks
exports.compileStyles = compileStyles;
exports.scripts = compileScripts;
exports.startServer = startServer;

// Watch
exports.watch = watch;
