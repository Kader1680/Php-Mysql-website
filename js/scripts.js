let app = document.querySelectorAll('.app')
let el = document.querySelector('oo')
let active = document.querySelector('.active')

app.forEach(li => {
    li.addEventListener('click', ()=>{
        el.classList.add('active')
    })
});





