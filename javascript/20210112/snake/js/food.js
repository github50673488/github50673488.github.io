
(function (){


    var element=[];

    function Food(options)
    {
        var options=options || {};
        this.width= options.width||20;
        this.height= options.height||20;
        this.color= options.color||'green';
        this.x= options.x || 0;
        this.y= options.y || 0;
    }

    Food.prototype.render= function (map) {
        remove();

        var divOfFood = document.createElement('div');

        this.x= Tools.getRandom(0,map.offsetWidth/this.width-1)*this.width;
        this.y= Tools.getRandom(0,map.offsetHeight/this.height-1)*this.height;

        divOfFood.style.position= 'absolute';
        divOfFood.style.top= this.y+'px';
        divOfFood.style.left=　this.x+'px';
        divOfFood.style.backgroundColor = this.color;
        divOfFood.style.width = this.width+'px';
        divOfFood.style.height = this.height+'px';
        map.appendChild(divOfFood);
        element.push(divOfFood);
    }

    function remove()
    {
        for(i=element.length-1;  i>=0;i--)
        {
            element[i].parentElement.removeChild(element[i]);
            element.splice(i,1);
        }
    }

    window.Food=Food;

})();



var food= new Food();
food.render(document.querySelector('#map'));


