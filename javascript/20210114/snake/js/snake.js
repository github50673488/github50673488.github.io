(function () {

    let snakeElement=[];

    function Snake(options) {
        options = options || {};
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.direction = options.direction || "right";
        this.body = [
            {x: 4, y: 2, color: "red"},
            {x: 3, y: 2, color: "blue"},
            {x: 2, y: 2, color: "blue" }
        ];
    }

    Snake.prototype.render = function (map) {
        clearSnake();

        //draw snake
        for(let i=0 ;i<= this.body.length-1;i++)
        {
            let divOfSnake=document.createElement("div");
            divOfSnake.style.position= "absolute";
            divOfSnake.style.width=this.width + "px";
            divOfSnake.style.height=this.height+ "px";

            divOfSnake.style.left=this.width *this.body[i].x +'px';
            divOfSnake.style.top=this.height*this.body[i].y+ "px";
            divOfSnake.style.backgroundColor=this.body[i].color;

            map.appendChild(divOfSnake);
            snakeElement.push(divOfSnake);
        }

    }

    Snake.prototype.move = function (map,food) {

        for(let i= this.body.length-1  ;i>0;i--)
        {
            let bodyNode= this.body[i];
            let bodyNodePrv= this.body[i-1];
            bodyNode.x=bodyNodePrv.x;
            bodyNode.y=bodyNodePrv.y;
        }

        let lastNode=this.body[this.body.length-1] ;
        let   lastNodeClone={x:lastNode.x,y:lastNode.y,color:lastNode.color};

        let head=this.body[0];
        switch (this.direction)
        {
            case 'left':
                head.x-=1;
                break;
            case 'right':
                head.x+=1;
                break;
            case 'top':
                head.y-=1;
                break;
            case 'bottom':
                head.y+=1;
                break;
        }

        if(head.x== food.x && head.y==food.y)
        {
            food.render(map);

            this.body.push(lastNodeClone);
        }
        this.render(map);
    }


    function clearSnake()
    {
        for(let i= snakeElement.length-1 ;i>=0;i-- )
        {
            snakeElement[i].parentElement.removeChild(snakeElement[i]);
            snakeElement.splice(i,1);
        }
    }

    window.Snake = Snake;
})();
