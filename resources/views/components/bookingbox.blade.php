<div class="bookingbox">
    <form id="aff-form">
        <div class="options">
            <div class="one">
                <button class="aff-toggle-type active" type="button" data-type="OW">@lang('bookingbox.one_way')</button>
                <button class="aff-toggle-type" type="button" data-type="RT">@lang('bookingbox.round_trip')</button>
            </div>
            <div class="two">
                <button type="button" class="aff-toggle-currency active" data-currency="USD">USD</button>
                <button type="button" class="aff-toggle-currency" data-currency="MXN">MXN</button>
            </div>
        </div>
        <div class="elements">
            <div class="one">
                <div class="box_bg map_point">
                    <div class="elements_child">
                        <label for="aff-input-from">@lang('bookingbox.leaving_from')</label>
                        <input type="text" class="form-control" id="aff-input-from" placeholder="@lang('bookingbox.enter_pickup')" autocomplete="off">
                        <div id="aff-input-from-elements"></div>
                    </div>
                </div>
                <div class="box_bg map_point">
                    <div class="elements_child">
                        <label for="aff-input-to">@lang('bookingbox.going_to')</label>
                        <input type="text" class="form-control" id="aff-input-to" placeholder="@lang('bookingbox.enter_destination')" autocomplete="off">
                        <div id="aff-input-to-elements"></div>
                    </div>
                </div>
                <div class="two_items">
                    <div class="box_bg">
                        <div class="elements_child">
                            <label for="aff-input-pickup-date">@lang('bookingbox.pickup_date')</label>
                            <input type="date" class="form-control" id="aff-input-pickup-date">
                        </div>
                    </div>
                    <div class="box_bg">
                        <div class="elements_child">
                            <label for="aff-input-pickup-time">@lang('bookingbox.pickup_time')</label>                    
                            <input type="time" class="form-control" id="aff-input-pickup-time" value="00:00">
                        </div>
                    </div>
                </div>
                <div class="box_bg user">
                    <div class="elements_child">
                        <label for="aff-input-passengers">@lang('bookingbox.passengers')</label>
                        <select class="form-control" id="aff-input-passengers">
                            <?php for($i=1; $i<=25; $i++): ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="two hidden" id="aff-round-trip-element">
                <div class="two_items">
                    <div class="box_bg">
                        <div class="elements_child">
                            <label for="aff-input-to-pickup-date">@lang('bookingbox.pickup_date')</label>
                            <input type="date" class="form-control" id="aff-input-to-pickup-date">
                        </div>                        
                    </div>
                    <div class="box_bg">
                        <div class="elements_child">
                            <label for="aff-input-to-pickup-time">@lang('bookingbox.pickup_time')</label>
                            <input type="time" class="form-control" id="aff-input-to-pickup-time" value="00:00">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            @csrf
            <button id="aff-button-send">@lang('bookingbox.search')</button>
        </div>
    </form>
    <div id="aff-error-list"></div>
    <p>            
        <?php if(app()->getLocale() == "en"): ?>
            Book now and pay later | <strong>FREE cancellation</strong> on all our services | Pay in installments
        <?php endif; ?>
        <?php if(app()->getLocale() == "es"): ?>
            Reserva ahora y paga después | Cancelación <strong>GRATIS</strong> en todos nuestros servicios
        <?php endif; ?>
    </p>
</div>