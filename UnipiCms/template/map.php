    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <form action="#" method="post" role = "form" name="contactForm" id="contactForm">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name." value="" name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address." value="" name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number." value="" name="phone">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message." value="" name="message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button id="submit_btn" type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit" >Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>

<div class="col-md-12" style="padding:0px; margin-bottom:50px; margin-top:50px;">
    <div id="map" style="height: 400px;"></div>
</div>

<script>
	
map = L.map('map').setView([37.94174, 23.65319], 18);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    maxZoom: 18
}).addTo(map);

map.scrollWheelZoom.disable();
//map.dragging.disable();

L.marker([37.94174, 23.65319]).addTo(map)
    .bindPopup('Karaoli & Dimitriou St. 80')
    .openPopup();   
                 
</script>