<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
   <p>
    <?php
        // Food クラス
        class Food {
            private $name;
            private $price;

            // コンストラクタ：プロパティに値を代入する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // price プロパティの値を出力するメソッド
            public function show_price(): void {
                echo $this->price . '<br>';
            }
        }

        // Animal クラス
        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ：プロパティに値を代入する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // height プロパティの値を出力するメソッド
            public function show_height(): void {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // オブジェクトの中身を出力（print_r のデフォルトフォーマットで表示）
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // メソッドを使って値を出力
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
    </body>
    </html>