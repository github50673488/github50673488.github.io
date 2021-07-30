// 展开语法 https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Operators/Spread_syntax
// 展开语法(Spread syntax), 可以在函数调用/数组构造时, 将数组表达式或者string在语法层面展开；还可以在构造字面量对象时, 将对象表达式按key-value的方式展开


function sum(x, y, z) {
    return x + y + z;
}

const numbers = [1, 2, 3];

console.log(sum(...numbers));
// expected output: 6

// 等价于apply的方式
// 如果想将数组元素迭代为函数参数，一般使用Function.prototype.apply 的方式进行调用
console.log(sum.apply(null, numbers));
// expected output: 6

// 提示: 实际上, 展开语法和 Object.assign() 行为一致, 执行的都是浅拷贝(只遍历一层)。
// 浅拷贝(Shallow-cloning, 不包含 prototype) 和对象合并, 可以使用更简短的展开语法。而不必再使用 Object.assign() 方式.


var obj1 = {foo: 'bar', x: 42};
var obj2 = {foo: 'baz', y: 13};

var clonedObj = {...obj1};
console.log(' clonedObj-->', clonedObj)
// 克隆后的对象: { foo: "bar", x: 42 }

var mergedObj = {...obj1, ...obj2};
console.log('mergedObj -->', mergedObj)
// 合并后的对象: { foo: "baz", x: 42, y: 13 }


// !!!!!!!!!!!!!!!!!!!! 注意 !!!!!!!!!!!!!!!!!!!!
// 剩余语法(Rest syntax) 看起来和展开语法完全相同!!，
// 不同点在于, 剩余参数用于解构数组和对象。从某种意义上说，剩余语法与展开语法是相反的!!!
// 展开语法将数组展开为其中的各个元素，而剩余语法则是将多个元素收集起来并“凝聚”为单个元素。

function sum(...theArgs) {
    return theArgs.reduce((previous, current) => {
        return previous + current;
    });
}

console.log(sum(1, 2, 3));
// expected output: 6

console.log(sum(1, 2, 3, 4));
// expected output: 10


