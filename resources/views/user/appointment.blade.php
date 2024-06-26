<div id="appointment" class="appointment-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Appointment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Book an Appointment</h2>
                    </div>
                    <form action="{{ url('appointment') }}" method="POST">
                        @csrf
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" placeholder="Name"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="text" placeholder="E-Mail"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="phone">phone</label>
                                    <input id="phone" name="number" type="number" placeholder="Phone"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">Preferred Date</label>
                                    <input id="date" name="date" type="date" placeholder="Preferred Date"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="time">Preferred Time</label>
                                    <select id="time" name="time" class="form-control">
                                        <option value="8:00 to 9:00">8:00 to 9:00</option>
                                        <option value="9:00 to 10:00">9:00 to 10:00</option>
                                        <option value="10:00 to 1:00">10:00 to 1:00</option>
                                    </select>
                                </div>
                            </div> --}}
                            <!-- Select Basic -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Doctor</label>
                                    <select id="appointmentfor" name="doctor" class="form-control">
                                        <option value="Choose doctor">select doctors</option>

                                        @foreach ($doctor as $doctors)
                                            {
                                            <option value="{{ $doctors->name }}">
                                                {{ $doctors->name }}---speciailty---{{ $doctors->speciality }}</option>
                                            }
                                        @endforeach

                                        {{-- <option value="Gynacology">Gynacology</option>
                                        <option value="Dermatologist">Dermatologist</option>
                                        <option value="Orthology">Orthology</option>
                                        <option value="Anesthesiology">Anesthesiology</option>
                                        <option value="Ayurvedic">Ayurvedic</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="message">message</label>
                                    {{-- <input id="message" name="message" type="textarea"
                                        placeholder="" class="form-control input-md"> --}}
                                    <textarea name="message" id="message" cols="70" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Make An
                                        Appointment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Why Appointment with Us</h2>
                    </div>
                    <div class="feature-block">
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">24/7 Hours Available</h4>
                            <div class="feature-content">
                                <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis
                                    vehicula et, iaculis in magnestibulum.</p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">Experienced Staff Available</h4>
                            <div class="feature-content">
                                <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum
                                    quis feugiat risus. </p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">Low Price & Fees</h4>
                            <div class="feature-content">
                                <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer
                                    auctor elementum nulla suscipit in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
