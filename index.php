        <?php
        // header của trang home không cắt
        $act = $_GET['act'] ?? "";
        $view = "";
        switch ($act) {
            case 'home':
                $view = "view/home.php";
                break;
            default:
                $view = "view/home.php";
                break;
        }
        include('view/footer.php');
        ?>