var btn = document.getElementById('btn_send');

let formData = {
    arrival_airline: document.getElementsByName('arrival_airline')[0],
    arrival_flight_number: document.getElementsByName('arrival_flight_number')[0],
    first_name: document.getElementsByName('first_name')[0],
    last_name: document.getElementsByName('last_name')[0],
    email: document.getElementsByName('email')[0],
    phone: document.getElementsByName('phone')[0],
    special_request: document.getElementsByName('special_request')[0],
};

function deleteMessages() {
    Object.keys(formData).forEach(function(key) {
        if(formData[key]){
            let after_span = formData[key].nextSibling;
            if (after_span && after_span.nodeName === 'SPAN') {
                after_span.remove();
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {    
    var labels = document.querySelectorAll('.payment-information label');    
    
    labels.forEach(function (label) {
      label.addEventListener('click', function () {        
        labels.forEach(function (l) {
          l.classList.remove('active');
        });
        
        label.classList.add('active');
        
        var radioButtons = document.querySelectorAll('input[name="payment_type"]');
        radioButtons.forEach(function (radio) {
          radio.checked = false;
        });
        
        var radioButton = label.querySelector('input[name="payment_type"]');
        radioButton.checked = true;
      });
    });
});



const messageContainer = document.querySelector('#error-message');
const handleError = (error) => {
    messageContainer.textContent = error.message;
}
const handleClearError = () => {
    messageContainer.textContent = "";
}

const form = document.getElementById('checkoutForm');
form.addEventListener('submit', async (e) => {
    e.preventDefault();

    deleteMessages();
    handleClearError();

    let data = {};
    Object.keys(formData).forEach(function(key) {
        if(formData[key]){
            data[key] = formData[key].value;
        }
    });
      
    let rules = {
        arrival_airline: 'required|min:2|max:35',
        arrival_flight_number: 'required|min:2|max:35',
        first_name: 'required|min:2|max:45',
        last_name: 'max:45',
        email: 'required|email|max:45',
        phone: 'required|max:25',
        special_request: 'max:150',
    }

    if(item_config.flight_required == "0"){
        delete rules.arrival_airline;
        delete rules.arrival_flight_number;
    }

    if(language == "es"){
        var messages = {
            required: 'Este campo es obligatorio',
            min: 'Mínimo :min caracteres',
            max: 'Máximo :max caracteres',
            email: 'E-mail incorrecto'
        };
    }else{
        var messages = {
            required: 'This field is required',
            min: 'Min :min characters',
            max: 'Max :max characters',
            email: 'Incorrect e-mail'
        };
    }



    let validation = new Validator(data, rules, messages);

    if (validation.passes()) {
        btn.classList.add("loading");
        btn.disabled = true;

        const {error, paymentIntent} = await stripe.confirmPayment({
            elements,
            redirect: "if_required"
        });
        
        if(error){
            btn.classList.remove("loading");
            btn.disabled = false;
            handleError(error);
        } else if (paymentIntent) {                        

            // Crear y configurar el input para payment ID
            const inputId = document.createElement("input");
            inputId.type = "hidden";
            inputId.name = "payment[id]";
            inputId.value = paymentIntent.id;

            // Crear y configurar el input para payment amount
            const inputAmount = document.createElement("input");
            inputAmount.type = "hidden";
            inputAmount.name = "payment[amount]";
            inputAmount.value = paymentIntent.amount;

            // Crear y configurar el input para payment currency
            const inputCurrency = document.createElement("input");
            inputCurrency.type = "hidden";
            inputCurrency.name = "payment[currency]";
            inputCurrency.value = paymentIntent.currency;

            // Añadir los inputs al formulario
            form.appendChild(inputId);
            form.appendChild(inputAmount);
            form.appendChild(inputCurrency);

            form.submit();
        }
        
    } else {
        
        Object.keys(validation.errors.errors).forEach(function(key) {  
            let span = document.createElement('span');
                span.classList.add("error");
                span.textContent = validation.errors.errors[key];
                if(formData[key]){
                    formData[key].parentNode.insertBefore(span, formData[key].nextSibling);
                }
        });        
        return false;
    }  
});