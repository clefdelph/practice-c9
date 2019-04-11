// 使用言語　C#

using System;

// Dragon クラス(ベース)
class Dragon{
    protected string name;
    protected string color;
    
    public Dragon(string name,string color){
        this.name=name;
        this.color=color;
    }
    
    public void greet(){
     Console.WriteLine($"Hello. My name is {this.name}.({this.color})");
    }
}

//　第一世代のドラゴン（Dragonクラスを継承）
class FirstDragon:Dragon{
    
    
    public FirstDragon(string name,string color):base(name,color){
    
    }
//　独自メソッド    
    public void greet1(){
    base.greet();　　// ベースメソッドのオーバーライド
    Console.WriteLine( $"I have {this.color} wing.");
    }
}

class SecondDragon:Dragon{
    public SecondDragon(string name,string color):base(name,color){
        
    }
    //　独自メソッド    
    public void greet2(){
    base.greet();　// ベースメソッドのオーバーライド
    Console.WriteLine("I was born form database.");
    }
}


public class Hello{

    public static void Main(){
    
     FirstDragon dragon1 =new FirstDragon("clef","blue");
     FirstDragon dragon2 =new FirstDragon("cle","green");
     SecondDragon dragon3 =new SecondDragon("quarter","orange");
     SecondDragon dragon4 =new SecondDragon("quaver","purple");
    
    
    dragon1.greet1();
    dragon2.greet1();
    dragon3.greet2();
    dragon4.greet2();
    
    }
}
