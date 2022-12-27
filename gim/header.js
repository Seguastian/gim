var header = document.getElementById('header')

window.addEventListener("scroll", function(){
    var scroll = window.scrollY;
    if(scrollY>0){
        header.style.backgroundColor = '#FDE00A';

    }
    else{
        header.style.backgroundColor = 'transparent';
    }

})