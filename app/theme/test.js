const inputs = document.querySelectorAll('.answers input')
const form = document.querySelector('#quiz__slider .wpcf7-form.init')


inputs.forEach((element) => {
    form.appendChild(element)
});



const formData = new FormData(form)
console.log(formData)



