(function () {
    let that;

    function Game(map) {
        this.food = new Food();
        this.snake = new Snake();
        this.map = map;
        that = this;
    }

    Game.prototype.start = function () {
        this.food.render(this.map);
        this.snake.render(this.map);

        runSnake();
        bindKey();

    }

    function runSnake() {

        let timerID = setInterval(function () {
            let snake = this.snake;

            snake.move(this.food, this.map);
            snake.render(this.map);

            if (snake.body[0].x < 0 ||
                snake.body[0].x >= this.map.offsetWidth / this.snake.width ||
                snake.body[0].y < 0 ||
                snake.body[0].y >= this.map.offsetHeight / this.snake.height) {
                alert('gamen over');
                clearInterval(timerID);
            }
        }.bind(that), 200);

    }

    function bindKey() {
        document.addEventListener('keydown', function (e) {
            //console.log(e.keyCode);

            switch (e.keyCode) {
                case 37:
                    this.snake.direction = 'left';
                    break;

                case 38:
                    this.snake.direction = 'top';
                    break;

                case 39:
                    this.snake.direction = 'right';
                    break;

                case 40:
                    this.snake.direction = 'bottom';
                    break;

                default:
                    break;
            }



        }.bind(that), false)

    }



    window.Game = Game;

})()