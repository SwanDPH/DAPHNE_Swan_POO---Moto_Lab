window.addEventListener('load', function () {
        let backButton = document.querySelector('.back');
        let modaleConfirmation = document.querySelector('.modaleConfirmation');
        let fermetureModale = document.querySelector('.fermetureModale');


        backButton.addEventListener("click", function(){
            modaleConfirmation.classList.remove('invisible')
        })

        fermetureModale.addEventListener("click", function(){
            modaleConfirmation.classList.add('invisible')
        })
})