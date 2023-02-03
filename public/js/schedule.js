const date = document.querySelector('.day')
const option = document.createElement('option')
const month = document.querySelector('.month').innerHTML
const year = document.querySelector('.year')
const tod = new Date()

const form = document.querySelector('.scheduler')

function getDates(numofdays) {
    for(let i = 0; i < numofdays; i++) {
        let subel = date.appendChild(option);
        subel.className = 'date';
        let days = document.querySelectorAll('.date')

        days.forEach(day => {
            day.value = i.toString
            day.innerHTML = i.toString
        })
    }
}
switch(month) {
    case "January": 
       getDates(31) 
       break
    case "February":
        getDates(28)
        break
    case "March":
        getDates(31)
        break
    case "April":
        getDates(30)
        break
    case "May":
        getDates(31)
        break
    case "June":
        getDates(30)
        break
    case "July":
        getDates(31)
        break
    case "August":
        getDates(31)
        break
    case "September":
        getDates(30)
        break
    case "October":
        getDates(31)
        break
    case "November":
        getDates(30)
        break
    case "December":
        getDates(31)
        break
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    year.value = tod.getFullYear()
})