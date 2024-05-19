const contactForm = () => {

    const openButtons = document.querySelectorAll('.open-form')
    const closeButton = document.querySelector('#close-form')
    const form = document.querySelector('#contact-form')

    
    const openForm = () => {
        form.classList.remove('hidden')
        form.classList.add('flex')
    }
    
    const closeForm = () => {
        form.classList.remove('flex')
        form.classList.add('hidden')
    }
    
    openButtons.forEach(openButton => openButton.addEventListener('click', openForm))
    closeButton.addEventListener('click', closeForm)

}

contactForm()