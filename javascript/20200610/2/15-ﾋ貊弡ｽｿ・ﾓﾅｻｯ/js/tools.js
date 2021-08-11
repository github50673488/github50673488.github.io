let Tools = {
  getRamdon: function (min, max) {
    return Math.floor(min + (max - min + 1) * Math.random());
  }
}