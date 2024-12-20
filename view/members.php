<?php $this->view('head.php', null, CoreView::CORE); ?>
<div class="container p-3 flex-fill d-flex flex-column">
  <div class="row flex-fill d-flex flex-column">
    <div class="col-auto mt-3 border-bottom pb-4">
    <div class="d-flex flex-row align-items-end">
      <img src="<?php echo $this->asset('images/mgm.png'); ?>" style="width:180px;" class="me-4" alt="MGM: Media, Game, and Mobile Laboratory" />
      <?php $this->view('nav.php'); ?>
    </div>
    </div>

    <div><?php echo $content->content; ?></div>

    <!-- <div class="display-5 pb-3 mt-3 text-primary">Lab Members</div>
    <h3 class="h4">Aryo Pinandito, ST, M.MT, Ph.D.<br><small class="text-secondary">Head of Laboratory</small></h3>
    <p>
      He have strong knowledge and expertise in web and mobile application development especially in Unix/Linux platform using Apache-PHP-MySQL and Google Android platform. He also fluent in most industrial standard programming language such as Java, Javascript, C, and C#. He have been experiencing in several mobile and web application development. Hence, strong interest in mobile and web application development and/or its implementation among other fields.
    </p>
    <p>Mobile Technology, Educational Technology</p>
    <h3 class="h4">Agi Putra Kharisma, ST, MT<br><small class="text-secondary">Vice Head of Laboratory</small></h3>
    <p>Mobile Technology, Integration System</p>
    <h3 class="h4">Dr.Eng. Ir. Herman Tolle, ST, MT<br><small class="text-secondary">Head of MGM Research Group</small></h3>
    <p>UI/UX, Mobile Technology</p>

    <h3 class="h4">Buce Trias Hanggara, S.Kom., M.Kom.</h3>
    <p>Integration System/Technology </p>
    <h3 class="h4">Eriq Muhammad Adams Jonemaro, S.T., M.Kom.</h3>
    <p>Game AI, Game Technology </p>
    <h3 class="h4">Fais Al Huda, S.Kom., M.Kom.</h3>
    <p>Mobile Technology</p>
    <h3 class="h4">Ir. Komang Candra Brata, S.Kom., M.T., M.Sc.</h3>
    <p>UI/UX, Mobile Technology</p>
    <h3 class="h4">Ir. Lutfi Fanani, S.Kom., M.T., M.Sc.</h3>
    <p>UI/UX, Education Technology, e-Health</p>
    <h3 class="h4">Muhammad Aminul Akbar, S.Kom., M.T</h3>
    <p>Game Technology, Educational Technology</p>
    <h3 class="h4">Ratih Kartika Dewi, S.T., M.Kom.</h3>
    <p>Multimedia System</p>
    <h3 class="h4">Ir. Widhy Hayuhardhika Nugraha Putra, S.Kom., M.Kom.</h3>
    <p>Integration System/Technology </p>


    <h2 class="display-6 text-primary mt-5">Research Group Members</h2>

    <p>Adhitya Bhawiyuga, S.Kom., M.Sc.; Agi Putra Kharisma, S.T., M.T.; Andi Reza Perdanakusuma, S.Kom., M.MT.; Aryo Pinandito, S.T., M.MT, Ph.D; Barlian Henryranu Prasetio, S.T., M.T., Ph.D.; Bayu Rahayudi, S.T., M.M.; Buce Trias Hanggara, S.Kom., M.Kom.; Candra Dewi, S.Kom, M.Sc.; Eriq Muhammad Adams Jonemaro, S.T., M.Kom.; Fais Al Huda, S.Kom., M.Kom.; Hanifah Muslimah Az-Zahra, S.Sn., M.Ds.; Dr.Eng. Ir. Herman Tolle, S.T., M.T.; Imam Cholissodin, S.Si., M.Kom.; Ir. Indriati, S.T., M.Kom.; Ismiarta Aknuranda, S.T., M.Sc., Ph.D.; Ir. Komang Candra Brata, S.Kom., M.T., M.Sc.; Ir. Lutfi Fanani, S.Kom., M.T., M.Sc.; Mahardeka Tri Ananta, S.Kom., M.T., M.Sc.; Mochamad Chandra Saputra, S.Kom., M.Eng., M.T., Ph.D; Mochammad Hannats Hanafi Ichsan, S.ST., M.T.; Muhammad Aminul Akbar, S.Kom., M.T; Nur Hazbiy Shaffan, S.T., M.T.; Putra Pandu Adikara, S.Kom., M.Kom.; Ratih Kartika Dewi, S.T., M.Kom.; Retno Indah Rokhmawati, S.Pd., M.Pd.; Tibyani, S.T., M.T; Ir. Tri Afirianto, S.T., M.T.; Wibisono Sukmo Wardhono, S.T., M.T.; Ir. Widhy Hayuhardhika Nugraha Putra, S.Kom., M.Kom.</p>

    <h2 class="display-6 text-primary mt-5">Master's Students</h2>

    <p>Diana, Shandra Elvyra Sudarsono Putri, Multohadi Hamzaturrazak, Muhammad Yasir Anshari Haq, Rizky Bagus Paramadani, Ardiyan Nur Pratama, Neyla Nuril Fauziyah</p>

    <h2 class="display-6 text-primary mt-5">Undergraduate Students</h2>

    <h2 class="display-6 text-primary mt-5 mb-3">Former Members and Current Affiliations</h2>

    <h3 class="h4">Mahardeka Tri Ananta, S.Kom., M.T., M.Sc. <small class="text-secondary">Software Engineering Laboratory</small></h3>
    <h3 class="h4">Wibisono Sukmo Wardhono, S.T., M.T. <small class="text-secondary">Learning Technology Laboratory</small></h3>
    <h3 class="h4">Hanifah Muslimah Az-Zahra, S.Sn., M.Ds. <small class="text-secondary">Learning Technology Laboratory</small></h3>
    <h3 class="h4">Ir. Tri Afirianto, S.T., M.T. <small class="text-secondary">Learning Technology Laboratory</small></h3>

    <div class="fs-4">Master's Students</div>
    <div class="fs-4">Undergraduate Students</div>
    <div class="fs-4">Fellow Members</div> -->

  </div>
  <?php echo $this->view('footer.php'); ?>
</div>

<?php $this->view('foot.php', null, CoreView::CORE);
