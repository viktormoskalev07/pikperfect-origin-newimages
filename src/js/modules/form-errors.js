 function formErr(item, text,color){
    const errm =document.createElement('p');
    let marginb = window.getComputedStyle(item, null).getPropertyValue("margin-bottom");
    marginb = parseFloat(marginb);
    if (marginb>25){
        item.style.marginBottom=(marginb-20)+'px';
    }
    errm.innerText= text;
    errm.style.color=color; 
    item.parentNode.append(errm); 
    setTimeout(() => {
         errm.remove( ); 
         item.style.marginBottom=(marginb)+'px';
    }, 3000);
} 

(function( ){
    const forms = document.querySelectorAll('.tab-content__form');
    forms.forEach(form => {
        form.addEventListener('submit',function  (e) {
            e.preventDefault();
            const itemName =  form.querySelectorAll('#popupHelpName');
            const itemEmail =  form.querySelectorAll('#popupHelpEmail');
            const itemMessage =  form.querySelectorAll('#popup-HelpMessage');
            const textName = 'Please enter your name';
            const textEmail = 'Please enter a valid email';
            const textMessage = 'Please enter your message';
            const color = 'red';
            itemName.forEach(item => {
                formErr(item, textName,color);
            });
            itemEmail.forEach(item => {
                formErr(item, textEmail,color);
            }); 
            itemMessage.forEach(item => {
                formErr(item, textMessage,color);
            });     
        })
    });
}());



