<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    
        <P>
            <?php
            class Food{
                // プロパティを定義する。
                private $name;
                private $price;

                // コンストラクタを定義する
                public function __construct($name,$price){
                   $this->name= $name;
                    $this->price = $price;
                }
                  
                // メソッド
                  public function show_price(){
                    echo $this->price.'<br>';
                // }
                 }
               }
       
               class Anime{
                // プロパティ
                private $name;
                private $height;
                private $weight;

                // コンストラクタ
                public function __construct( $name, $height, $weight){
                    $this->name = $name;
                    $this->height =$height;
                    $this->weight =$weight;
                }

                // メソッド
                public function show_height(){
                    echo $this->height.'<br>';
                }

            }   

            // インスタンス化する
            $food = new Food('potato',250);
            $anime = new Anime('dog',60,5000);

            // プロパティ値出力
             print_r ($food);
              echo '<br>';
             
             print_r($anime);
            echo '<br>';

            // メソッド出力
             $food ->show_price();
            $anime->show_height();
                
            
        ?>

    </p>
</body>
</html>