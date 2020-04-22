//load select elements materialize
document.addEventListener('DOMContentLoaded', () => {
  const elems = document.querySelectorAll('select')
  M.FormSelect.init(elems, {
    classes: 'options',
  })
})

// form DOM
let Form = document.getElementById('encuesta')

// form data
let formulario = new FormData()

// ajax method
Form.addEventListener('submit', e => {
  let Data = new FormData(Form);

  fetch('php/send.php', {
    method: 'POST',
    body: Data
  })
    .then(res => {
	if(res.ok){ return res.text()}
	else { throw "Error en la llamada Ajax" }
     })
    .then(text => M.toast({html: text}))
    .catch(err => console.log(err))

  e.preventDefault()
  Form.reset()
})