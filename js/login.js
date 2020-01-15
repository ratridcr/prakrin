var input = document.getElementById('psswrd'),
    icon = document.getElementById('icon');

   icon.onclick = function () {

     if(input.className == 'input100 active') {
        input.setAttribute('type', 'text');
        icon.className = 'fa fa-eye';
       input.className = 'input100';

     } else {
        input.setAttribute('type', 'password');
        icon.className = 'fa fa-eye-slash';
       input.className = 'input100 active';
    }

   }