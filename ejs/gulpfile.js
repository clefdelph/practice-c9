var gulp = require("gulp"); //gulpを読み込む

//gulp.task(タスク名,関数(){処理})

//相対パスで表示する。
// おそらく、.はカレントディレクトリのことだろう

gulp.task("html", function(){
         gulp.src("./index.html")　//コピーする対象ファイル
         .pipe(gulp.dest('./destination'));　
});


gulp.task("watch",function(){
    gulp.watch(("./index.html"),['html']);
});

//pipe (処理)　対象ファイルをどう処理する？
// gulp.dest("出力先")　処理後


//('default',[呼び出したいタスク名])　コマンド gulp で実行
gulp.task('default',['watch']); 
