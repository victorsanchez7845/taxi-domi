@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script src="https://www.google.com/recaptcha/api.js?render=6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr" defer></script>

    <script>
        const form = document.getElementById('formData');
        const messageDiv = document.getElementById('message');

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
        });

        const onSubmit = (token, form) => {            
            messageDiv.innerHTML = '';
            let newForm = new FormData(form);
            const fields = {};

            newForm.append('g_recaptcha_response', token);
            for(let [key, value] of newForm.entries()){
                fields[key]= value;
            }

            fetch('/api/make-contact', {
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
                    messageDiv.textContent = `${ (( language == "en" )?'The email has been sent successfully, an agent will contact you shortly.':'El correo ha sido enviado con éxito, en breve un agente te contactará.') }`;
                    messageDiv.classList.add('success');
                    form.reset();
                }else{
                    messageDiv.textContent = `${ (( language == "en" )?'An error occurred while sending the message, please contact us by phone':'Ocurrió un error al enviar el mensaje, por favor contáctanos por teléfono') } `;
                    messageDiv.classList.add('error');                    
                }
            })
            .catch( error => console.log( error ) );
        }

    </script>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    
    <div class="parallax-container">
        <div class="container">
            <h1>{{ __('website/contact.title') }}</h1>
        </div>
    </div>

    <div class="container contact-information">
        <div class="left">
            <h3>{{ __('website/contact.write_us') }}</h3>
            @if(app()->getLocale() == "es")   
                <p>&iquest;Listo para explorar la exuberante Riviera Maya con comodidad y estilo? &iexcl;Cont&aacute;ctanos hoy mismo para reservar tu transporte tur&iacute;stico privado! En Tulum Airport Cab, estamos comprometidos a brindarte un servicio excepcional que satisfaga todas tus necesidades de transporte durante tu estancia en esta fascinante regi&oacute;n. Ya sea que necesites un traslado desde el aeropuerto o una emocionante excursi&oacute;n, nuestro equipo profesional est&aacute; aqu&iacute; para hacer que tu experiencia sea inolvidable.</p>
                <p>Ponte en contacto con nosotros a trav&eacute;s de correo electr&oacute;nico, tel&eacute;fono o mediante nuestro formulario en l&iacute;nea para obtener m&aacute;s informaci&oacute;n y reservar tu viaje con nosotros. &iexcl;Esperamos ayudarte a hacer de tu visita a Tulum y la Riviera Maya una experiencia memorable!</p>
            @else
                <p>Ready to explore the lush Riviera Maya in comfort and style? Contact us today to book your private tour transportation! At Tulum Airport Cab, we are committed to providing you with exceptional service to meet all your transportation needs during your stay in this fascinating region. Whether you need an airport transfer or an exciting excursion, our professional team is here to make your experience unforgettable.</p>
                <p>Contact us via email, phone or our online form for more information and to book your trip with us, we look forward to helping you make your visit to Tulum and the Riviera Maya a memorable experience!</p>
            @endif
            <div id="message"></div>
            <form action="" method="POST" id="formData">
                <div>
                    <label>{{ __('website/contact.name') }} <small>*</small></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <label>EMAIL <small>*</small></label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="two">
                    <div>
                        <label>{{ __('website/contact.subject') }} <small>*</small></label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div>
                        <label>{{ __('website/contact.phone') }} <small>*</small></label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                <div>
                    <label>{{ __('website/contact.message') }} <small>*</small></label>
                    <textarea class="form-control" rows="6" cols="30" name="message" required></textarea>
                </div>
                @csrf
                <button type="submit">{{ __('website/contact.submit') }}</button>
            </form>
        </div>
        <div class="right">            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.2298227125634!2d-87.66179588818459!3d20.166154281197873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e2b7a20cafeb1%3A0x3442c47b0b54e8bf!2sAeropuerto%20Internacional%20de%20Tulum%20Felipe%20Carrillo%20Puerto!5e0!3m2!1ses-419!2smx!4v1710006562467!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    @include('layout.footer.general')
@endsection