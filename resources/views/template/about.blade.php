<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        {{-- @dump($about) --}}
        <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src={{ asset('img/profile-img.jpg') }} class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

                {{-- @foreach ($about as $item) --}}
                    <h3>{{ $about[0]->titre }}</h3>
                    <p class="font-italic">
                        {{$about[0]->description}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>
                                    {{ $about[0]->birthday }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{ $about[0]->website }}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $about[0]->phone }}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ $about[0]->city }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ $about[0]->age }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{ $about[0]->degree }}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong>
                                    {{ $about[0]->email }}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong>
                                    {{ $about[0]->statut }}</li>
                            </ul>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <p>
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                        omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                        neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni
                        laudantium dolores.
                    </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
