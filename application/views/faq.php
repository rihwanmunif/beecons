<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
      <p>
        <center>Kumpulan pertanyaan yang bisa Anda akses untuk mengenal kami<center>
      </p>
    </div>


    <ul class="faq-list accordion" data-aos="fade-up">
      <?php
      foreach ($tbl_faq as $faq) : ?>
        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq<?php echo $faq['id_faq']; ?>" class="collapsed"><?php echo $faq['judul']; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq<?php echo $faq['id_faq']; ?>" class="collapse" data-bs-parent=".faq-list">
            <p>
              <?php echo $faq['deskripsi']; ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</section><!-- End Frequently Asked Questions Section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>