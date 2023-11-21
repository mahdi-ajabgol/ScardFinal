window.addEventListener("load", () => {

  const SpinnerContainer = document.getElementById("SpinnerContainer")
  const popup = document.getElementById("popup")

  // const card2 = document.getElementById("card2")

  SpinnerContainer.style.display="none"

  function successfulSignuppopup(){
      setTimeout(() => {
          popup.style.top="15px"
      }, "50");
      setTimeout(() => {
          popup.style.opacity="0"
      }, "2000");
  }

  const card1 = document.getElementById("card1")
  const card2 = document.getElementById("card1")
  const qrd = document.getElementById("qr")

  const observerr = new IntersectionObserver((entries)=>{
      entries.forEach((entries)=>{
        if(entries.isIntersecting){
          entries.target.style.opacity="1"
          entries.target.style.transform="none"
        }
      })
    })

    observerr.observe(card1)

    document.querySelectorAll(".button-container div").forEach(element => {
      observerr.observe(element)
    });

    document.querySelectorAll(".button-container a").forEach(element => {
      observerr.observe(element)
    });

    const menu = document.getElementById("menu")

    observerr.observe(menu)

  // function cardblur(){
  //     card2.style.display="none"
  // }

  // cardblur()
  var adad = 0

  document.getElementById("cardcontainer").addEventListener("click", () => {
    if(adad%2 == 0){
      card1.style.transform="rotateY(180deg)"
      document.getElementById("qr-code").style.opacity="1"
      qrd.style.transform="rotateY(0deg)"
      adad++
      console.log(adad)
      generateQRCode(document.getElementById("name").innerHTML)
    }
    else{
      card1.style.transform="rotateY(0deg)"
      document.getElementById("qr-code").style.opacity="0"
      qrd.style.transform="rotateY(-180deg)"
      adad++
      console.log(adad)
    }

    console.log("logged")
  })


  // document.getElementById("bbt").addEventListener("click", () => {
  //   var qrtext = "https://www.apple.com";
  //             qr.set({
  //                 foreground: 'black',
  //                 size: 400,
  //                 value: qrtext
  //             });
  // })

  var qr;
    (function() {
                  qr = new QRious({
                  element: document.getElementById('qr-code'),
                  size: 400,
                  value: "https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/search/result.php?username=" + document.getElementById("name").innerHTML
              });
          })();
          
          function generateQRCode(ty) {
              var qrtext = ty;
              qr.set({
                  foreground: 'black',
                  size: 400,
                  value: "https://technonull.com/mani-mahdi-1386-1385-technonull-poyandegan-poyandegan-ma-qw-pa-aj/search/result.php?username=" + qrtext
              });
              console.log(qrtext)
          }
          
          
document.getElementById("setting").addEventListener("click" , () => {document.getElementById("al").style.display="flex";setTimeout(() => {
  document.getElementById("al").style.opacity="1"
}, 200);})
document.getElementById("qs").addEventListener("click" , () => {document.getElementById("al").style.display="flex";setTimeout(() => {
  document.getElementById("al").style.opacity="1"
}, 200);})

document.getElementById("okb").addEventListener("click", () => {
document.getElementById("al").style.opacity="0";
setTimeout(() => {
  document.getElementById("al").style.display="none"
}, 200);

})

document.getElementById("ab").addEventListener("click" , () => {document.getElementById("al2").style.display="flex";setTimeout(() => {
  document.getElementById("al2").style.opacity="1"
}, 200);})
// document.getElementById("qs").addEventListener("click" , () => {document.getElementById("al2").style.display="flex";setTimeout(() => {
//   document.getElementById("al2").style.opacity="1"
// }, 200);})

document.getElementById("okb2").addEventListener("click", () => {
document.getElementById("al2").style.opacity="0";
setTimeout(() => {
  document.getElementById("al2").style.display="none"
}, 200);

})

  
  successfulSignuppopup()
})