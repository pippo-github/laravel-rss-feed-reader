window.addEventListener("load", () => {

    hideAllBtn()

    document.querySelectorAll(".my_block").forEach( (e) => {

        e.addEventListener("click", () => { 
             document.getElementById(e.id).style.color = "white"
        })

            e.addEventListener("click", () => {

                    e.addEventListener("keyup", (event) => {
                        if(getKey(event)){
                            let btn = String(e.id).replace("div_", "btn_")
                            document.getElementById(btn).classList.remove("hide_btn")
                        }
                    })

                    e.addEventListener("mouseout", () => { document.getElementById(e.id).style.color = "black" })
                    document.body.addEventListener("click", () =>{ hideAllBtn() })
            })
    })
})  