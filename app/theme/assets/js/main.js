//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)
const toInvoke  = function (callback, view = 'all', selector) {
    if(document.querySelector(selector) !== null || document.querySelector(selector) !== undefined){
        if(view === 'mobile' && window.innerWidth <= 1280){
            return callback()
        }
        if(view === 'laptop' && (window.innerWidth > 1280)){
            return callback()
        }
        if(view === 'all'){
            return callback()
        }
    }
}



toInvoke(()=>{
    console.log('wwwww')
    // new Swiper('.swiper', {
    //     // Navigation arrows
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    // });

},'all', '.swiper')

console.log('welcome')