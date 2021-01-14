(function (){

    let divOfFood;

    function  Food(options)
    {
        options= options || {};
        this.width= options.width || 20;
        this.height = options.height || 20;

       this.x= options.x || 5;
       this.y= options.y || 10;
       this.color=options.color || 'green';
    }
    
    Food.prototype.render= function (map) {
        clearFood();

        this.x=Tools.getRandomInt(0,map.offsetWidth/this.width  -1);
        this.y=Tools.getRandomInt(0,map.offsetHeight/this.height  -1);

        //draw food
        divOfFood=document.createElement("div");
        divOfFood.style.position= "absolute";
        divOfFood.style.width=this.width + "px";
        divOfFood.style.height=this.height+ "px";

        divOfFood.style.left=this.width *this.x +'px';
        divOfFood.style.top=this.height*this.y+ "px";

        divOfFood.style.backgroundColor=this.color;

        map.appendChild(divOfFood);

        //console.log("food render()");
    }

    function clearFood()
    {
        if (typeof(divOfFood) !== "undefined")
        {
            divOfFood.parentElement.removeChild(divOfFood);
        }
    }

    window.Food = Food;
})()
