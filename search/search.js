window.addEventListener("load", () => {
    const bt = document.getElementById("bt")
    const se = document.getElementById("se")

    bt.addEventListener("click", () => {
        if(se.value != ""){
            window.location=`./result.php?username=${se.value}`
        }
    })
    
//     document.getElementById("setting").addEventListener("click" , () => {document.getElementById("al").style.display="flex";setTimeout(() => {
//   document.getElementById("al").style.opacity="1"
// }, 200);})
})