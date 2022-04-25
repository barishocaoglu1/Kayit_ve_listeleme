<!DOCTYPE html>
<html lang="en">

<!--Head includes START -->
<?php  $this->load->view("includes/head.php"); ?>
<!--Head includes END -->

<body>
    <div class="container">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-12">
                        <div class="card shadow-sm mt-5" style="border-radius: 15px;">
                            <div class="row">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Kayıt Listesi</h3>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Adı</th>
                                            <th scope="col">Soyad</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Şifre</th>
                                            <th scope="col">Kayıt Tarihi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($items as $item) {
					            ?>
                                        <tr>
                                            <th scope="row"><?php echo $item->id; ?></th>
                                            <td><?php echo $item->name; ?></td>
                                            <td><?php echo $item->surname; ?></td>
                                            <td><?php echo $item->email; ?></td>
                                            <td><?php echo $item->sifre; ?></td>
                                            <td><?php echo $item->createdAt; ?></td>
                                        </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>





    <!-- footer includes START -->
    <?php  $this->load->view("includes/footer.php"); ?>
    <!-- footer includes END -->
</body>

</html>