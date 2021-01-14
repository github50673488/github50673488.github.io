(function () {

    let that;

    function Game(map) {
        this.map = map;
        this.food = new Food();
        this.snake = new Snake();
        that = this;
    }

    Game.prototype.start = function () {

        this.food.render(this.map);
        this.snake.render(this.map);

        runSnake();
        bindKey();
    }
    
    function runSnake() {
        let intervalID = setInterval(function () {
            this.snake.move(this.map,this.food);
            let head=this.snake.body[0];
            if(head.x<0||head.x> this.map.offsetWidth/this.snake.width-1
                || head.y<0||head.y> this.map.offsetHeight/this.snake.height-1)
            {
                clearInterval(intervalID);
                alert("Game Over");
            }
        }.bind(that), 150);
    }

    function bindKey() {

        addEventListener("keydown", function handleKeydown(event){
            // キーコード(どのキーが押されたか)を取得
            var keyCode = event.keyCode;
            // 条件文で制御する
            if (keyCode == 39) {

                this.snake.direction='right';
                // 右
            }
            else if (keyCode == 37) {
                this.snake.direction='left';
                // 左
            }
            else if (keyCode == 38) {
                this.snake.direction='top';
                // 上
            }
            else if (keyCode == 40) {
                this.snake.direction='bottom';
                // 下
            }
        }.bind(that));




    }
    window.Game = Game;



})()
