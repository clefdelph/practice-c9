
var twoDigit =function(num){
    　     var digit
         if( num < 10 )
          { digit = "0" + num; }
         else { digit = num; }
         return digit;
    　 }
    　 
        var countdown = function(due){
         var now =new Date();
         var rest =due.getTime()-now.getTime();
         //getTime 1970/1/1 00:00 から今まで経過した「ミリ秒」
         
         // 日・時間・分・秒の計算
         var sec =  twoDigit(Math.floor(rest/1000%60));
         var min =  twoDigit(Math.floor(rest/1000/60)%60);
         var hours = twoDigit(Math.floor(rest/1000/60/60)%24);
         var days = Math.floor(rest/1000/60/60/24);
        
        var count=[days,hours,min,sec];
        
        return count;
        };
        
        
        // 2018 1/1 
        var goal =new Date(2018,0,1);
        var recalc =function(){
        var counter =countdown(goal);
        document.getElementById('day').textContent=counter[0];
        document.getElementById('hour').textContent=counter[1];
        document.getElementById('min').textContent=counter[2];
        document.getElementById('sec').textContent=counter[3];
        refresh();
            
        }
        var refresh = function(){
            setTimeout(recalc,1000);
        }
        recalc();
        
        
        
        function clock()
{
    
    // 現在日時を表すインスタンスを取得
    var now = new Date();
   
    var y = now.getFullYear();
    var mo = twoDigit(now.getMonth() + 1)
    var d = twoDigit(now.getDate());
    var w = weeks[now.getDay()];
    var h = twoDigit(now.getHours());
    var mi = twoDigit(now.getMinutes());
    var s = twoDigit(now.getSeconds());
   
   // 曜日を表す各文字列の配列
    var weeks = new Array("Sun","Mon","Thu","Wed","Thu","Fri","Sat"); 
    
    //　HTML: <span id="clock_date">(ココの日付文字列を書き換え)</span>
    document.getElementById("clock_date").innerHTML=  y + "/" + mo + "/" + d + " (" + w + ")";
    //　HTML: <span id="clock_time">(ココの時刻文字列を書き換え)</span>
    document.getElementById("clock_time").innerHTML = h + ":" + mi + ":" + s;
   
   // 曜日を表す各文字列の配列
    var weeks = new Array("Sun","Mon","Thu","Wed","Thr","Fri","Sat");
}
// 上記のclock関数を1000ミリ秒ごと(毎秒)に実行
setInterval(clock, 1000);
   
   
   
   
   
   