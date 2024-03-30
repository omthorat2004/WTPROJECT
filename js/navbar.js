document.querySelector('.profile-logo').addEventListener('click',function (){
     console.log(document.querySelector('.dropdown-menu').classList.contains('show'))
    if(!document.querySelector('.dropdown-menu').classList.contains('show')){
        document.querySelector('.dropdown-menu').classList.add('show')
    }else{
        document.querySelector('.dropdown-menu').classList.remove('show')
    }
})