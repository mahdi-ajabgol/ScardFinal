window.addEventListener("load", () => {
    const mojodilive = document.getElementById("mojodilive")
    const mojodiminus = document.getElementById("mojodiminus")
    const mojodiplus = document.getElementById("mojodiplus")

    mojodiplus.addEventListener("click", () => {
        mojodilive.value=parseInt(mojodilive.value)+100
        console.log("j  ")
    })

    mojodiminus.addEventListener("click", () => {
        if(parseInt(mojodilive.value)>100){
            mojodilive.value=parseInt(mojodilive.value)-100
        }
    })
})