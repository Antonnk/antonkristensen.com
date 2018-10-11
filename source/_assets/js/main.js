import anime from 'animejs'

const ligthToggleMode = document.querySelector('#light-mode-toggle')

ligthToggleMode.addEventListener("click", function({ target }) {
  
  const direction = [
      '0px',
      '15px',
      '25px',
      '28px'
  ]
  
  if(target.classList.contains('off')) direction.reverse()
  
  target.classList.toggle("off");
  
  anime({
    targets: '#light-mode-toggle #bulp',
    transform: [
      'scale(1.07)',
      'scale(1)' 
    ],
    duration: 300,
    easing: 'easeInOutQuart'
  })
  
  anime({
    targets: '#light-mode-toggle rect',
    height: direction,
    duration: 100,
    easing: 'easeOutCirc'
  });
  
  document.body.classList.toggle('light')
})
