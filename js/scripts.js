// let box = document.querySelector('.box')
// box.addEventListener('click', ()=>{
//     box.style.color= "red",
//     box.setAttribute('background-color', 'red')
// }


// scroll element part

// let height_window = window.innerHeight;
// console.log(height_window)

window.onscroll = ()=>{
    let skill = document.querySelector('.suqare');
    let windowheight = window.innerHeight; // height of windows
    let skillTop = skill.offsetTop; // top from element
    let skillheight = skill.offsetHeight; // height element
    let windows_scrolltop = window.pageYOffset;


    if (windows_scrolltop > skillheight + skillTop - windowheight) {
        // get all my skill

        let TechSkill = document.querySelectorAll('.global div');

        TechSkill.forEach(div => {

            // div.style.display = div.dataset.display
            alert('rf')

        });
    }
}
    
    

})






