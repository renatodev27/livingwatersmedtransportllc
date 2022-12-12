let form = document.getElementById('formContact')

function handleForm(event) { event.preventDefault() }
form.addEventListener('submit', handleForm)

function processContactForm() {
    const btnSubmit = document.getElementById('btn-send')
    const firstName = document.getElementById('first_name')
    const lastName = document.getElementById('last_name')
    const email = document.getElementById('email')
    
    btnSubmit.innerHTML = '';
    btnSubmit.innerHTML += '<i class="spinner-border spinner-border-sm"></i> Enviando...'
    btnSubmit.setAttribute('disabled', "")

    const dataForm = new FormData();
    dataForm.append('first_name', firstName.value)
    dataForm.append('last_name', lastName.value)
    dataForm.append('email', email.value)

    const url = '././send.php'

    fetch(url, {
        method: 'post',
        cors: 'cors',
        cache: 'no-cache',
        body: dataForm
    })
    .then( (response) => response.json())
    .then( (data) => { 
        let alert = undefined;
        
        if (data.status === 200) {
            alert = drawAlert('success', 'Send successful!', data.body)

            Swal.fire(alert).then( (result) => {
                if (result.value) {
                    callbackProcess(btnSubmit, firstName, lastName, email)
                }
            })
        }

        if (data.status === 500) {
            alert = drawAlert('error', 'Oops..!', data.errorMessage)

            swal.fire(alert).then ( (result) => {
                if (result.value) {
                    callbackProcess(btnSubmit)
                }
            })
        }
    })
}

function callbackProcess(btnSubmit, firstName, lastName, email) {
    btnSubmit.innerHTML = ''
    btnSubmit.innerHTML += '<i class="fas fa-jedi"></i> Begin!'
    btnSubmit.removeAttribute('disabled')

    firstName.value = ''
    lastName.value = ''
    email.value = ''
}

function drawAlert(status, title, message) {
    const alert = {
        position: 'center-center',
        icon: status,
        html: `
            <h3 class="mb-3">${title}</h3>
            <h5 class="text-muted fw-normal"><b>Message: </b> ${message}</h5>
        `,
        showConfirmButton: true,
    }

    return alert
}