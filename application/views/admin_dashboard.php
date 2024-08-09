<section class="content">
    <div class="container-fluid mt-4">
        <div class="jumbotron">
            <h2>Selamat Datang di Aplikasi MedisCare</h2>
            <p class="lead">
                <?php 
                // Memeriksa apakah username tersimpan dalam session dan menampilkannya
                if($this->session->userdata('username')) {
                    echo $this->session->userdata('username') . '!';
                } else {
                    echo 'Admin!';
                }
                ?>
            </p>
            <hr class="my-4">
        </div>
    </div>
</section>

<!-- <section class="content">
  <div class="container-fluid mt-4">
    <div class="jumbotron">
		<h2>Selamat Datang di Aplikasi MedisCare</h2>
      <p class="lead">Admin!</p>
      <hr class="my-4">
    </div>
  </div>

</section>

-->
