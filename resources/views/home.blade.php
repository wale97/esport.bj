<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="">
    
    <div class="">
        @include ('partials.header')
        <div class="row section1 bg-dark text-white">
            <div class="d-flex flex-column col justify-content-center align-item-center" style="padding-left:32px;padding-right:32px;">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae adipisci consectetur deleniti ullam sunt error, rerum ipsa aliquam iure voluptatem tempora, maiores accusamus quam distinctio fuga dicta inventore voluptatibus laboriosam.</p>
            </div>
                <div class="col py-4" style="padding-left:32px;padding-right:32px;"">
                    <div class="card">
                      <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                      <!--<div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>-->
                    </div>
                </div>            
            </div>
        </div>
        <div class="section2 bg-dark mb-4 pb-4">
            <div class="container text-white">
                <div class="row py-4">
                    <div class="col">
                        <div class="card">
                            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                            <!--<div class="d-flex flex-row card-body text-white bg-dark"">
                                <h5 class="card-title" style="margin-right:24px;">News</h5>
                                <p class="card-text" style="margin-right:24px;">Date</p>
                                <P>Year</P>
                            </div>-->
                        </div>    
                        <div class="d-flex flex-row text-white bg-dark mt-2" style="border:1px solid dark;">
                            <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                            <p class="card-text" style="margin-right:24px;">Date</p>
                            <p>Year</p>
                        </div>
                        <p class="class fw-bold fs-2">Titre en gros</p>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                            <!--<div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>-->
                        </div>  
                        <div class="d-flex flex-row text-white bg-dark mt-2" style="border:1px solid dark;">
                            <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                            <p class="card-text" style="margin-right:24px;">Date</p>
                            <p>Year</p>
                        </div>
                        <p class="class fw-bold fs-2">Titre en gros</p>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                            <!--<div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>-->
                        </div>  
                        <div class="d-flex flex-row text-white bg-dark mt-2" style="border:1px solid dark;">
                            <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                            <p class="card-text" style="margin-right:24px;">Date</p>
                            <p>Year</p>
                        </div>   
                        <p class="class fw-bold fs-2">Titre en gros</p>
                    </div>
                </div>   
            </div>
        </div>


        <div class="container mt-4 mb-4 section3">
            <h1 class="fw-bold py-4" style="color:red;">Dernieres Nouvelles</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
                <div class="col">
                    <div class="card">
                        <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
                        <!--<div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is alonger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>-->
                    </div>  
                    <div class="d-flex flex-row mt-2">
                        <span><h5 class="card-title" style="margin-right:24px;">Categorie</h5></span>
                        <p class="card-text" style="margin-right:24px;">Date</p>
                        <p>Year</p>
                    </div>   
                    <p class="class fw-bold fs-2">Titre en gros</p>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>