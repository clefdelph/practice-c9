public class Practice{
    
   public static String hello(String arg){
       return "Hello from function from " +arg ;
        
    }
    
      public static int sum (int a, int b){
       return a+b;
        
    }
    
    public static void main(String[] args){
        String msg =hello("argument");
        System.out.println(msg);
        
        int result =sum(3,8);
        System.out.println(result);
    
    }
}