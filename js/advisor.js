window.onload = function (){
    // token
    let token = function() {
        return Math.random().toString(36).substr(2,6);
    };

    document.getElementById('token').innerHTML = token();
};