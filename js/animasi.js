var observer = new IntersectionObserver(function(entries) {
    entries.forEach(e =>{
        let element = e.target;
        if(e.isIntersecting === true){
            element.classList.remove("not-visible");
            element.classList.add("visible");
        }else{
            element.classList.remove("visible");
            element.classList.add("not-visible");
        }
    });
}, { threshold: [0] });

observer.observe(document.querySelector("#first-section"));
observer.observe(document.querySelector("#second-section"));
observer.observe(document.querySelector("#third-section"));
observer.observe(document.querySelector("#fourth-section"));