const _ = require("lodash")
const array = ['liu', 'ogi', 'mouri']

console.log('_.first(array) -->', _.first(array))
console.log('_.last(array) -->', _.last(array))

_.toUpper(_.last(array))
console.log('_.toUpper(_.last(array)) -->', _.toUpper(_.last(array)))
console.log('_.reverse(array) -->', _.reverse(array))
