<section class="page-contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-paper-plane"></span>
                    <h5>Электронная почта</h5>
                    <p>{{ setting('site.contacts_email') }}</p>
                </div>
            </div>

            <div class="col-md-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-phone"></span>
                    <h5>Телефон</h5>
                    <p class="bold">{{ setting('site.contacts_phone') }}</p>
                </div>
            </div>

            <div class="col-md-4 item">
                <div class="text-center">
                    <span class="icon pe-7s-map-marker"></span>
                    <h5>Местоположение</h5>
                    <p>{{ setting('site.contacts_location') }}</p>
                </div>
            </div>

        </div>
    </div>
</section>
