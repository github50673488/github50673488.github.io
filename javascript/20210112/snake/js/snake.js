
(function (){

    var element=[];

    function Snake(options)
    {
        options=options || {};
        this.width= options.width||20;
        this.height= options.height||20;
        this.direction = options.direction || 'right';
        this.body =[
            {x:3,y:2,color:'red'},
            {x:2,y:2,color:'blue'},
            {x:1,y:2,color:'blue'}
        ];
    }

    Snake.prototype.render= function (map) {
        remove();
        for( var i=0; i<this.body.length;i++) {
            var bodyObj=this.body[i];

            // create div in new position
            var divOfSnakeNode = document.createElement('div');

            divOfSnakeNode.style.position = 'absolute';
            divOfSnakeNode.style.width = this.width + 'px';
            divOfSnakeNode.style.height = this.height + 'px';

            divOfSnakeNode.style.top = bodyObj.y* this.width + 'px';
            divOfSnakeNode.style.left = bodyObj.x* this.height + 'px';
            divOfSnakeNode.style.backgroundColor = bodyObj.color;

            map.appendChild(divOfSnakeNode);//view add
            element.push(divOfSnakeNode);// data add
        }
    }

    Snake.prototype.move= function (game)
    {
        for (var i = this.body.length - 1; i > 0; i--) {
            this.body[i].x = this.body[i - 1].x;
            this.body[i].y = this.body[i - 1].y;
        }
        var head = this.body[0];

        switch (this.direction) {
            case 'right':
                head.x+=1;
                break;
            case 'left':
                head.x-=1;
                break;
            case 'top':
                head.y-=1;
                break;
            case 'bottom':
                head.y+=1;
                break;
        }


        var headX=head.x* this.width;
        var headY=head.y* this.height;
        if(headX ==  game.food.x  && headY == game.food.y)
        {
            var lastNode=this.body[this.body.length-1];
            this.body.push(
                {
                    x:lastNode.x,y:lastNode.y,color: lastNode.color
                }
            );
            this.render(game.map);
            game.food.render(game.map);
        }


    }

    function remove()
    {
        for(i=element.length-1;  i>=0;i--)
        {
            element[i].parentElement.removeChild(element[i]);//view remove
            element.splice(i,1);//
        }
    }
    window.Snake=Snake;

})();

// var snake= new Snake();
// snake.render(document.querySelector('#map'));


