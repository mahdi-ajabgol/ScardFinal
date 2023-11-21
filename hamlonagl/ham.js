window.addEventListener("load", () => {
    const subway = document.getElementById("subway")
    const bus = document.getElementById("bus")
    const subwayasl = document.getElementById("subwayasl")
    const busasl = document.getElementById("busasl")
    const khat = document.getElementById("khat")

    bus.addEventListener("click", () => {
        khat.style.transform="translateX(100%)"
        subwayasl.style.transform="translateX(-100%)"
        busasl.style.transform="translateX(0)"
        
    })

    subway.addEventListener("click", () => {
        khat.style.transform="translateX(0)"
        subwayasl.style.transform="translateX(0)"
        busasl.style.transform="translateX(100%)"
    })

    const observerr = new IntersectionObserver((entries)=>{
        entries.forEach((entries)=>{
          if(entries.isIntersecting){
            entries.target.style.opacity="1"
            entries.target.style.transform="none"
          }
        })
    })

    document.querySelectorAll(".subway-container .haml").forEach(element => {
        observerr.observe(element)
    });

    document.querySelectorAll(".bus-container .haml").forEach(element => {
        observerr.observe(element)
    });
})