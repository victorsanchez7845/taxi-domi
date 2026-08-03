@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="stylesheet">
@endpush

@push("push-bottom")
    <script src="https://www.google.com/recaptcha/api.js?render=6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('formData');
            const messageDiv = document.getElementById('message');

            if (!form || !messageDiv) {
                return;
            }

            form.addEventListener('submit', e => {
                e.preventDefault();

                grecaptcha.ready(function() {
                    grecaptcha.execute(
                        '6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr',
                        { action: 'submit' }
                    ).then(function(token) {
                        form.querySelector('button').disabled = true;
                        onSubmit(token, form, messageDiv);
                    });
                });
            });
        });

        const onSubmit = (token, form, messageDiv) => {
            messageDiv.innerHTML = '';
            messageDiv.classList.remove('success', 'error');

            const newForm = new FormData(form);
            const fields = {};

            newForm.append('g_recaptcha_response', token);

            for (let [key, value] of newForm.entries()) {
                fields[key] = value;
            }

            fetch('/api/make-contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(fields)
            })
            .then(response => response.json())
            .then(jsonData => {
                form.querySelector('button').disabled = false;

                if (jsonData.status === true) {
                    messageDiv.textContent =
                        language === 'en'
                            ? 'Your message has been sent successfully. One of our agents will contact you shortly.'
                            : 'Tu mensaje ha sido enviado con éxito. Uno de nuestros agentes te contactará en breve.';

                    messageDiv.classList.add('success');
                    form.reset();
                } else {
                    messageDiv.textContent =
                        language === 'en'
                            ? 'An error occurred while sending your message. Please contact us by phone or WhatsApp.'
                            : 'Ocurrió un error al enviar tu mensaje. Por favor, contáctanos por teléfono o WhatsApp.';

                    messageDiv.classList.add('error');
                }
            })
            .catch(error => {
                console.error('Contact form error:', error);

                form.querySelector('button').disabled = false;

                messageDiv.textContent =
                    language === 'en'
                        ? 'An error occurred while sending your message. Please contact us by phone or WhatsApp.'
                        : 'Ocurrió un error al enviar tu mensaje. Por favor, contáctanos por teléfono o WhatsApp.';

                messageDiv.classList.add('error');
            });
        };
    </script>
@endpush

@section('content')
    @include('layout.header.general', [
        'link' => \App\Traits\GeneralTrait::getAlternate($seo)
    ])

    <div class="parallax-container">
        <div class="container">
            <h1>{{ __('website/contact.title') }}</h1>
        </div>
    </div>

    <div class="container contact-information">
        <div class="left">
            <h3>{{ __('website/contact.write_us') }}</h3>

            @if(app()->getLocale() == "es")
                <p>
                    &iquest;Est&aacute;s planeando un viaje a Rep&uacute;blica Dominicana?
                    Cont&aacute;ctanos para reservar tu traslado privado desde el aeropuerto
                    hasta tu hotel, resort o alojamiento. En Taxi Dominicana ofrecemos
                    servicios de transporte seguros, c&oacute;modos y puntuales en Punta
                    Cana, B&aacute;varo, Cap Cana, Uvero Alto, Bayah&iacute;be, Santo Domingo
                    y otros destinos del pa&iacute;s.
                </p>

                <p>
                    Nuestro equipo puede ayudarte a organizar traslados desde el Aeropuerto
                    Internacional de Punta Cana, el Aeropuerto Internacional Las Am&eacute;ricas
                    y otros aeropuertos de Rep&uacute;blica Dominicana. Escr&iacute;benos por
                    correo electr&oacute;nico, tel&eacute;fono o mediante nuestro formulario
                    para solicitar informaci&oacute;n, resolver tus dudas o recibir una
                    cotizaci&oacute;n para tu viaje.
                </p>
            @else
                <p>
                    Are you planning a trip to the Dominican Republic? Contact us to book
                    your private transfer from the airport to your hotel, resort or
                    accommodation. At Taxi Dominicana, we provide safe, comfortable and
                    reliable transportation services in Punta Cana, Bavaro, Cap Cana,
                    Uvero Alto, Bayahibe, Santo Domingo and other destinations throughout
                    the country.
                </p>

                <p>
                    Our team can help you arrange transportation from Punta Cana
                    International Airport, Las Americas International Airport and other
                    airports in the Dominican Republic. Contact us by email, phone or
                    through our online form to request information, ask a question or
                    receive a quote for your trip.
                </p>
            @endif

            <div id="message"></div>

            <form action="" method="POST" id="formData">
                <div>
                    <label>
                        {{ __('website/contact.name') }}
                        <small>*</small>
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        required
                    >
                </div>

                <div>
                    <label>
                        EMAIL
                        <small>*</small>
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        required
                    >
                </div>

                <div class="two">
                    <div>
                        <label>
                            {{ __('website/contact.subject') }}
                            <small>*</small>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="subject"
                            required
                        >
                    </div>

                    <div>
                        <label>
                            {{ __('website/contact.phone') }}
                            <small>*</small>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="phone"
                            required
                        >
                    </div>
                </div>

                <div>
                    <label>
                        {{ __('website/contact.message') }}
                        <small>*</small>
                    </label>

                    <textarea
                        class="form-control"
                        rows="6"
                        cols="30"
                        name="message"
                        required
                    ></textarea>
                </div>

                @csrf

                <button type="submit">
                    {{ __('website/contact.submit') }}
                </button>
            </form>
        </div>

        <div class="right">
            <iframe
                src="https://www.google.com/maps?q=Punta+Cana+International+Airport,+Dominican+Republic&output=embed"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Punta Cana International Airport map"
            ></iframe>
        </div>
    </div>

    @include('layout.footer.general')
@endsection