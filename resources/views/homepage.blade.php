@extends('layouts.afyaa-header') @section('content')
    <div class="container">
        <div class="row mt-3 justify-content-center text-center">
            <div class="col">
                <h1 class="top-header">Sihat Nikmat Terindah</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col m-4 p-4">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded" src="https://www.youtube.com/embed/qh2tx5ItLjU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col p-4 rounded-3 bg-light bg-gradient shadow-lg">
                <p class="ads"">
                    " Memperkenalkan AFYAA - rangkaian produk kesihatan untuk
                    memastikan anda mengikuti gaya hidup sihat. Bersama kita memberi kekuatan untuk menjalani kehidupan yang
                    sepatutnya. Badan yang sihat, fikiran yang sihat untuk orang tersayang, untuk generasi kita yang akan
                    datang" ~ Dato' Dr. Sheikh Muszaphar, Founder AFYAA </p>

                <p class="ads">
                    "AFYAA Hayyiba hanya menggunakan bahan-bahan semulajadi terdiri
                    daripada tumbuh-tumbuhan dan bahan sunnah yang digalakkan.
                    InsyaAllah produk AFYAA Hayyiba ini bukan sahaja dari segi bahan
                    ramuannya halal tapi dari segi penyediaan yang dijamin
                    berkualiti dan bersih " ~ Prof Dr Abdul Malik Musharat, Gov.
                    Liason Halal Consultant AFYAA
                </p>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center">
            <div class="col p-4 rounded-3">
                <h3 class="subtitle">AWESOME PRODUCTS</h3>
                <h1 class="title">Featured Products</h1>
                <div class="mx-auto col-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repudiandae nostrum natus excepturi fuga ullam accusantium vel
                    ut eveniet aut consequatur laboriosam ipsam.
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-3 justify-content-center text-center">
            <div class="col">
                <div class="card mb-3 rounded-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/AfyaaHayyibaMain.jpg" class="img-fluid rounded-start" alt="AfyaaHayyibaMain" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body card-margin">
                                <h1 class="card-title">Afyaa Hayyiba</h1>
                                <p class="card-text card-content">
                                    Diformulasi dengan bahan utama -
                                    Habbatus sauda, sayur peria dan 6 bahan lain
                                    untuk mengoptimumkan kesihatan anda!
                                </p>
                                <a class="btn btn-success" href="/hayyiba">
                                   Ketahui lanjut
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-3 justify-content-center text-center">
            <div class="col">
                <div class="card mb-3 rounded-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/AfyaaRynduMain.jpg" alt="AfyaaRynduMain" class="img-fluid rounded-start" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body card-margin">
                                <h1 class="card-title">Afyaa Ryndu</h1>
                                <p class="card-text card-content">
                                    Diperkaya dengan ramuan premium sebagai revolusi
                                    untuk dapatkan kulit sihat dan menawan
                                </p>
                                <a class="btn btn-success" href="/ryndu">
                                    Ketahui lanjut
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center">
            <div class="col p-4 rounded-3">
                <h3 class="subtitle">POPULAR PRODUCTS</h3>
                <h1 class="title">Our Products</h1>
                <div class="mx-auto col-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repudiandae nostrum natus excepturi fuga ullam accusantium vel
                    ut eveniet aut consequatur laboriosam ipsam.
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="img/AfyaaHayyibaMain.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h1 class="card-title">Afyaa Hayyiba</h1>
                        <h3>RM150 - 270</h3>
                        <p class="card-text">✅ 1 kotak mengandungi 15 sachets</p>
                        <p class="card-text">✅ Amal 1 sachets sehari</p>
                        <a href="/hayyiba" class="btn btn-primary">Tempah Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="img/AfyaaRynduMain.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h1 class="card-title">Afyaa Ryndu</h1>
                        <h3>RM180 - 280</h3>
                        <p class="card-text">
                            ✅ 1 kotak mengandungi 30 tablets kunyah
                        </p>
                        <p class="card-text">✅ Amal 2 tablets sehari</p>
                        <a href="/ryndu" class="btn btn-primary">Tempah Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center rounded-3">
            <h1 class="title mb-3">Testimoni Pelanggan</h1>
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card p-1 h-100">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="img/messi.jpg" class="image-radius mt-3" alt="Team2" width="200"
                                            height="200" />
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Mohd Sabri Ab Rahim</h5>
                                            <p class="card-text"><small class="text-muted">Juru Teknik</small></p>
                                            ⭐⭐⭐⭐⭐
                                            <p class="card-text">
                                                "Selepas menggunakan produk Afyaa ini, saya dapati kesihatan saya semakin baik berbanding sebelum ini."
                                            </p>
                                            <p class="card-text"><small class="text-muted">2 Februari 2022</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card p-1 h-100">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="img/messi.jpg" class="image-radius mt-3" alt="Team2" width="200"
                                            height="200" />
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Juzeta Abdul Rahman</h5>
                                            <p class="card-text"><small class="text-muted">Suri Rumah</small></p>
                                            ⭐⭐⭐⭐⭐
                                            <p class="card-text">
                                                "Selepas menggunakan produk Afyaa ini, saya dapati kesihatan saya semakin baik berbanding sebelum ini."
                                            </p>
                                            <p class="card-text"><small class="text-muted">2 Februari 2022</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card p-1 h-100">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="img/messi.jpg" class="image-radius mt-3" alt="Team2" width="200"
                                            height="200" />
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Muhammad Akmal</h5>
                                            <p class="card-text"><small class="text-muted">Pelajar</small></p>
                                            ⭐⭐⭐⭐⭐
                                            <p class="card-text">
                                                "Selepas menggunakan produk Afyaa ini, saya dapati kesihatan saya semakin baik berbanding sebelum ini."
                                            </p>
                                            <p class="card-text"><small class="text-muted">2 Februari 2022</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">

                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center p-4 rounded-3">
            <h1 class="title mb-3">Kenali Pasukan Kami</h1>
            <div class="col-12 col-md-12 col-lg-4">
                <img src="img/messi.jpg" class="image-radius" alt="Team1" width="200" height="200" />
                <h3 class="mt-3">Khairul Nizam</h3>
                <p>Pengedar Afyaa</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="img/messi.jpg" class="image-radius" alt="Team2" width="200" height="200" />
                <h3 class="mt-3">Khairul Nizam</h3>
                <p>Pengedar Afyaa</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="img/messi.jpg" class="image-radius" alt="Team3" width="200" height="200" />
                <h3 class="mt-3">Khairul Nizam</h3>
                <p>Pengedar Afyaa</p>
            </div>
        </div>

        <div class="row mt-3 justify-content-center p-4 rounded-3">
            <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                <h3 class="title">Afyaa Terindah</h3>
                <p>
                    A-14-32 SRI PENARA, <br />
                    JALAN SRI PERMAISURI 1, <br />
                    BANDAR SRI PERMAISURI, <br />
                    56000 KUALA LUMPUR.
                </p>

                <p>
                    Copyright &copy; 2022 <br />
                    Khairul Nizam Bin Basri | 014-366-9938
                </p>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-4 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">Home</li>
                    <li class="list-group-item">Hayyiba</li>
                    <li class="list-group-item">Ryndu</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="https://img.icons8.com/material-outlined/24/000000/facebook-new.png" />
                        Facebook
                    </li>
                    <li class="list-group-item">
                        <img src="https://img.icons8.com/material-outlined/24/000000/twitter.png" />
                        Twitter
                    </li>
                    <li class="list-group-item">
                        <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" />
                        Instagram
                    </li>
                    <li class="list-group-item">
                        <img src="https://img.icons8.com/ios/24/000000/email-open.png" />
                        nizam.svo@yahoo.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
