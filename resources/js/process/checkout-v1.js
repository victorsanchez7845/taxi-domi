var btn = document.getElementById('btn_send');

let formData = {
    arrival_airline: document.getElementsByName('arrival_airline')[0],
    arrival_flight_number: document.getElementsByName('arrival_flight_number')[0],
    first_name: document.getElementsByName('first_name')[0],
    last_name: document.getElementsByName('last_name')[0],
    email: document.getElementsByName('email')[0],
    phone_input: document.getElementsByName('phone_input')[0],
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

//Funcionalidad para agregar el prefijo del país al número de teléfono
var input = document.querySelector("#phone");    
var iti = window.intlTelInput(input, {
    initialCountry: "us",
    preferredCountries: ["us","ca", "mx"],
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});
input.addEventListener("input", function() {
    document.getElementById('fill-phone').value = iti.getNumber();    
});
input.addEventListener("countrychange", function() {
    document.getElementById('fill-phone').value = iti.getNumber();
});

const paymentTypeRadios = document.querySelectorAll('input[name="payment_type"]');
const paymentInfoDiv = document.getElementById('paymentInfo');
const cashInfoDiv = document.getElementById('cashInfo');

paymentTypeRadios.forEach(radio => {
    radio.addEventListener('click', function() {
        paymentInfoDiv.classList.add('hidden');
        cashInfoDiv.classList.add('hidden');

        if (this.value === 'credit_card') {
            paymentInfoDiv.classList.remove('hidden');
        }if (this.value === 'cash') {
            cashInfoDiv.classList.remove('hidden');
        }
    });
});

const radioCard = document.getElementById("card");
if (radioCard) {
    radioCard.checked = true;
    paymentInfoDiv.classList.add('hidden');
}

const messageContainer = document.querySelector('#error-message');
const handleError = (error) => {
    messageContainer.textContent = error.message;
}

const form = document.getElementById('checkoutForm');
form.addEventListener('submit', async (e) => {
    e.preventDefault();

    deleteMessages();

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
        phone_input: 'required|max:25',
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
        form.submit();

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

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.paymentV4 .element');
    elements.forEach(el => {
        el.addEventListener('click', function () {
            elements.forEach(e => e.classList.remove('active'));
            this.classList.add('active');

            const activeElement = document.querySelector('.element.active');
            const paymentType = activeElement.getAttribute('data-type');
            document.getElementById('payment_type').value = paymentType;

        });
    });
});