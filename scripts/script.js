import {popupCheckInputs, popupCheckLength, success} from './utils.js'

document.querySelector('#submitButton').addEventListener('click', (e) => {
    e.preventDefault()
    let email = document.querySelector('.email')
    let login = document.querySelector('.login')
    let password = document.querySelector('.password')

    if (!email.value || !login.value || !password.value) {
        popupCheckInputs()
        return false
    }
      if (password.value.length < 7) {
        popupCheckLength()
    } else {
        fetch('insert.php', {
            method: 'POST',
            body: JSON.stringify({
            email: email.value.trim(),
            login: login.value.trim(),
            password: password.value.trim(),
            }),
        })
          .then((response) => {
            email.value = ''
            login.value = ''
            password.value = ''
            success()
        })
    }
})