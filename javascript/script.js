$(document).ready(function(){

    let text = 'Get the best shopping experience online'

    $.each(text.split(), function(key, val){

    $('.text').append('<div class="split-text">'+val+'</div>')
})

    let each_text = $('.split-text');

    $.each(each_text, function(){
        let rand = Math.floor(Math.random()*1000)

    $(this).css({
        'margin-top': -rand
    }).animate({
        marginTop: '0px'
    },1000)
    })

})

// REGISTER MENU

const menuButton = document.querySelector('#sign-in')
const registerMenu = document.querySelector('.register')
const deleteButton = document.querySelector('#delete')


const showMenu = function() {
    registerMenu.classList.add('active')
}

menuButton.addEventListener('click', showMenu)


const hideMenu = function(e) {
    e.preventDefault()
    registerMenu.classList.remove('active')
}

deleteButton.addEventListener('click', hideMenu)