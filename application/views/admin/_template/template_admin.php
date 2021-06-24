<!DOCTYPE html>
<html lang="en">

<?php echo @$header; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo @$sidebar; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-white">

            <!-- Main Content -->
            <div id="content">

                <?php echo @$topbar; ?>

                <?php echo @$content; ?>

            </div>
            <!-- End of Main Content -->

            <?php echo @$footer; ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php echo @$modal; ?>

    <?php echo @$js; ?>

</body>

</html>