const { watch, series, task, src, dest } = require('gulp');
const scss                               = require('gulp-sass'); // gulp-scssでは対応できなかった為
const autoprefixer                       = require('gulp-autoprefixer');
const plumber                            = require('gulp-plumber');

const convertToCss = () =>
  src('./src/scss/style.scss')
      .pipe(plumber())
      .pipe(scss())
      .pipe(autoprefixer())
      .pipe(dest('./wp-content/themes/xeory_extension-child'));

const watchScss = () =>
  watch('./src/scss/**/*.scss', convertToCss);

exports.default = watchScss;
