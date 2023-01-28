<?php
$json_data = file_get_contents("CV.json");
$obj = json_decode($json_data);
$languages = $obj->keahlian->bahasa;
$frameworks = $obj->keahlian->framework;
$certifications = $obj->keahlian->sertifikasi;
$dicodings = $certifications[0]->dicoding;
$bwa = $certifications[1]->bwa;
$experiences = $obj->pengalaman;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BootstrapCSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Now ui kit Version -->
    <link href="css/main.css" rel="stylesheet">
</head>

<body id="top">

    <!-- Page Content -->
    <div class="page-content">
        <div>

            <!-- Profile Page -->
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        <div class="page-header-image" style="background-image: url('images/cc-bg.jpg');">
                        </div>
                        <div class="container">
                            <div class="content-center">
                                <div class="cc-profile-image"><a href="#"><img src="images/faiz.jpg" alt="Image" /></a></div>
                                <div class="h2 title"><?php echo $obj->nama ?></div>
                                <p class="category text-white">Full-stack Web and MobileApp Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Basic Info -->
            <div class="section" id="about">
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Saya</div>
                                    <p>Hello. Saya Mahasiswa program studi Sistem Informasi, memiliki kemampuan Full-stack Web Development
                                        dengan pengalaman 2 tahun. Saya memiliki keingingan untuk terus belajar dan dapat bekerja dibawah
                                        tekanan, serta memiliki sikap baik dalamberorganisasi.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Information</div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                        <div class="col-sm-8"><?php echo $obj->email ?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Telpon:</strong></div>
                                        <div class="col-sm-8"><?php echo $obj->telpon ?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Alamat:</strong></div>
                                        <div class="col-sm-8"><?php echo $obj->alamat ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skill Info -->
            <div class="section" id="skill">
                <div class="container">
                    <div class="h4 text-center mb-4 title">Professional Skills</div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="h4 mt-0 title">Bahasa Pemograman</div>
                                    <?php foreach ($languages as $language) {
                                        echo '<div class="progress-container progress-primary"><span class="progress-badge">' . $language . '</span>
                                    </div>';
                                    } ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="h4 mt-0 title">Framework</div>
                                    <?php foreach ($frameworks as $framework) {
                                        echo '<div class="progress-container progress-primary"><span class="progress-badge">' . $framework . '</span>
                                    </div>';
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="section">
                <div class="container cc-education">
                    <div class="h4 text-center mb-4 title">Education</div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary">
                                <div class="card-body cc-education-header">
                                    <div class="h5">Dicoding</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <?php foreach ($dicodings as $dicoding) {
                                        echo '<p class="category">' . $dicoding . '<p>';
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary">
                                <div class="card-body cc-education-header">
                                    <div class="h5">Build With Angga</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="category"><?php echo $bwa ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div class="section">
                <div class="container cc-education">
                    <div class="h4 text-center mb-4 title">Experience</div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary">
                                <div class="card-body cc-education-header">
                                    <p>2018 - Now</p>
                                    <div class="h5">Freelance</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <?php foreach ($experiences as $experience) {
                                        echo '<p class="category">' . $experience . '<p>';
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
