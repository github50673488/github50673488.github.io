var btn=document.getElementById('btn');
btn.onclick=function () {
    var xhr= new XMLHttpRequest();

    var uname = document.getElementById('username').value;
    var pw = document.getElementById('password').value;
    var param = 'username='+uname+'&password='+pw;
    xhr.open('post','./check.php',true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send(null);
    xhr.onreadystatechange=function () {
        if(xhr.readyState== 4 && xhr.status==200)
        {
            var data=xhr.responseText;
            var info=document.getElementById('info');
            info.innerHTML = data=='1'?'Success':'Err';
        }
    }

}
