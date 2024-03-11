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
                <p>Si deseas una cotización de un servicio especial de transporte, no dudes en consultarnos, llena el siguiente formulario y nos pondremos en contacto lo más pronto posible.</p>
            @else
                <p>At Taxi Riviera Maya, we understand that each traveler and every journey is unique. That's why we offer special services tailored to your needs and budget. Whether you require transportation for a large group, have specific budget constraints, or need a customized solution, simply share your requirements with us. Our team is here to ensure that your experience with Taxi Riviera Maya is designed to meet your travel needs. Just let us know your needs, and we'll find the best option for you!</p>
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