@extends('welcome')

@section('content')
    <section id="nosotros" class="container">
        <h2 class="showcase-left">Nosotros</h2>
        <div class="row">
            <div class="col-md-4">

                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

            </div>
            <div class="col-md-4 ">
                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit eveniet laborum sunt. Animi libero provident optio aspernatur minus sed vitae enim incidunt laudantium, unde veritatis accusamus modi tempora. Velit, delectus?</p>

            </div>
            <div class="col-md-4">
                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit eveniet laborum sunt. Animi libero provident optio aspernatur minus sed vitae enim incidunt laudantium, unde veritatis accusamus modi tempora. Velit, delectus?</p>
            </div>
        </div>

    </section>
    <section class="features">
        <div class="container">
            <h1 class="showcase-left">Nuestra mision</h1>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod, nostrum delectus quam natus quae nihil esse minima eveniet veritatis quibusdam nulla nobis ad tenetur soluta? Dolorem quia ad quo.</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum provident reiciendis amet saepe excepturi, enim natus pariatur architecto dignissimos consectetur eaque inventore beatae ratione totam? Ipsam ex porro libero. Voluptas!</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="equipo">
        <div class="container">
            <h1 class="text-center scrollBottom">Nuestro Equipo</h1>
            <div class="row pt-3">
                <div class="col-md-4 col-sm-4">
                    <span class="icon-equipo"><i class="fab fa-facebook-square"></i></span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, non voluptatum magnam, cum necessitatibus adipisci reprehenderit possimus hic debitis rem laudantium. Aut voluptates illum perferendis laboriosam omnis? Sint, ut perferendis!</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <span class="icon-equipo"><i class="fab fa-facebook-square"></i></span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum maxime ea ratione ut! Minima magnam pariatur, provident libero deserunt assumenda debitis rem non omnis. Voluptates distinctio nobis repellendus omnis?</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <span class="icon-equipo text-default"><i class="fab fa-twitter"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus distinctio labore optio, atque tenetur repellat rem sapiente, ut molestiae in debitis esse, blanditiis vel architecto quas harum incidunt sint aperiam!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <br><br>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-3">
                        <a href="/post/{{ $post->slug }}">
                            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                            <span>{{ $post->title }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    <section class="features">
        <div class="container">
            <h1>
                contactanos
            </h1>
            <hr>
            <form method="POST" action="https://formspree.io/YOUREMAILHERE">
                <div class="form-group">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-lg btn-outline-danger">Submit</button>
            </form>
        </div>
    </section>
@endsection