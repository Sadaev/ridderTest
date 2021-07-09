<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @livewireStyles
</head>
<body>
<svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
    <symbol id="LOGO" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
        <g>
            <g>
                <g>
                    <circle cx="256" cy="256" fill="#00ddc1" r="256"/>
                </g>
            </g>
            <path d="m93.743 404.327 100.02 100.02c84.343 21.052 177.312-1.382 243.256-67.327 55.723-55.723 80.371-130.741 73.977-203.547l-115.88-115.882z" fill="#00baa0"/>
            <g>
                <g>
                    <path d="m122.028 404.327h-28.285l64.301-64.301 14.142 14.142z" fill="#eef4ff"/>
                </g>
                <g>
                    <path d="m122.028 404.327h-14.142l57.229-57.23 7.071 7.071z" fill="#d6e9f8"/>
                </g>
            </g>
            <g>
                <path d="m208.07 137.643h124v208.999h-124z" fill="#eef4ff" transform="matrix(.707 .707 -.707 .707 250.322 -120.046)"/>
                <path d="m261.417 159.74h61.5v208.999h-61.5z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 272.419 -129.199)"/>
            </g>
            <g>
                <path d="m178.376 201.608h172.457v92h-172.457z" fill="#d6e9f8" transform="matrix(-.707 .707 -.707 -.707 626.793 235.59)"/>
                <path d="m194.816 241.298h172.457v45.5h-172.457z" fill="#b2d7f3" transform="matrix(-.707 .707 -.707 -.707 666.483 252.03)"/>
            </g>
            <g>
                <path d="m146.592 321.62h44v44h-44z" fill="#7a3eb4" transform="matrix(.707 .707 -.707 .707 292.356 -18.569)"/>
                <path d="m165.37 329.398h22v44h-22z" fill="#613393" transform="matrix(.707 .707 -.707 .707 300.134 -21.79)"/>
            </g>
            <g>
                <path d="m198.048 353.926-48.714-48.715 3.003-33.017 7.454-7.454 63.722 63.721z" fill="#eef4ff"/>
                <path d="m207.007 362.884-28.486-28.486 25.464-25.464 36.416 36.416-.383 14.525z" fill="#d6e9f8"/>
            </g>
            <g>
                <path d="m186.648 247.027h65.074v92h-65.074z" fill="#ff6379" transform="matrix(.707 -.707 .707 .707 -143.004 240.813)"/>
                <path d="m203.088 286.717h65.074v45.5h-65.074z" fill="#ff415b" transform="matrix(.707 -.707 .707 .707 -149.814 257.253)"/>
            </g><g><path d="m201.778 249.534h56.27v15h-56.27z" fill="#b2d7f3" transform="matrix(.707 .707 -.707 .707 249.091 -87.289)"/>
                <path d="m236.236 278.607h45.5v15h-45.5z" fill="#8bbbff" transform="matrix(.707 .707 -.707 .707 278.163 -99.332)"/>
            </g>
            <g>
                <path d="m213.739 187.123h196.7v26h-196.7z" fill="#b2d7f3" transform="matrix(.707 -.707 .707 .707 -50.099 279.295)"/>
                <path d="m218.512 198.646h196.7v12.5h-196.7z" fill="#8bbbff" transform="matrix(.707 -.707 .707 .707 -52.076 284.068)"/>
            </g>
            <g>
                <path d="m320.14 112.072h124v36.001h-124z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 203.901 -232.117)"/>
                <path d="m373.487 134.169h61.5v36.001h-61.5z" fill="#b2d7f3" transform="matrix(.707 .707 -.707 .707 225.998 -241.27)"/>
            </g>
            <g>
                <path d="m281.776 142.699h62.5v26.001h-62.5z" fill="#eef4ff" transform="matrix(.707 .707 -.707 .707 201.779 -175.74)"/>
                <path d="m326.117 186.539h61.5v26.001h-61.5z" fill="#d6e9f8" transform="matrix(.707 .707 -.707 .707 245.62 -193.899)"/>
            </g>
        </g>
    </symbol>
    <symbol id="instagram" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
        <linearGradient id="SVGID_1_" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)" gradientUnits="userSpaceOnUse" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"><stop offset="0" stop-color="#fd5"/>
            <stop offset=".5" stop-color="#ff543e"/>
            <stop offset="1" stop-color="#c837ab"/>
        </linearGradient><path d="m1.5 1.633c-1.886 1.959-1.5 4.04-1.5 10.362 0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091-.559-.081-.671-.105-3.539-.11-10.173.005-12.403-.448-14.41 1.633z" fill="url(#SVGID_1_)"/>
        <path d="m11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471c-.587 0-1.063.476-1.063 1.063s.476 1.063 1.063 1.063 1.063-.476 1.063-1.063-.476-1.063-1.063-1.063zm-4.73 1.243c-2.513 0-4.55 2.038-4.55 4.551s2.037 4.55 4.55 4.55 4.549-2.037 4.549-4.55-2.036-4.551-4.549-4.551zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z" fill="#fff"/>
    </symbol>
    <symbol id="vk" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
            <g>
                <g>
                    <circle id="XMLID_11_" style="fill:#4D76A1;" cx="56.098" cy="56.098" r="56.098"/>
                </g>
                <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878
                    c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235
                    c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463
                    c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069
                    c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297
                    c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514
                    c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644
                    c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446
                    c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069
                    c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993
                    C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/>
            </g>
        </symbol>
    <symbol id="twitter" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#03A9F4;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                C480.224,136.96,497.728,118.496,512,97.248z"/>
        </symbol>
