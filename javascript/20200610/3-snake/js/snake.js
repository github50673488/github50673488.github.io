(function () {
    let position = 'absolute';
    let view_element = [];

    function Snake(options) {
        options = options || {};
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.direction = options.direction || 'right';
        this.body = [{
                x: 3,
                y: 2,
                color: 'red'
            },
            {
                x: 2,
                y: 2,
                color: 'blue'
            },
            {
                x: 1,
                y: 2,
                color: 'blue'
            },
        ];
    }

    Snake.prototype.render = function (map) {
        remove();

        //render all the snake body
        for (let i = 0, len = this.body.length; i < len; i++) {
            let object = this.body[i];
            let div = document.createElement('div');
            view_element.push(div);


            let sl = div.style;
            sl.position = position;
            sl.width = this.width + 'px';
            sl.height = this.height + 'px';
            sl.left = this.width * object.x + 'px';
            sl.top = this.height * object.y + 'px';
            sl.backgroundColor = object.color;

            map.appendChild(div);
        }
    }

    Snake.prototype.move = function (food, map) {
        for (let i = this.body.length - 1; i > 0; i--) {
            this.body[i].x = this.body[i - 1].x;
            this.body[i].y = this.body[i - 1].y;
        }

        switch (this.direction) {
            case 'right':
                this.body[0].x += 1;
                break;
            case 'left':
                this.body[0].x -= 1;
                break;
            case 'bottom':
                this.body[0].y += 1;
                break;
            case 'top':
                this.body[0].y -= 1;
                break;
            default:
                break;

        }

        if (food.x == this.body[0].x * this.width && food.y == this.body[0].y * this.height) {
            let last = this.body[this.body.length - 1];
            this.body.push({
                x: last.x,
                y: last.y,
                color: last.color
            });

            food.render(map);

        }

    }

    function remove() {
        for (let i = view_element.length - 1; i >= 0; i--) {
            view_element[i].parentNode.removeChild(view_element[i]);
            view_element.splice(i, 1);
        }
    }
    window.Snake = Snake;

})()

// let snake = new Snake();
// snake.render(document.getElementById('map'));