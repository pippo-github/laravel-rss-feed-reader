const hideAllBtn = () => {
    let allBlock = document.querySelectorAll(".my_btn")

    allBlock.forEach( (element) =>{
        element.classList.add("hide_btn")
    })
}