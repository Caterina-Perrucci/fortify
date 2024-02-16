//! catturo l'input
const passwordInput = document.querySelector('#floatingPassword');
//! catturo il bottone 
const passwordButton = document.querySelector('#passwordButton');
//! catturo l'icona
const passwordIcon = document.querySelector('#passwordIcon');
passwordButton?.addEventListener('click', (e) =>{
    togglePassword(e);
}) 

const togglePassword = e => {
    //! Impedisce la propagazione dell'evento, per evitare interferenze con altri gestori di eventi
    e.stopPropagation();

    //! Ottiene la lunghezza della password dal campo di input
    const { length: passwordLength } = passwordInput.value;

    //! Verifica se l'icona della password attuale è "visibility_off"
    if(passwordIcon.innerText === "visibility_off"){
        //! Se sì, cambia l'icona a "visibility" e imposta il tipo di input a "text" per rendere la password visibile
        passwordIcon.innerText = "visibility";
        passwordInput.type = "text";
    } else {
        //! Altrimenti, cambia l'icona a "visibility_off" e imposta il tipo di input a "password" per mascherare la password
        passwordIcon.innerText = "visibility_off";
        passwordInput.type = "password";
    }

    //! Se la lunghezza della password è maggiore di zero, si focalizza sul campo di input e imposta il cursore alla fine della password
    if(passwordLength){
        passwordInput.focus();
        //InputDeviceInfo.setSelectionRange(passwordLength, passwordLength);
    }
}