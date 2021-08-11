(function () {

    let view_element = [];
    let position = 'absolute';

    function Food(options) {
        options = options || {};
        this.x = options.x || 0;
        this.y = options.y || 0;
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.color = options.color || 'green';

    }


    Food.prototype.render = function (map) {
        remove();
        let div = document.createElement('div');
        map.appendChild(div);
        view_element.push(div);

        this.x = Tools.getRamdon(0, document.getElementById("map").offsetWidth / this.width - 1) * this.width;
        this.y = Tools.getRamdon(0, document.getElementById("map").offsetHeight / this.height - 1) * this.height;
        div.style.left = this.x + 'px';
        div.style.top = this.y + 'px';
        div.style.position = position;
        div.style.width = this.width + 'px';
        div.style.height = this.height + 'px';
        div.style.backgroundColor = this.color;
    }


    function remove() {
        for (let i = view_element.length - 1; i >= 0; i--) {
            view_element[i].parentNode.removeChild(view_element[i]);
            view_element.splice(i, 1);
        }
    }


    window.Food = Food;
})()


// let food = new Food();
// food.render(document.getElementById("map"));