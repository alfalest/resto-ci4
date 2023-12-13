<?php
// Mendeteksi User-Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// Menentukan apakah pengguna menggunakan perangkat seluler (misalnya, smartphone atau tablet)
$isMobile = (strpos($userAgent, 'Mobile') !== false || strpos($userAgent, 'Tablet') !== false);
?>

<!-- NAVBAR Mobile-->
<?php if ($isMobile) : ?>
    <div id="mobileContent" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <nav class="navbar px-md-1 mx-md-1 fixed-top rounded-bottom-4 shadow-sm" style="background-color : #ffff;">
                    <div class="container-fluid mx-1">
                        <div class="col-9 col-md-10">
                            <form class="border-0 mt-3" role="search" action="<?= base_url(); ?>" method="get">
                                <div class="input-group mb-3">
                                    <button type="submit" class="input-group-text border-0 rounded-3 bg-danger shadow-sm mx-0"><i class="text-white bi bi-search"></i></button>
                                    <input type="text" name="produk" class="mx-2 form-control border-1 border-danger rounded-3" placeholder="Cari Menu..." aria-label="search" aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <style>
        /* CSS untuk mengatur panel dropdown */
        .dropdown-menu {
            padding: 0;
            /* Menghapus padding bawaan */
            min-width: auto;
            /* Menghapus lebar minimum */

        }

        /* CSS untuk mengatur tampilan mobile */
        @media (max-width: 992px) {
            .dropdown-menu {
                right: 0;
                /* Mengatur posisi menu ke kanan */
                left: auto;
                top: 100%;
                /* Menempatkan menu di bawah ikon */
                border: none;
                /* Menghapus border */
                box-shadow: none;
                /* Menghapus shadow */
                position: absolute;
            }
        }

        @media (max-width: 280px) {

            .input-group>.form-control,
            .input-group>.form-floating,
            .input-group>.form-select {
                font-size: 12px;
                position: relative;
                flex: 1 1 auto;
                width: 1%;
                min-width: 0
            }

            .input-group {
                right: 5px;
                width: 200px;
            }

            /* Mengurangi ukuran dan margin pada ikon bahasa */
            .flag-icon {
                width: 40px;
                /* Atur ukuran ikon bahasa sesuai kebutuhan Anda */
            }

            .dropdown-toggle {
                padding: 0.1rem 0.5rem;
                /* Reduce padding for smaller screens */
            }

            .btn-wishlist {

                padding: 3px;
                /* Atur padding tombol sesuai kebutuhan Anda */
                width: 25px;
                /* Atur lebar tombol sesuai kebutuhan Anda */
                height: 25px;
                /* Atur tinggi tombol sesuai kebutuhan Anda */
                text-align: center;
                /* Tengahkan teks di dalam tombol */
            }

            /* Untuk mengurangkan ukuran ikon hati (wishlist) */
            .heart-icon {
                font-size: 16px;
                /* Atur ukuran ikon sesuai kebutuhan Anda */
            }

        }
    </style>
<?php endif; ?>