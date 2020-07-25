

<?php $__env->startSection('title', 'Experience'); ?>
<style>
    .header {
        border-radius: 20px;
    }

</style>
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="header mt-4 pl-3 pt-3 pb-3 pr-3 bg-light shadow">
        <h1>Experience</h1>
        <div class="content">
            <p>Experience saya di programming adalah saya pernah Kunjungan Industri ke PT. Spasi, belajar membuat
                aplikasi
                android
                di kelas X, mengikuti seminar Developer Student Club di Universitas Indonesia dan lulus kelas Belajar
                Dasar Pemrograman Web di
                <a href="https://dicoding.com">Dicoding</a> dan pemahaman saya kira-kira seperti progress bar di bawah
                ini.
            </p>
            <div class="card-group">
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="<?php echo e(('img/sp.jpg')); ?>" alt="Card image cap"
                        style="width: 21rem;">
                    <div class="card-body text-center">
                        <h4>Kunjungan Industri</h4>
                        <p class="card-text">
                            Kunjungan industri ke PT. Spasi Indonesia
                        </p>
                    </div>
                </div>
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="<?php echo e(('img/an.jpeg')); ?>" alt="Card image cap"
                        style="width: 21rem;">
                    <div class="card-body text-center">
                        <h4>Membuat Aplikasi Android</h4>
                        <p class="card-text">
                            Membuat aplikasi android di kelas sepuluh bersama kak Ian.
                        </p>
                    </div>
                </div>
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="<?php echo e(('img/sem.jpeg')); ?>" alt="Card image cap"
                        style="width: 18rem;">
                    <div class="card-body text-center">
                        <h4>Seminar</h4>
                        <p class="card-text">
                            Seminar Developer Student Club di Universitas Indonesia
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="<?php echo e(('img/s.png')); ?>" alt="Card image cap"
                        style="width: 18rem;">
                    <div class="card-body text-center">
                        <h4>Sertifikat</h4>
                        <p class="card-text">
                            Sertifikat kelulusan Belajar Dasar Pemrograman Web di <a
                                href="https://dicoding.com">Dicoding</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaLaravel\resources\views/experience.blade.php ENDPATH**/ ?>