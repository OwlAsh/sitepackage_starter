var gulp = require('gulp');
var del = require('del');
var config = require('../config');

gulp.task('clean', function (cb) {
    del([
        config.publicDirectory + '/{Css,JavaScript,Icons,Images,Fonts}/**/*'
    ], cb);
});
