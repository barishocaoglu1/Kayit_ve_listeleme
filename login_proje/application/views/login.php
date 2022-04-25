<!DOCTYPE html>
<html lang="en">

<!--Head includes START -->
<?php  $this->load->view("includes/head.php"); ?>
<!--Head includes END -->

<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-12">
                <div class="card shadow-sm mt-5" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Kayıt Formu</h3>
                        <form action="<?php echo base_url("logincont/insert")?>" method="POST"/>
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="firstName" class="form-control form-control-lg" name="name"/>
                                        <label class="form-label" for="firstName">Adınız</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="lastName" class="form-control form-control-lg" name="surname"/>
                                        <label class="form-label" for="lastName">Soyadınız</label>
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"/>
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="password" id="sifre" class="form-control form-control-lg" name="sifre"/>
                                        <label class="form-label" for="sifre">Şifre</label>
                                    </div>

                                </div>


                            </div>

                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Kayıt Ol" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>













    <!-- footer includes START -->
    <?php  $this->load->view("includes/footer.php"); ?>
    <!-- footer includes END -->
</body>

</html>