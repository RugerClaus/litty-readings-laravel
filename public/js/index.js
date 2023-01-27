const subnav = document.querySelector('.subNav')
subnav.style.display = 'none'
const services = document.getElementById('servicestab')

services.addEventListener('click', () => {
    subnav.style.display = 'flex'
    subnav.innerHTML = `
    <a href="/add_services">Add Services</a>
    <br />
    <a href="/service_manager">Service Manager</a>
    `
})

subnav.addEventListener('mouseleave', (e) => {
    subnav.style.display = 'none'
})
