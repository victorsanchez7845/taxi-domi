(function () {    
    var round_trip_element = document.getElementById('aff-round-trip-element');
    var from_autocomplete = document.getElementById('aff-input-from');
    var to_autocomplete = document.getElementById('aff-input-to');    
    var passengers = document.getElementById('aff-input-passengers');


    var date_init = document.getElementById('aff-input-pickup-date');
    var date_end = document.getElementById('aff-input-to-pickup-date');

    var time_init = document.getElementById('aff-input-pickup-time');
    var time_end = document.getElementById('aff-input-to-pickup-time');

    var button = document.getElementById('aff-button-send');
    var errors = document.getElementById('aff-error-list');
    var affiliate = document.getElementById('aff-affiliate-id');
    var channel = document.getElementById('aff-channel');

    const itemsTranslation = {
        en: {
            "quote.url": "/results",
            "quote.from.input": "Please, enter the pickup location",
            "quote.from.date": "Please, enter your pickup date",
            "quote.to.input": "Please, enter the destination",
            "quote.to.date": "Please, enter your return date",
        },
        es: {
            "quote.url": "/es/resultados",
            "quote.from.input": "Por favor, introduzca el lugar de recogida",
            "quote.from.date": "Por favor, introduzca su fecha de recogida",
            "quote.to.input": "Por favor, introduzca el destino",
            "quote.to.date": "Por favor, introduzca su fecha de regreso",
        }
    };



    let setup = {        
        lang: language,
        currency: 'USD',
        deeplink: '/resultados',
        serviceType: 'OW',
        pax: 1,
        items: {
            from: {
                name: '',
                latitude: '',
                longitude: '',
                pickupDate: '',
                pickupTime: '00:00',
            },
            to: {
                name: '',
                latitude: '',
                longitude: '',
                pickupDate: '',
                pickupTime: '00:00',
            },
        },
        setCurrency: function(currency){
            currency = currency.toUpperCase();
            const allowedCurrency = ["USD", "MXN"];
            if( allowedCurrency.includes(currency) ){
                this.currency = currency;
            }            
        },
        setServiceType: function(serviceType){
            serviceType = serviceType.toUpperCase();
            const allowedServices = ["OW", "RT"];
            if( allowedServices.includes(serviceType) ){
                this.serviceType = serviceType;
            }  
        },
        setPax: function(pax){
            setup.pax = pax;            
        },
        setItem(element, data = {}){
            const finalElement = document.getElementById(element);
            finalElement.innerHTML = '';

            if(element === "aff-input-from-elements"){
                const initInput = document.getElementById('aff-input-from');
                initInput.value = data.name;
                setup.items.from.name = data.name;
                setup.items.from.latitude = data.geo.lat;
                setup.items.from.longitude = data.geo.lng;                
            }

            if(element === "aff-input-to-elements"){
                const initInput = document.getElementById('aff-input-to');
                initInput.value = data.name;
                setup.items.to.name = data.name;
                setup.items.to.latitude = data.geo.lat;
                setup.items.to.longitude = data.geo.lng;                
            }            
        },
        setTime(element, time){
            if(element === "init"){
                setup.items.from.pickupTime = time;
            }
            if(element === "end"){
                setup.items.to.pickupTime = time;
            }            
        },
        autocomplete: function(keyword, element){
            let size = keyword.length;
            if(size < 3) return false;

            setup.loadingMessage(element);
            
            fetch(`/api/autocomplete`, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({ keyword:keyword })
            }).then((response) => {
                return response.json()
            }).then((data) => {
                this.makeItems(data,element);
            }).catch((error) => {
                console.error('Error:', error);
            });
        },
        makeItems: function(data, element){
            const finalElement = document.getElementById(element);
            finalElement.innerHTML = '';

            data = data.items;

            for (let key in data) {
                if (data.hasOwnProperty(key)) {

                    const itemDiv = document.createElement('div');
                    itemDiv.textContent = data[key].name;

                    const span = document.createElement('span');
                    span.textContent = data[key].address;

                    itemDiv.appendChild(span);

                    itemDiv.addEventListener('click', function() { 
                        setup.setItem(element, data[key]);
                    });

                    finalElement.appendChild(itemDiv);
                }
            }            
        },
        loadingMessage: function(item){

            const loader = document.getElementById(item);
            loader.innerHTML = '';
            
            const div = document.createElement('div');
            div.classList.add("loader");
            const image = document.createElement('img');
            image.src = '/assets/img/loader.gif';
            
            div.appendChild(image);
            loader.appendChild(div);

        },
        errorMessage: function(){
            const loader = document.getElementById(item);
            loader.textContent = 'Error';
        },
        getTranslation: function(item){
            return (itemsTranslation[setup.lang][item]) ? itemsTranslation[setup.lang][item] : 'Translate not found';
        },
        validate: function(){
            setup.clearErrors();
            
            //Validate from data
            if(!this.items.from.name || this.items.from.name.trim() === '' || !this.items.from.latitude || this.items.from.latitude.toString().trim() === '' || !this.items.from.longitude || this.items.from.longitude.toString().trim() === ''){
                setup.hightlight(from_autocomplete, this.getTranslation("quote.from.input"));
                return false;
            }

            //Validate to data
            if(!this.items.to.name || this.items.to.name.trim() === '' || !this.items.to.latitude || this.items.to.latitude.toString().trim() === '' || !this.items.to.longitude || this.items.to.longitude.toString().trim() === ''){
                setup.hightlight(to_autocomplete, this.getTranslation("quote.to.input"));
                return false;
            }

            //Validate date data
            if(!this.items.from.pickupDate || this.items.from.pickupDate.toString().trim() === ''){
                setup.hightlight(date_init, this.getTranslation("quote.from.date"));
                return false;
            }

            if(this.serviceType === "RT"){
                //Validate date data
                if(!this.items.to.pickupDate || this.items.to.pickupDate.toString().trim() === ''){
                    setup.hightlight(date_end, this.getTranslation("quote.to.date"));
                    return false;
                }
            }

            var data = {
                type: setup.serviceType,
                currency: setup.currency,
                language: setup.lang,
                passengers: setup.pax,
                from: {
                    name: setup.items.from.name,
                    lat: setup.items.from.latitude,
                    lng: setup.items.from.longitude,
                    pickupDate: setup.items.from.pickupDate,
                    pickupTime: setup.items.from.pickupTime
                },
                to: {
                    name: setup.items.to.name,
                    lat: setup.items.to.latitude,
                    lng: setup.items.to.longitude,
                    pickupDate: setup.items.to.pickupDate,
                    pickupTime: setup.items.to.pickupTime
                }
            };

            localStorage.setItem('bookingbox', JSON.stringify(data));
            
            var form_data = document.createElement('form');
                form_data.style.display = 'none';
                form_data.method = 'post';
                form_data.action = this.getTranslation("quote.url");

            let form_data_type = document.createElement('input');
                form_data_type.type = 'text';
                form_data_type.name = 'type';
                form_data_type.value = setup.serviceType;
                form_data.appendChild(form_data_type);
            let form_data_currency = document.createElement('input');
                form_data_currency.type = 'text';
                form_data_currency.name = 'currency';
                form_data_currency.value = setup.currency;
                form_data.appendChild(form_data_currency);
            let form_data_language = document.createElement('input');
                form_data_language.type = 'text';
                form_data_language.name = 'language';
                form_data_language.value = setup.lang;
                form_data.appendChild(form_data_language);
            let form_data_passengers = document.createElement('input');
                form_data_passengers.type = 'text';
                form_data_passengers.name = 'passengers';
                form_data_passengers.value = setup.pax;
                form_data.appendChild(form_data_passengers);

            let form_data_from = document.createElement('input');
                form_data_from.type = 'text';
                form_data_from.name = 'from';
                form_data_from.value = setup.items.from.name;
                form_data.appendChild(form_data_from);
            let form_data_from_lat = document.createElement('input');
                form_data_from_lat.type = 'text';
                form_data_from_lat.name = 'from_latitude';
                form_data_from_lat.value = setup.items.from.latitude;
                form_data.appendChild(form_data_from_lat);
            let form_data_from_lng = document.createElement('input');
                form_data_from_lng.type = 'text';
                form_data_from_lng.name = 'from_longitude';
                form_data_from_lng.value = setup.items.from.longitude;
                form_data.appendChild(form_data_from_lng);
            let form_data_from_pickupDate = document.createElement('input');
                form_data_from_pickupDate.type = 'text';
                form_data_from_pickupDate.name = 'from_pickup_date';
                form_data_from_pickupDate.value = setup.items.from.pickupDate + " " + setup.items.from.pickupTime
                form_data.appendChild(form_data_from_pickupDate);

            let form_data_to = document.createElement('input');
                form_data_to.type = 'text';
                form_data_to.name = 'to';
                form_data_to.value = setup.items.to.name;
                form_data.appendChild(form_data_to);
            let form_data_to_lat = document.createElement('input');
                form_data_to_lat.type = 'text';
                form_data_to_lat.name = 'to_latitude';
                form_data_to_lat.value = setup.items.to.latitude;
                form_data.appendChild(form_data_to_lat);
            let form_data_to_lng = document.createElement('input');
                form_data_to_lng.type = 'text';
                form_data_to_lng.name = 'to_longitude';
                form_data_to_lng.value = setup.items.to.longitude;
                form_data.appendChild(form_data_to_lng);
            
            if(this.serviceType === "RT"){
                let form_data_to_pickupDate = document.createElement('input');
                    form_data_to_pickupDate.type = 'text';
                    form_data_to_pickupDate.name = 'to_pickup_date';
                    form_data_to_pickupDate.value = setup.items.to.pickupDate + " " + setup.items.to.pickupTime;
                    form_data.appendChild(form_data_to_pickupDate);                
            }
            
            let form_data_crfs = document.createElement('input');
                form_data_crfs.type = 'text';
                form_data_crfs.name = '_token';
                form_data_crfs.value = document.querySelector('meta[name="csrf-token"]').content
                form_data.appendChild(form_data_crfs);

            document.body.appendChild(form_data);    
            form_data.submit();

        },
        hightlight: function(element, text){            
            element.parentNode.parentNode.classList.add("hightlight");
            errors.textContent = text;
        },
        clearErrors: function(){
            from_autocomplete.parentNode.parentNode.classList.remove("hightlight");
            to_autocomplete.parentNode.parentNode.classList.remove("hightlight");
            date_init.parentNode.parentNode.classList.remove("hightlight");
            date_end.parentNode.parentNode.classList.remove("hightlight");
            errors.textContent = '';
        },
        init: function(){
            
            var data = JSON.parse(localStorage.getItem('bookingbox'));
            if(data){
                setup.setCurrency(data.currency);
                var btnCurrency = document.querySelector(`.aff-toggle-currency[data-currency="${data.currency}"]`);
                if (btnCurrency) {
                    btnCurrency.click();
                }

                if( ['/results', '/es/resultados'].includes(window.location.pathname) ) {
                    setup.setServiceType(data.type);
                    var btnType = document.querySelector(`.aff-toggle-type[data-type="${data.type}"]`);
                    if (btnType) {
                        btnType.click();
                    }
                }
                
                from_autocomplete.value = data.from.name;
                setup.items.from.name = data.from.name;
                setup.items.from.latitude = data.from.lat;
                setup.items.from.longitude = data.from.lng;                
                
                setup.items.from.pickupDate = data.from.pickupDate;
                date_init.value = data.from.pickupDate;

                setup.items.from.pickupTime = data.from.pickupTime;
                time_init.value = data.from.pickupTime;

                to_autocomplete.value = data.to.name;
                setup.items.to.name = data.to.name;
                setup.items.to.latitude = data.to.lat;
                setup.items.to.longitude = data.to.lng;                

                if(data.type == "RT"){
                    setup.items.to.pickupDate = data.to.pickupDate;
                    date_end.value = data.to.pickupDate;
                    setup.items.to.pickupTime = data.to.pickupTime;
                    time_end.value = data.to.pickupTime;
                }

                setup.setPax(data.passengers);
                passengers.value = data.passengers;                
            }

        }
    };

    const buttons = document.querySelectorAll('.aff-toggle-currency');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const dataType = this.getAttribute('data-currency');
            setup.setCurrency(dataType);

            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            this.classList.add('active');
        });
    });

    const serviceTypeButtons = document.querySelectorAll('.aff-toggle-type');
    serviceTypeButtons.forEach(button =>{
        button.addEventListener('click', function(){
            const dataType = this.getAttribute('data-type');
            setup.setServiceType(dataType);

            if(dataType == "RT"){
                round_trip_element.classList.remove("hidden");
            }else{
                round_trip_element.classList.add("hidden");
            }

            serviceTypeButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
    
    function affDelayAutocomplete(callback, ms) {
        var timer = 0;
        return function () {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

   
    from_autocomplete.addEventListener('keydown', affDelayAutocomplete(function (e) {        
        setup.autocomplete( e.target.value, 'aff-input-from-elements');
    }, 500));
    from_autocomplete.addEventListener('focus', (e) => {
        setup.autocomplete( e.target.value, 'aff-input-from-elements');
    });
    
    to_autocomplete.addEventListener('keydown', affDelayAutocomplete(function (e) {        
        setup.autocomplete( e.target.value, 'aff-input-to-elements');
    }, 500));
    to_autocomplete.addEventListener('focus', (e) => {
        setup.autocomplete( e.target.value, 'aff-input-to-elements');
    });
    
    passengers.addEventListener('change', function(){
        setup.setPax(this.value);
    });

    time_init.addEventListener('change', function(){
        setup.setTime('init', this.value);
    });
    time_end.addEventListener('change', function(){
        setup.setTime('end', this.value);
    });
    
    date_init.addEventListener('change', function(){        
        setup.items.from.pickupDate = this.value;
        
        if( setup.serviceType === "OW" ){
            date_end.value = this.value;
            setup.items.to.pickupDate = this.value;
        }
        if( setup.serviceType === "RT" ){
            if( date_end.value < this.value ){
                date_end.value = this.value;
                setup.items.to.pickupDate = this.value;             
            }
        }    
    });

    date_end.addEventListener('change', function(){
        setup.items.to.pickupDate = this.value;

        if(date_init.value > this.value){
            date_init.value = this.value;
            setup.items.from.pickupDate = this.value;
        }
    });
    
    button.addEventListener('click', function(e){
        e.preventDefault();
        setup.validate();
    });

    setup.init();
})();