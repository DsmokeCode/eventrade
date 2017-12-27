const gulp = require('gulp')
const browserSync = require('browser-sync').create()

gulp.task('browser-sync',() => {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  })
})

gulp.task('copyAssets', () => {
  gulp
    .src('assets/**/*')
    .pipe(gulp.dest('public/assets'))
})

gulp.task('copyCss', () => {
  gulp
    .src('css/*')
    .pipe(gulp.dest('public/css'))
})

gulp.task('copyJs', () => {
  gulp
    .src('js/*')
    .pipe(gulp.dest('public/js'))
})

gulp.task('copyIndex', () => {
  gulp
    .src('index.html')
    .pipe(gulp.dest('public'))
})

gulp.task('dev',['browser-sync'], () => {
  gulp.watch('*.html', browserSync.reload)
  gulp.watch('js/**/*.js', browserSync.reload)
  gulp.watch('css/**/*.css', browserSync.reload)
})

gulp.task('prod', ['copyIndex','copyCss','copyJs','copyAssets'])