window.onload = (event) => {
    const checkboxForms = document.querySelectorAll('.checkbox-form');

    if(checkboxForms.length){
        for (const checkbox of checkboxForms) {
            checkbox.addEventListener('click', function(event) {
                event.currentTarget.submit();
            })
        }
    }
};
