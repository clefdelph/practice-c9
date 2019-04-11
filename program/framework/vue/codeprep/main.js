//vueのインスタンス作成
var vm = new Vue({
    //data → オプション
    el: '#app', // html側の id app を紐づけ
    data: {
        message: "Hello World"
    }
});
/*インスタンスをつくる時に、
引数にオプションを渡すことで
データを定義することができます。*/
