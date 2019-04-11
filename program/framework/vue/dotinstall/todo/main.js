 var vm = new Vue({
  el: '#vue-container',
  data: {
   newtodo: "",
   todos: [

   ]

  },
  
  computed: {
   remaining: function() {
    var count = 0;
    for (var i = 0, j = this.todos.length; i < j; i++) {
     if (!this.todos[i].done) {
      count++;
     }
    }
    return count;
   }
  },
  
  methods: {

   addTodo: function(event) {
    event.preventDefault(); //これがないと元に飛ばされる
    if (this.newtodo == "") return; // 空文字を追加しない
    this.todos.push({ task: this.newtodo, done: false });
    this.newtodo = ""; // 追加後、入力値をクリア
   },

   deleteTodo: function(todo) {
    var index = this.todos.indexOf(todo); //オブジェクトの位置番号を取得
    this.todos.splice(index, 1)
    //取得した位置(index)から 1 つ(第二引数）消す
   },

   purge: function() {
    var i = this.todos.length;
    while (i--) {
     if (this.todos[i].done) {
      this.todos.splice(i, 1);
     }
    }
   }


  }
 });
 