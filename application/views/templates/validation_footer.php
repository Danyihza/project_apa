<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<?php if ($this->session->flashdata('popup')) : ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Harap Centang Kolom Persetujuan Orang Tua',
            })
        })
    </script>
<?php endif; ?>

<script>
    inputBox = document.getElementById("inputGroupFile02"); // Mengambil elemen tempat Input gambar

    inputBox.addEventListener('change', function(input) { // Jika tempat Input Gambar berubah

        var box = document.getElementById("box"); // mengambil elemen box
        var img = input.target.files; // mengambil gambar

        var reader = new FileReader(); // memanggil pembaca file/gambar
        reader.onload = function(e) { // ketika sudah ada
            box.setAttribute('src', e.target.result); // membuat alamat gambar
        }
        reader.readAsDataURL(img[0]); // menampilkan gambar
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>


</body>

</html>