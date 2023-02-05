var check = function(){
    if (document.getElementById('password').value.length > 8) {
        document.getElementById('Submit').style.backgroundColor = '#fff'
        document.getElementById('Submit').disabled = false;
    }
    else {
        document.getElementById('Submit').style.backgroundColor = '#555'
        document.getElementById('Submit').disabled = true;
    }
}