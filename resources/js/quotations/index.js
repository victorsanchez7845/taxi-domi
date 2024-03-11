const form = document.getElementById('formData');
const messageDiv = document.getElementById('message');
const service_type = document.getElementById("service_type");
var departure_item = document.getElementById("departure_item");

document.addEventListener('DOMContentLoaded', () => {
    
    form.addEventListener('submit', e => {
        e.preventDefault();                
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr', { action: 'submit' }).then(function(token) {
                form.querySelector('button').disabled = true;
                onSubmit(token, form);
            });
        });
    });

    service_type.addEventListener("change", function() {
        if(this.value == "Redondo"){
            departure_item.classList.remove("hidden");
        }else{
            departure_item.classList.add("hidden");
        }
    });

});

const onSubmit = (token, form) => {            
    messageDiv.innerHTML = '';
    let newForm = new FormData(form);
    const fields = {};

    newForm.append('g_recaptcha_response', token);
    for(let [key, value] of newForm.entries()){
        fields[key]= value;
    }

    fetch('/api/make-quote', {
        method: 'POST',
        headers: { 
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(fields)
    })
    .then( response => response.json())
    .then( jsonData => {
        form.querySelector('button').disabled = false;
        if(jsonData.status == true){
            messageDiv.textContent = `El correo ha sido enviado con éxito, en breve un agente te contactará.`;
            messageDiv.classList.add('success');
            form.reset();
        }else{
            messageDiv.textContent = `Ocurrió un error al enviar el mensaje, por favor contáctanos por teléfono`;
            messageDiv.classList.add('error');                    
        }
    })
    .catch( error => console.log( error ) );
}