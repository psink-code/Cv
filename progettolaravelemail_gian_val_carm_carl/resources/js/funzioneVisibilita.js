

let wrappers = document.querySelectorAll('.visibility');

function show(wrapper){
    wrapper.innerHTML ='<i class="bi bi-eye-fill"></i>';
};

function noShow(wrapper){
    wrapper.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
};

wrappers.forEach(element => {

    element.addEventListener('click',  () => {
        if(element.innerHTML=='<i class="bi bi-eye-fill"></i>'){
            noShow(element);

        }else{
            element.innerHTML = ' ';
            show(element);

        };
    });

});






