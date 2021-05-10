'use strict';

const server      = require('browser-sync').create();
const gulp        = require('gulp');
const pug         = require(`gulp-pug`);
const embedSVG    = require(`gulp-embed-svg`);
const sass        = require('gulp-sass');


// Paths
const dirs = {
  pugMain:        `./src/pug/*.pug`,
  svg:            `./src/img/**/*.svg`,
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


// Render html from pug
const renderPug = (cb) => {
  gulp
    .src(dirs.pugMain)
    .pipe(pug({
      pretty: true,
      data: {},
    }))
    .on(`error`, (err) => {
      console.log("\x1b[31m", err.message, "\x1b[0m");
    })
    .pipe(embedSVG({
      root: `./src/`,
    }))
    .on(`error`, (err) => {
      console.log("\x1b[31m", err.message, "\x1b[0m");
    })
    .pipe(gulp.dest(dirs.dist))
    .pipe(server.stream());

  cb();
};


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
  gulp.watch(dirs.pugMain, renderPug);
  gulp.watch(dirs.scssWatch, compileStyles);
  // gulp.watch(dirs.js, gulp.series(compileScripts, reloadServer));
  // gulp.watch(dirs.php, gulp.series(copyPHP));
};



// Single tasks
exports.compileStyles = compileStyles;
exports.scripts = compileScripts;
exports.startServer = startServer;

// Watch
exports.watch     = watch;
exports.pug       = renderPug;
exports.styles    = compileStyles;
