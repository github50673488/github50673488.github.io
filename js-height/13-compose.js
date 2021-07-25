// 函数组合演示
function compose(f, g) {
    return function (value) {
        return f(g(value))
    }
}

// 求数组的最后一个元素
// 先进行反转
function reverse(array) {
    return array.reverse()
}

// 再获取数组中第一个元素
function first(array) {
    return array[0]
}

const last = compose(first, reverse)

console.log(last([1, 2, 3, 4]))
