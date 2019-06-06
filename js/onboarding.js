let btn = document.querySelectorAll('li');
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function(e){
        
        let activeBlocs = document.querySelectorAll('.active');

        for (var i = 0; i < activeBlocs.length; i++) {
            activeBlocs[i].classList.remove('active');
        }

        this.classList = 'active';

        let bloc = document.querySelector('.' + this.id);

        bloc.classList += ' active';
                    
    });
}