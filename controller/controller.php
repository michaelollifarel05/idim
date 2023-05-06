<?php
require_once '../model/model.php';

class DashboardController
{
    public function displayDashboard()
    {
        $hakAksesModel = new HakAkses();
        $barangModel = new Barang();

        $akses = $hakAksesModel->getAllAkses();
        $barang = $barangModel->getAllBarang();

        require_once '../view.php';
    }
}

$dashboardController = new DashboardController();
$dashboardController->displayDashboard();
?>
