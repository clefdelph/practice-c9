
var message1 =document.getElementById('message1');
var message2 =document.getElementById('message2');
var btn =document.getElementById('btn');
var val;

function eventListener(){
    var msg =document.fm.msg.value;
    console.log(msg);
    message1.innerHTML='Hello from event listener';
    message2.innerHTML ='Hello from outer Javascript!';
};




btn.onclick = eventListener;




