<?php
require_once '../model/model.php';

class DashboardController
{
    public function displayDashboard()
    {
        $hakAksesModel = new HakAkses();
        $barangModel = new Barang();
        $pelangganModel = new Pelanggan;

        $akses = $hakAksesModel->getAllAkses();
        $barang = $barangModel->getAllBarang();
        $pelanggan =  $pelanggan->getAllPelanggan();
        require_once '../view/view.php';
    }
}

$dashboardController = new DashboardController();
$dashboardController->displayDashboard();
?>
