const popupCheckInputs = () => {
    let popup = document.createElement('p')
    popup.classList.add('alert', 'alert-danger', 'popup', 'text-center')
    let text = document.createTextNode('Add datas!')
    popup.append(text)
    document.querySelector('.container').append(popup)
    setTimeout(() => {
        removePopup(popup)
    }, 3000)
}

const popupCheckLength = () => {
    let popup = document.createElement('p')
    popup.classList.add('alert', 'alert-danger', 'popup', 'text-center')
    let text = document.createTextNode('Password can not be less than 7 characters1')
    popup.append(text)
    document.querySelector('.container').append(popup)
    setTimeout(() => {
        removePopup(popup)
    }, 3000)
}

const success = () => {
    let popup = document.createElement('p')
    popup.classList.add('alert', 'alert-success', 'popup', 'text-center')
    let text = document.createTextNode('Datas has been successfully sent!')
    popup.append(text)
    document.querySelector('.container').append(popup)
    setTimeout(() => {
        removePopup(popup)
    }, 3000)
}

const removePopup = (popup) => {
    popup.remove()
}

export {popupCheckInputs, popupCheckLength, success}