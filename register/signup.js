window.addEventListener("load", () => {
    const SpinnerContainer = document.getElementById("SpinnerContainer")
    const popup = document.getElementById("popup")

    SpinnerContainer.style.display="none"

    const nameinput = document.getElementById("nameinput")
    const namelabel = document.getElementById("namelabel")
    const lastnameinput = document.getElementById("lastnameinput")
    const lastnamelabel = document.getElementById("lastnamelabel")
    const usernameinput = document.getElementById("usernameinput")
    const usernamelabel = document.getElementById("usernamelabel")
    const passinput = document.getElementById("passinput")
    const passlabel = document.getElementById("passlabel")
    const phonenumber = document.getElementById("phoneinput")
    const phonelabel = document.getElementById("phonelabel")
    const humanid = document.getElementById("humanidinput")
    const humanlabel = document.getElementById("humanlabel")
    const city = document.getElementById("cityinput")
    const citylabel = document.getElementById("citylabel")
    const usernameinput2 = document.getElementById("usernameinput2")
    const usernamelabel2 = document.getElementById("usernamelabel2")
    const passinput2 = document.getElementById("passinput2")
    const passlabel2 = document.getElementById("passlabel2")
    const changebtn1 = document.getElementById("changebtn1")
    const changebtn2 = document.getElementById("changebtn2")
    const changer = document.getElementById("changer")
    const login1 = document.getElementById("login1")
    const login2 = document.getElementById("login2")

    changebtn2.addEventListener("click", () => {
        changer.style.left="50%"
        changer.style.borderRadius="0px 20px 20px 0px"
        login1.style.transform="translate(-105%)"
        login2.style.transform="translate(0)"
    })

    changebtn1.addEventListener("click", () => {
        changer.style.left="0"
        changer.style.borderRadius="20px 0px 0px 20px"
        login1.style.transform="translate(0)"
        login2.style.transform="translate(105%)"
    })

    nameinput.addEventListener("blur", () => {
        if(nameinput.value != ""){
            namelabel.style.transform="translateX(5px) translateY(-30px)"
            namelabel.style.fontSize="13px"
        }

        else{
            namelabel.style.transform="none"
            namelabel.style.fontSize="16px"
        }
    })

    nameinput.addEventListener("focus", () => {
        namelabel.style.transform="translateX(5px) translateY(-30px)"
        namelabel.style.fontSize="13px"
    })

    passinput.addEventListener("blur", () => {
        if(passinput.value != ""){
            passlabel.style.transform="translateX(5px) translateY(-30px)"
            passlabel.style.fontSize="13px"
        }

        else{
            passlabel.style.transform="none"
            passlabel.style.fontSize="16px"
        }
    })

    passinput.addEventListener("focus", () => {
        passlabel.style.transform="translateX(5px) translateY(-30px)"
        passlabel.style.fontSize="13px"
    })

    usernameinput.addEventListener("blur", () => {
        if(usernameinput.value != ""){
            usernamelabel.style.transform="translateX(5px) translateY(-30px)"
            usernamelabel.style.fontSize="13px"
        }

        else{
            usernamelabel.style.transform="none"
            usernamelabel.style.fontSize="16px"
        }
    })

    usernameinput.addEventListener("focus", () => {
        usernamelabel.style.transform="translateX(5px) translateY(-30px)"
        usernamelabel.style.fontSize="13px"
    })

    lastnameinput.addEventListener("blur", () => {
        if(lastnameinput.value != ""){
            lastnamelabel.style.transform="translateX(5px) translateY(-30px)"
            lastnamelabel.style.fontSize="13px"
        }

        else{
            lastnamelabel.style.transform="none"
            lastnamelabel.style.fontSize="16px"
        }
    })

    lastnameinput.addEventListener("focus", () => {
        lastnamelabel.style.transform="translateX(5px) translateY(-30px)"
        lastnamelabel.style.fontSize="13px"
    })

    phonenumber.addEventListener("blur", () => {
        if(phonenumber.value != ""){
            phonelabel.style.transform="translateX(5px) translateY(-30px)"
            phonelabel.style.fontSize="13px"
        }

        else{
            phonelabel.style.transform="none"
            phonelabel.style.fontSize="16px"
        }
    })

    phonenumber.addEventListener("focus", () => {
        phonelabel.style.transform="translateX(5px) translateY(-30px)"
        phonelabel.style.fontSize="13px"
    })

    humanid.addEventListener("blur", () => {
        if(humanid.value != ""){
            humanlabel.style.transform="translateX(5px) translateY(-30px)"
            humanlabel.style.fontSize="13px"
        }

        else{
            humanlabel.style.transform="none"
            humanlabel.style.fontSize="16px"
        }
    })

    humanid.addEventListener("focus", () => {
        humanlabel.style.transform="translateX(5px) translateY(-30px)"
        humanlabel.style.fontSize="13px"
    })

    // city.addEventListener("blur", () => {
    //     if(city.value != ""){
    //         citylabel.style.transform="translateX(5px) translateY(-30px)"
    //         citylabel.style.fontSize="13px"
    //     }

    //     else{
    //         citylabel.style.transform="none"
    //         citylabel.style.fontSize="16px"
    //     }
    // })

    // city.addEventListener("focus", () => {
    //     citylabel.style.transform="translateX(5px) translateY(-30px)"
    //     citylabel.style.fontSize="13px"
    // })


    passinput2.addEventListener("blur", () => {
        if(passinput2.value != ""){
            passlabel2.style.transform="translateX(5px) translateY(-30px)"
            passlabel2.style.fontSize="13px"
        }

        else{
            passlabel2.style.transform="none"
            passlabel2.style.fontSize="16px"
        }
    })

    passinput2.addEventListener("focus", () => {
        passlabel2.style.transform="translateX(5px) translateY(-30px)"
        passlabel2.style.fontSize="13px"
    })

    usernameinput2.addEventListener("blur", () => {
        if(usernameinput2.value != ""){
            usernamelabel2.style.transform="translateX(5px) translateY(-30px)"
            usernamelabel2.style.fontSize="13px"
        }

        else{
            usernamelabel2.style.transform="none"
            usernamelabel2.style.fontSize="16px"
        }
    })

    usernameinput2.addEventListener("focus", () => {
        usernamelabel2.style.transform="translateX(5px) translateY(-30px)"
        usernamelabel2.style.fontSize="13px"
    })


    const erret = document.getElementById("erret")
    const ep = document.getElementById("ep")

    function erretblur(){
        if(document.getElementById("po").innerHTML == ""){
            console.log("b")
        }
        else{
            ep.innerHTML=document.getElementById("po").innerHTML
            erret.style.opacity="1"
            erret.style.scale="1"
            console.log("o")

        }

        console.log(document.getElementById("po").innerHTML)
    }
    
    erretblur()


    const okbtn = document.getElementById("okbtn")

    okbtn.addEventListener("click", () => {
        erret.style.opacity="0"
        erret.style.scale="0"
    })
})