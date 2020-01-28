// --------------------
//読み込み
// gulp
const { src, dest, watch, parallel, series } = require("gulp");
//Sass
//Sassコンパイル
const sass = require("gulp-sass");
//cleanCSS
const cleanCSS = require("gulp-clean-css");
//gulp-sass-glob
const sassGlob = require("gulp-sass-glob");

//画像圧縮
//imagemin
const imagemin = require("gulp-imagemin");
//changed
const changed = require("gulp-changed");

//jsファイル
//browserify
const browserify = require("gulp-browserify");
//rename
const rename = require("gulp-rename");

// --------------------
//タスク
//style.scscc(コンパイル/圧縮)
const SCSSSOURCE = "src/scss/**/**.scss";
const SCSSDIST = "dist/css";
const compileSass = () =>
    src(SCSSSOURCE)
    .pipe(sassGlob())
    //sassをコンパイル
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(dest(SCSSDIST));

//画像の圧縮
const IMGSOURCE = "src/**/*.+(jpg|jpeg|png|gif|svg)";
const IMGDIST = "dist/";
const imgMin = () =>
    src(IMGSOURCE)
    //新規画像のみを取得
    .pipe(changed(IMGDIST))
    //画像を圧縮
    .pipe(imagemin())
    .pipe(dest(IMGDIST));

//browserify
const Browse = () =>
  src("src/js/**.js")
  .pipe( browserify() )
  .pipe(rename("build.js"))
  .pipe(dest("./dist/js/"));

// --------------------
//タスクランナー
//style.scscc(コンパイル/圧縮)
const watchSass = () =>
    watch(SCSSSOURCE, compileSass);
//画像の圧縮
const watchIMG = () =>
    watch(IMGSOURCE, imgMin);
//browserify
const watchJS = () =>
    watch("src/js/**.js", Browse);

// --------------------
//npx gulpでエクスポート
exports.default = parallel(watchSass, watchIMG, watchJS);
