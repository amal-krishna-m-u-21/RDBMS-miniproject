const cover = document.querySelector(".cover")

let counter = 1

$("#changePage").on('click',function(){
  if(counter%2===1){
    anime({
      targets: cover,
      translateX: [
        { value: -500},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 0,
    })
    anime({
      targets: ".registerPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 0,
      translateX: [{ value: 300}],
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordLeft",
      translateX: [{value: 0}],
      marginLeft: "0px",
      opacity: 1,
      easing: 'linear'
    })

    counter+=1
    
  }else {
    anime({
      targets: cover,
      translateX: [
        { value: 0},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".registerPage",
      opacity: 0,
    })
    anime({
      targets: ".wordLeft",
      translateX: [{ value: -300}],
      marginLeft: "-300px",
      opacity: 0,
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 1,
      translateX: [{ value: 0}],
      easing: 'linear'
    })

    counter+=1
  }
})