</svg>
<main class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <svg class="bi me-2" width="40" height="40"><use xlink:href="#LOGO"/></svg>
                    <span class="fs-4">VACCINATION</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="#inform" class="nav-link active" aria-current="page">Информация о вакцине</a></li>
                        <li class="nav-item"><a href="#issue" class="nav-link">Вопрос-Ответ</a></li>
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Админка</a></li>
                            @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Вход</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <p class="lead" style="text-align: left;">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum tenetur repellat iusto facilis obcaecati non eos alias quibusdam commodi culpa aspernatur, quos aut nemo itaque modi molestias vel autem tempora adipisci ex labore reprehenderit. Itaque, aliquid obcaecati, enim nostrum a aspernatur magni, totam commodi maiores ullam quos eius mollitia blanditiis!
                    </p>


                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerVaccination">

                        {{__('auth.signUpForVaccination')}}

                    </button>


                    <!-- Modal -->

                    <div class="modal fade" id="registerVaccination" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel"> {{__('auth.signUpForVaccination')}}</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <div class="modal-body">
                                    @livewire('open-form-btn')
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
                <div class="col-xs-12 col-md-8">
                    <img src="http://placehold.jp/1080x720.png" width="100%" max-height="400px" class="banner" alt="cat">
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="inform">
        <div class="container">
            <div class="titleContainer">
                <p class="h4">Информация о вакцине</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="http://placehold.jp/1080x720.png" class="banner" alt="cat">
                </div>
                <div class="col-xs-12 col-md-8">
                    <p class="lead" style="text-align: left;">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate aliquid iusto dolore corporis, repudiandae excepturi mollitia dolores aliquam corrupti fuga pariatur ducimus, assumenda nihil dolor illum? Reprehenderit numquam aut dolore repellendus nesciunt similique nostrum illo corporis excepturi. Magni recusandae veritatis cupiditate, cumque itaque delectus aut impedit repellendus pariatur eius accusamus repellat deserunt labore odit. Nesciunt aut totam tenetur? Iure expedita quia voluptas obcaecati optio cupiditate perferendis placeat mollitia quidem dolore! Quod distinctio placeat perspiciatis dolor ut facilis, cum libero iure, itaque aliquid fugiat magni nihil. Quidem beatae voluptate aspernatur quam fugit dignissimos modi commodi error consectetur. Id eveniet obcaecati voluptas ad dolor, optio at impedit doloribus, nihil omnis amet distinctio. Mollitia ex similique vero inventore facilis dolore, reiciendis sint optio ipsam magnam quae earum rem cumque nulla delectus doloremque commodi praesentium aspernatur dolor assumenda dicta unde repellat nihil expedita? Voluptatem explicabo quam, perspiciatis inventore veniam temporibus at tenetur amet aperiam.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="titleContainer">
                <p class="h4">Остаток вакцин в поликлиниках г. Риддер</p>
            </div>
            <div style="width: 70%;margin: 0 auto;">
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        Учереждение №1"
                    </div>
                    <div class="col-sm-12 col-md-8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam facilis cumque ea ab nostrum alias nobis quod esse vel, ratione harum voluptas minus possimus facere totam odit eum distinctio dolores voluptatum quos odio? Inventore alias laboriosam consequatur, ipsum minus totam ipsa voluptatem omnis eos, ullam commodi aut optio, expedita mollitia!
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        Учереждение №2"
                    </div>
                    <div class="col-sm-12 col-md-8">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus nulla cumque hic. Quaerat assumenda doloremque ad cum ratione veniam, ea, tempore repellat facilis accusamus modi. Repudiandae harum molestiae veritatis nulla eum repellat quos iste incidunt, aliquam eligendi perspiciatis accusantium nesciunt reiciendis similique. Iure molestias sit nostrum ratione dolores sint exercitationem?
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        Учереждение №3"
                    </div>
                    <div class="col-sm-12 col-md-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nam debitis, asperiores distinctio ullam deleniti est sapiente cum, pariatur eligendi maxime voluptas porro error eum consequatur assumenda, repellendus placeat obcaecati magni amet enim? Vel deleniti numquam optio, animi, perferendis accusantium minus officia aperiam reprehenderit, maiores asperiores quaerat distinctio vero veniam!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="issue">
        <div class="container">
            <div class="titleContainer">
                <p class="h4">Ответы на вопросы о вакцинации</p>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="section">
        <div class="d-flex justify-content-around">
            <div class="footerBox">
                <div class="boxTitle">
                    <p>Телефоны:</p>
                </div>
                <div class="boxContainer">
                    <div class="itemContact d-flex">
                        <p>Раб:</p>
                        <p class="contactText">8778452114544</p>
                    </div>
                    <div class="itemContact d-flex">
                        <p>Соц:</p>
                        <p class="contactText">8778452114544</p>
                    </div>
                </div>
            </div>
            <div class="footerBox">
                <div class="boxTitle">
                    <p>Социальные сети:</p>
                </div>
                <div class="boxContainer d-flex justify-content-between">
                    <div class="itemSocial">
                        <div class="socialIcon">
                            <svg class="bi me-2" width="32" height="32"><use xlink:href="#instagram"/></svg>
                        </div>
                    </div>
                    <div class="itemSocial">
                        <div class="socialIcon">
                            <svg class="bi me-2" width="32" height="32"><use xlink:href="#vk"/></svg>
                        </div>
                    </div>
                    <div class="itemSocial">
                        <div class="socialIcon">
                            <svg class="bi me-2" width="32" height="32"><use xlink:href="#twitter"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</main>
@livewireScripts

<script>
    window.addEventListener('closeModal', event => {
        $('#createSuccess').removeAttr('hidden');
        setTimeout(() => {
            $('#registerVaccination').modal('hide');
            $('#createSuccess').attr('hidden',true);
        }, 500)

    })
</script>


</body>

</html>
