@extends('template')
@section('content')

    <!--Section: News of the day-->
    <div class="p-5">
        <section class="border-bottom pb-4 mb-5">
            <div class="row gx-5">
                <div class="col-md-6 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                    <h4><strong>Noticia de Libros Chidos</strong></h4>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                        eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                        sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                    </p>
                    <button type="button" class="btn btn-primary">Read more</button>
                </div>
            </div>
        </section>
        <!--Section: News of the day-->

        <!--Section: Content-->
        <section>
            <div class="row gx-lg-5">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" class="text-info">
                                    <i class="fas fa-plane"></i>
                                    People
                                </a>
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" class="text-dark">
                            <h5>El Libro Troll Rompe Récords</h5>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                adipisci iusto nam temporibus modi animi laboriosam?
                            </p>
                        </a>
                        <hr />
                    </div>
                    <!-- News block -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/018.webp" class="img-fluid"
                                alt="Golden Gate National Recreation Area" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" class="text-warning">
                                    <i class="fas fa-code"></i>
                                    Technology
                                </a>
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" class="text-dark">
                            <h5>Top 5 engaños de la DeepWeb</h5>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                iste aliquid. Sed id nihil magni, sint vero provident esse numquam
                                perferendis ducimus dicta adipisci iusto nam temporibus modi animi
                                laboriosam?
                            </p>
                        </a>
                        <!-- News block -->
                    </div>
                    <!-- News block -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/018.webp" class="img-fluid"
                                alt="Golden Gate National Recreation Area" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" class="text-warning">
                                    <i class="fas fa-code"></i>
                                    News
                                </a>
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" class="text-dark">
                            <h5>Feria del Libro 2020</h5>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit,
                                iste aliquid. Sed id nihil magni, sint vero provident esse numquam
                                perferendis ducimus dicta adipisci iusto nam temporibus modi animi
                                laboriosam?
                            </p>
                        </a>
                    </div>

        </section>
        <!--Section: Content-->
    </div>
@stop
