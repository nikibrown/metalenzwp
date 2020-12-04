const { watch, series } = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass");
// const browserSync = require("browser-sync").create();
// const fileinclude = require("gulp-file-include");

// browserSync.init({
// 	server: {
// 		baseDir: "./docs",
// 		index: "/index.html",
// 	},
// });

function style() {
	return gulp
		.src("assets/scss/*.scss")
		.pipe(sass({outputStyle: 'compressed'}))
		.on("error", sass.logError)
		.pipe(gulp.dest("assets/css"));
}

// function moveimg() {
// 	return gulp
// 		.src(["./src/assets/img/*"])
// 		.pipe(gulp.dest("./docs/assets/img"));
// }

// function movejs() {
// 	return gulp
// 		.src(["./src/assets/js/*"])
// 		.pipe(gulp.dest("./docs/assets/js"));
// }

// function include() {
// 	return gulp
// 		.src(["./src/*.html"])
// 		.pipe(
// 			fileinclude({
// 				prefix: "@@",
// 				basepath: "@file",
// 			})
// 		)
// 		.pipe(gulp.dest("./docs"));
// }

exports.default = function () {
	gulp.watch("assets/scss/**/*").on(
		"change",
		// series(style, include, moveimg, movejs, browserSync.reload)
		series(style)
	);
};
