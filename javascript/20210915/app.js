import aaa, {name, name2} from './module.js'

console.log('name: ', name)
console.log('name2: ', name2)
console.log('aaa: ', aaa)

function countToFive() {
    let firstFive = "12345";
    let len = firstFive.length;
    // 只修改这一行下面的代码
    for (let i = 0; i <= len - 1; i++) {
        // 只修改这一行上面的代码
        console.log(firstFive[i]);
    }
}

countToFive();
