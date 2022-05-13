const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

function style() {
    return gulp.src('./sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'))
    .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        // server: {
        //     baseDir: './'
        // },
        host: "www.dc-atm.local",
        proxy: {
            target: "http://www.dc-atm.local"
        }
    });
    gulp.watch('./sass/**/*.scss', style);
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload)
}


exports.style = style;
exports.watch = watch;