# coding: utf-8

# クラスの定義
class instance:
    num = 10
    # クラス内のメソッドを定義するには
    # 第一引数に 「self」 を入れる
    def method(self,arg):
        print("引数"+ str(arg) +"が継承されました")
    
    #クラス内のプロパティを使うには「self.変数」とする
        print(self.num+arg)

class inheritance(instance):
    
    def inherit (self,arg):
        print("引数"+ str(arg) +"が引き渡されました")
        #親クラス（継承元）のプロパティが使える
        print(self.num+arg)

# インスタンス生成（子クラス）
instance1 =inheritance()

# メソッドの呼び出し
instance1.inherit(1)

# 親メソッドも使用可
instance1.method(1)
     

