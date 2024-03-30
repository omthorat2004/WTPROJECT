function profileClick(){
    document.querySelector('.profile-link').classList.add('active');
    document.querySelector('.appointment-link').classList.remove('active')
    document.querySelector('.appointment-link').classList.add('text-white')
}

function appointmentClick(){

    document.querySelector('.profile-link').classList.remove('active')
    document.querySelector('.profile-link').classList.add('text-white')
    document.querySelector('.appointment-link').classList.add('active')
}