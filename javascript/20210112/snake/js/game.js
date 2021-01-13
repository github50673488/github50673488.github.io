(function () {
    var that;//ready to save  *snake*
    function Game(map) {
        this.food = new Food();
        this.snake = new Snake();
        this.map = map;
        that = this;// open the *this*
    }

    Game.prototype.start = function () {
        this.food.render(this.map);
        this.snake.render(this.map);
        runSnake();
        bindKey();
    }


    function runSnake() {
        var timeId = setInterval(function () {
            that.snake.move(that);
            that.snake.render(that.map);

            var maxX = that.map.offsetWidth / that.snake.width;
            var maxY = that.map.offsetHeight / that.snake.height;
            var head = that.snake.body[0];
            if (head.x < 0 || head.x >= maxX
                || head.y < 0
                || head.y >= maxY
            ) {
                alert("Game Over");
                clearInterval(timeId);
            }
        }, 150);
    }

    function bindKey()
    {
        document.addEventListener("keydown",function (e) {
            //console.log(e.keyCode);
            switch (e.keyCode) {
                case 37:
                    that.snake.direction="left";
                    break
                case 38:
                    that.snake.direction="top";
                    break
                case 39:
                    that.snake.direction="right";
                    break
                case 40:
                    that.snake.direction="bottom";
                    break
            }
        },false)
    }
    window.Game = Game;

})();

var game = new Game(document.querySelector('#map'));
game.start();


