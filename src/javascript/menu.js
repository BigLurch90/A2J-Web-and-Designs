const menuBar = () => {

    const menuButton = document.querySelector('#toggle-menu')
    const menuBar = document.querySelector('#menu-bar ul')

    const toggleMenu = () => {

        if(menuBar.classList.contains('-right-52')) {
            menuBar.classList.remove('-right-52')
            menuBar.classList.add('right-0')


            menuButton.innerHTML = (`
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-light-yellow">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>     
            `)
        } else {
            menuBar.classList.remove('right-0')
            menuBar.classList.add('-right-52')

            menuButton.innerHTML = (`
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-light-yellow">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg> 
        `)
        }

    };
    
    menuButton.addEventListener('click', toggleMenu)

}

menuBar()