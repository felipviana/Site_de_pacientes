const input = document.querySelector('#input')

input.addEventListener('input', (event) => {
  if (event.target.value.length == 2) {
    event.target.value = event.target.value[0] + '.' + event.target.value[1]
  }
  if(event.target.value.length > event.target.maxLength){
    event.target.value = event.target.value.slice(0,event.target.maxLength)
}
})
const input2 = document.querySelector('#input2')
input2.addEventListener('input', (event) => {
    if(event.target.value.length > event.target.maxLength){
      event.target.value = event.target.value.slice(0,event.target.maxLength)
  }
  })

const input3 = document.querySelector('#input3')
input3.addEventListener('input', (event) => {
    if (event.target.value.length == 3) {
      event.target.value = event.target.value[0] + event.target.value[1] + '.' + event.target.value[2]
    }
    if(event.target.value.length > event.target.maxLength){
        event.target.value = event.target.value.slice(0,event.target.maxLength)
    }
  })