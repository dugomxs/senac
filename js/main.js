let time = new Date()
let hour = time.getHours()
let result = document.getElementById('wellcome')


if (hour < 12) {
  result.innerText = 'Bom dia!'
} else if (hour >= 19) {
  result.innerText = 'Boa noite!'
} else {
  result.innerText = 'Boa tarde!'
}
