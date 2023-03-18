<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Azea - Admin Panel HTML template" name="description">
    <meta content="Spruko Private Limited" name="author">
    <meta name="keywords" content="admin, admin template, dashboard, admin dashboard, responsive, bootstrap, bootstrap 5, admin theme, admin themes, bootstrap admin template, scss, ui, crm, modern, flat">

    <!-- Title -->
    <title>Prisma Admin</title>

    <!--Favicon -->
    <link rel="icon" href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/images/brand/favicon.ico" type="image/x-icon"/>

    <!--Bootstrap css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/css/style.css" rel="stylesheet" />
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/css/dark.css" rel="stylesheet" />
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/css/animated.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/css/icons.css" rel="stylesheet" />

    <!-- Data table css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css" rel="stylesheet" />

    <!-- Simplebar css -->
    <link rel="stylesheet" href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/simplebar/css/simplebar.css">

    <!-- INTERNAL Morris Charts css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/morris/morris.css" rel="stylesheet" />

    <!-- INTERNAL Select2 css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- Data table css -->
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/css/responsive.bootstrap4.min.css" rel="stylesheet" />

    <!-- Color Skin css -->
    <link id="theme" href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/colors/color1.css" rel="stylesheet" type="text/css"/>

</head>

<body class="app">

<!---Global-loader-->
<div id="global-loader" >
    <img src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/images/svgs/loader.svg" alt="loader">
</div>
<!--- End Global-loader-->

<!-- Page -->
<div class="page">
    <div class="page-main">

        <?php
        require_once ROOT.'/views/navigation/main-nav.php';
        ?>

        <!-- App-Content -->
        <div class="hor-content main-content">
            <div class="container">

                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <h4 class="page-title mb-0 text-warning">Заказ #<?=$tmp['id']?></h4>
                    </div>
                </div>
                <!--End Page header-->

                <!--Row-->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Информация о клиенте</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <th class="font-weight-bold">Имя/Фамилия</th>
                                        <th class="font-weight-bold">Телефон</th>
                                        <th class="font-weight-bold">Почта</th>
                                        <th class="font-weight-bold">Способ оплаты</th>
                                        <th class="font-weight-bold" colspan="2">Город \ Поселок</th>
                                        <th class="font-weight-bold" colspan="2">Адрес доставки</th>
                                    </thead>
                                    <tbody>
                                        <td><?=$tmp['name']?></td>
                                        <td><?=$tmp['phone']?></td>
                                        <td><?=$tmp['mail']?></td>
                                        <td>
                                            <?php if ($tmp['pay_type'] == 1): ?>
                                                Наличный расчёт
                                            <?php else: ?>
                                                Банковской картой
                                            <?php endif; ?>
                                        </td>
                                        <td><?=$tmp['city']?></td>
                                        <td colspan="2"><?=$tmp['adress']?></td>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <h5>Управление заказом</h5>
                                <a href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/status/order/<?=$tmp['id']?>/0" class="btn btn-secondary">В обработке</a>
                                <a href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/status/order/<?=$tmp['id']?>/1" class="btn btn-warning">В пути</a>
                                <a href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/status/order/<?=$tmp['id']?>/2" class="btn btn-success">Выполнен</a>
                                <a href="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/status/order/<?=$tmp['id']?>/3" class="btn btn-danger">Отменен</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Информация о клиенте</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-nowrap" id="example1">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold" colspan="2">Фото</th>
                                        <th class="font-weight-bold" colspan="2">Название товара</th>
                                        <th class="font-weight-bold" colspan="2">Цена за ед.</th>
                                        <th class="font-weight-bold" colspan="2">Кол.</th>
                                        <th class="font-weight-bold" colspan="2">Сумма</th>
                                    </tr>
                                    <?php
                                    $sum = 0;
                                    foreach ($client as $value){
                                         ?>
                                            <tr class="border-bottom">
                                                <td colspan="2"><img width="150px" src="/assets/tovar/<?=$value['name_photo']?>"></td>
                                                <td colspan="2"><?=$value['model']?></td>
                                                <td colspan="2"><?=$value['price']?> / RUB</td>
                                                <td colspan="2"><?=$value['count']?></td>
                                                <td colspan="2"><?=$value['count']*$value['price']?> / RUB</td>
                                            </tr>
                                            <?php
                                            $sum += $value['price']*$value['count'];
                                    }
                                    ?>
                                    <tr>
                                        <th colspan="6" class="font-weight-bold"></th>
                                        <th colspan="2" class="font-weight-bold">Итоговая сумма</th>
                                        <th colspan="2" class="font-weight-bold">Статус заказа</th>
                                    </tr>
                                    <tr class="border-top">
                                        <td colspan="6">
                                        </td>
                                        <td colspan="2"><h2><?=$sum?> / RUB</h2></td>
                                        <td colspan="2">
                                            <?php
                                            if ($value['status'] == 0){
                                                ?>
                                                <button class="btn-lg btn-secondary">В обработке</button>
                                                <?php
                                            }elseif ($value['status'] == 1){
                                                ?>
                                                <button class="btn-lg btn-warning">В пути</button>
                                                <?php
                                            }elseif ($value['status'] == 2){
                                                ?>
                                                <button class="btn-lg btn-success">Выполнен</button>
                                                <?php
                                            }elseif ($value['status'] == 3){
                                                ?>
                                                <button class="btn-lg btn-danger">Отменен</button>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End app-content-->

    </div>
</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

<!-- Jquery js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/jquery.min.js"></script>

<!-- Bootstrap5 js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/bootstrap/popper.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Othercharts js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

<!-- Circle-progress js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/circle-progress.min.js"></script>

<!-- Jquery-rating js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Horizontal-menu js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

<!-- Sticky js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/stiky.js"></script>

<!-- P-scroll js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/p-scrollbar/p-scroll.js"></script>

<!--INTERNAL Flot Charts js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/flot/jquery.flot.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/flot/jquery.flot.pie.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/dashboard.sampledata.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/chart.flot.sampledata.js"></script>

<!-- INTERNAL Chart js -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/chart/chart.bundle.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/chart/utils.js"></script>

<!-- INTERNAL Apexchart js -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/apexcharts.js"></script>

<!--INTERNAL Moment js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/moment/moment.js"></script>

<!--INTERNAL Index js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/index1.js"></script>

<!-- INTERNAL Data tables -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/js/jquery.dataTables.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js"></script>

<!-- INTERNAL Select2 js -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/select2/select2.full.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/select2.js"></script>
<!-- INTERNAL Data tables -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/js/jquery.dataTables.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/JSZip/jszip.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/pdfmake/pdfmake.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/pdfmake/vfs_fonts.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/js/buttons.html5.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/js/buttons.print.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Buttons/js/buttons.colVis.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/datatables.js"></script>

<!-- Simplebar JS -->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/plugins/simplebar/js/simplebar.min.js"></script>

<!-- Rounded bar chart js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/rounded-barchart.js"></script>

<!-- Custom js-->
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/assets/js/custom.js"></script>
<script src="/bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdqadmin/template/js_custom/main.js"></script>

<script>

</script>

</body>
</html>