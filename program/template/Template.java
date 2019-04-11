public class Template{
    
    public static void hello(String arg){
        String msg = "Hello from function with " + arg ;
        System.out.println(msg);
    }
    
    public static void main(String[] args){
        hello("argument");
    }
}