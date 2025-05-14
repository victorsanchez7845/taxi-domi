const language = document.documentElement.getAttribute('lang');

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.items .element');
    elements.forEach(el => {
      el.addEventListener('click', function () {        
        elements.forEach(e => e.classList.remove('active'));        
        this.classList.add('active');
      });
    });
});

const stripe = Stripe(stripe_public_key);

const appearance = { /* appearance */ };
const options = {
  layout: {
    type: 'accordion',
    defaultCollapsed: false,
    radios: false,
    spacedAccordionItems: true
  }
};
const clientSecret = stripe_order;
const elements = stripe.elements({ clientSecret, appearance });
      elements.update({locale: language });
const paymentElement = elements.create('payment', options);
paymentElement.mount('#strype-payment-element');

const stripeErrorDiv = document.querySelector('#stripeErrorDiv');
const paypalErrorDiv = document.querySelector('#paypalErrorDiv');
const handleStrypeError = (error) => {
    stripeErrorDiv.textContent = error.message;
}
const handlePayPalError = (error) => {
    paypalErrorDiv.innerHTML = error;
}

document.getElementById('PaymentButton').addEventListener('click', async function () {
    const button = this;

    const activeElement = document.querySelector('.element.active');
    if (activeElement) {
        const paymentType = activeElement.getAttribute('data-type');
        
        button.disabled = true;
        button.classList.add('loading');

        if (paymentType === 'stripe') {

            //Logica de Stripe
            const {error, paymentIntent} = await stripe.confirmPayment({
                elements,
                redirect: "if_required"
            });
            
            if(error){
                handleStrypeError(error);
                button.disabled = false;
                button.classList.remove('loading');
            } else if (paymentIntent) {
                const url = language === 'en' ? '/thank-you' : '/es/gracias';
                window.location.href = url;
            }

        }
    }
});


const paypalButtons = window.paypal.Buttons({
    style: {
        shape: "rect",
        layout: "vertical",
        color: "gold",
        label: "paypal",
    },
    async createOrder() {
        return paypal_order;
    } ,
    async onApprove(data, actions) {
        try {
            const response = await fetch(
                `/payment-capture-order?id=${paypal_order}`,{
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                    },
                }
            );

            const orderData = await response.json();
            // Three cases to handle:
            //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
            //   (2) Other non-recoverable errors -> Show a failure message
            //   (3) Successful transaction -> Show confirmation or thank you message

            const errorDetail = orderData?.details?.[0];

            if (errorDetail?.issue === "INSTRUMENT_DECLINED") {                        
                return actions.restart();
            } else if (errorDetail) {
                throw new Error(
                    `${errorDetail.description} (${orderData.debug_id})`
                );
            } else if (!orderData.purchase_units) {
                throw new Error(JSON.stringify(orderData));
            } else {
                const url = language === 'en' ? '/thank-you' : '/es/gracias';
                window.location.href = url;
            }
        } catch (error) {
            handlePayPalError(error);
        }
    }
});    
paypalButtons.render("#paypal-payment-element");


const button = document.getElementById('counter');
const span = button.querySelector('span');

// Convierte a fecha
const startTime = new Date(time.replace(' ', 'T'));
const deadline = new Date(startTime.getTime() + 30 * 60000); // 30 minutos

function updateCounter() {
    const now = new Date();
    const diff = deadline - now;

    if (diff <= 0) {
        button.classList.add('red');
        span.textContent = '(00:00:00)';
        clearInterval(timer);

        //const url = language === 'en' ? '/my-reservation-detail/' + uuid : '/es/mi-reservacion-detalle/' + uuid;
        //window.location.href = url;

        return;
    }

    const hours = String(Math.floor(diff / 3600000)).padStart(2, '0');
    const minutes = String(Math.floor((diff % 3600000) / 60000)).padStart(2, '0');
    const seconds = String(Math.floor((diff % 60000) / 1000)).padStart(2, '0');        
    span.textContent = `(${hours}:${minutes}:${seconds})`;
}

document.addEventListener('DOMContentLoaded', function () {
    updateCounter();
});

const timer = setInterval(updateCounter, 1000);