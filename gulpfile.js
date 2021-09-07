var gulp = require('gulp');

const autoprefixer = require('gulp-autoprefixer');
const imagemin = require('gulp-imagemin');


  const sass = require('gulp-sass')(require('sass'));;

function prefixify() {
    gulp.src('./style.css')
        .pipe(autoprefixer({
            browsers: ['last 99 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./'))
}

gulp.task('prefix_task', async function() {
    prefixify();
});

function img() {
    return gulp
        .src("./uploads/*")
        .pipe(imagemin())
        .pipe(gulp.dest("./minified"));
}

gulp.task("img_task", img);

function sassify(){
	return gulp.src('./mystyle.scss')
	.pipe(sass())
	.pipe(gulp.dest('./'))
}

gulp.task('sass',async function(){

sassify();
});

gulp.task('watch',function(){

    gulp.watch('./*',gulp.series(['sass']));
    });
    
    gulp.task("default", gulp.series("sass","prefix_task",  "watch"));