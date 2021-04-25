<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>{{$about[0]->city}}</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$about[0]->email}}</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>{{$about[0]->phone}}</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                @include('layouts.flash')
                <form action={{route('mail.store')}} method="post" >
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Your Name</label>
                            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            @error('nom')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mail">Your Email</label>
                            <input type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" id="mail" data-rule="email"
                                data-msg="Please enter a valid email" />
                            @error('mail')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sujet">Subject</label>
                        <input type="text" class="form-control @error('sujet') is-invalid @enderror" name="sujet" id="sujet" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                            @error('sujet')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10" data-rule="required"
                            data-msg="Please write something for us"></textarea>
                            @error('message')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
