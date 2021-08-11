function Box(parent, options) {
  options = options || {};
  this.backgroundColor = options.backgroundColor || 'red';
  this.width = options.width || 20;
  this.height = options.height || 20;
  this.x = options.x || 0;
  this.y = options.y || 0;


  this.div = document.createElement('div');
  this.parent = parent;
  parent.appendChild(this.div);
  this.init();
  this.random();
}

Box.prototype.init = function () {
  let div = this.div;
  div.style.backgroundColor = this.backgroundColor;
  div.style.width = this.width + 'px';
  div.style.height = this.height + 'px';
  div.style.left = this.x + 'px';
  div.style.top = this.y + 'px';
  div.style.position = 'absolute';

}

Box.prototype.random = function () {
  let x = Tools.getRamdon(0, this.parent.offsetWidth/this.width -1)*this.width;
   let y = Tools.getRamdon(0, this.parent.offsetHeight/this.height -1)*this.height;
   this.div.style.left=x+'px';
   this.div.style.top=y+'px';

}