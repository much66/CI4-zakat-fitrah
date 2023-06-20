<?php

namespace App\Controllers;

use App\Models\DistribusiModel;
use App\Models\DistribusiModel1;
use App\Models\DistribusiModel2;
use App\Models\PengumpulanModel;
use \Dompdf\Dompdf;



class Distribusi extends BaseController
{
    protected $distribusiModel;
    protected $distribusiModel1;
    protected $distribusiModel2;
    protected $pengumpulanModel;

    public function __construct()
    {
        $this->distribusiModel = new DistribusiModel();
        $this->distribusiModel1 = new DistribusiModel1();
        $this->distribusiModel2 = new DistribusiModel2();
        $this->pengumpulanModel = new PengumpulanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan | Distribusi Zakat',
            'mfakir' => $this->distribusiModel->getMustahik('Fakir'),
            'sfakir' => $this->distribusiModel2->getSatuan('Fakir'),
            'jfakir' => $this->distribusiModel->getJumlahKg('Fakir'),
            'mmiskin' => $this->distribusiModel->getMustahik('Miskin'),
            'smiskin' => $this->distribusiModel2->getSatuan('Miskin'),
            'jmiskin' => $this->distribusiModel->getJumlahKg('Miskin'),
            'mmampu' => $this->distribusiModel->getMustahik('Mampu'),
            'smampu' => $this->distribusiModel2->getSatuan('Mampu'),
            'jmampu' => $this->distribusiModel->getJumlahKg('Mampu'),
            'mamilin' => $this->distribusiModel1->getMustahik('Amilin'),
            'samilin' => $this->distribusiModel2->getSatuan('Amilin'),
            'jamilin' => $this->distribusiModel1->getJumlahKg('Amilin'),
            'mmualaf' => $this->distribusiModel1->getMustahik('Mualaf'),
            'smualaf' => $this->distribusiModel2->getSatuan('Mualaf'),
            'jmualaf' => $this->distribusiModel1->getJumlahKg('Mualaf'),
            'mibnusabil' => $this->distribusiModel1->getMustahik('Ibnu Sabil'),
            'sibnusabil' => $this->distribusiModel2->getSatuan('Ibnu Sabil'),
            'jibnusabil' => $this->distribusiModel1->getJumlahKg('Ibnu Sabil'),
            'mfisabilillah' => $this->distribusiModel1->getMustahik('Fisabilillah'),
            'sfisabilillah' => $this->distribusiModel2->getSatuan('Fisabilillah'),
            'jfisabilillah' => $this->distribusiModel1->getJumlahKg('Fisabilillah'),
        ];
        return view('lap_distribusi/index', $data);
    }

    public function pdf()
    {
        $data = [
            'title' => 'Laporan | Distribusi Zakat',
            'mfakir' => $this->distribusiModel->getMustahik('Fakir'),
            'sfakir' => $this->distribusiModel2->getSatuan('Fakir'),
            'jfakir' => $this->distribusiModel->getJumlahKg('Fakir'),
            'mmiskin' => $this->distribusiModel->getMustahik('Miskin'),
            'smiskin' => $this->distribusiModel2->getSatuan('Miskin'),
            'jmiskin' => $this->distribusiModel->getJumlahKg('Miskin'),
            'mmampu' => $this->distribusiModel->getMustahik('Mampu'),
            'smampu' => $this->distribusiModel2->getSatuan('Mampu'),
            'jmampu' => $this->distribusiModel->getJumlahKg('Mampu'),
            'mamilin' => $this->distribusiModel1->getMustahik('Amilin'),
            'samilin' => $this->distribusiModel2->getSatuan('Amilin'),
            'jamilin' => $this->distribusiModel1->getJumlahKg('Amilin'),
            'mmualaf' => $this->distribusiModel1->getMustahik('Mualaf'),
            'smualaf' => $this->distribusiModel2->getSatuan('Mualaf'),
            'jmualaf' => $this->distribusiModel1->getJumlahKg('Mualaf'),
            'mibnusabil' => $this->distribusiModel1->getMustahik('Ibnu Sabil'),
            'sibnusabil' => $this->distribusiModel2->getSatuan('Ibnu Sabil'),
            'jibnusabil' => $this->distribusiModel1->getJumlahKg('Ibnu Sabil'),
            'mfisabilillah' => $this->distribusiModel1->getMustahik('Fisabilillah'),
            'sfisabilillah' => $this->distribusiModel2->getSatuan('Fisabilillah'),
            'jfisabilillah' => $this->distribusiModel1->getJumlahKg('Fisabilillah'),
            'zakatUang' => $this->pengumpulanModel->zakatUang(), //
            'zakatBeras' => $this->pengumpulanModel->zakatBeras(), //
            'totalUang' => $this->pengumpulanModel->getTotalUang(),
            'totalBeras' => $this->pengumpulanModel->getTotalBeras(),
        ];
        return view('lap_distribusi/pdf', $data);
    }

    public function printpdf()
    {
        $dompdf = new Dompdf();

        $data = [
            'title' => 'Laporan | Distribusi Zakat',
            'mfakir' => $this->distribusiModel->getMustahik('Fakir'),
            'sfakir' => $this->distribusiModel2->getSatuan('Fakir'),
            'jfakir' => $this->distribusiModel->getJumlahKg('Fakir'),
            'mmiskin' => $this->distribusiModel->getMustahik('Miskin'),
            'smiskin' => $this->distribusiModel2->getSatuan('Miskin'),
            'jmiskin' => $this->distribusiModel->getJumlahKg('Miskin'),
            'mmampu' => $this->distribusiModel->getMustahik('Mampu'),
            'smampu' => $this->distribusiModel2->getSatuan('Mampu'),
            'jmampu' => $this->distribusiModel->getJumlahKg('Mampu'),
            'mamilin' => $this->distribusiModel1->getMustahik('Amilin'),
            'samilin' => $this->distribusiModel2->getSatuan('Amilin'),
            'jamilin' => $this->distribusiModel1->getJumlahKg('Amilin'),
            'mmualaf' => $this->distribusiModel1->getMustahik('Mualaf'),
            'smualaf' => $this->distribusiModel2->getSatuan('Mualaf'),
            'jmualaf' => $this->distribusiModel1->getJumlahKg('Mualaf'),
            'mibnusabil' => $this->distribusiModel1->getMustahik('Ibnu Sabil'),
            'sibnusabil' => $this->distribusiModel2->getSatuan('Ibnu Sabil'),
            'jibnusabil' => $this->distribusiModel1->getJumlahKg('Ibnu Sabil'),
            'mfisabilillah' => $this->distribusiModel1->getMustahik('Fisabilillah'),
            'sfisabilillah' => $this->distribusiModel2->getSatuan('Fisabilillah'),
            'jfisabilillah' => $this->distribusiModel1->getJumlahKg('Fisabilillah'),
            'zakatUang' => $this->pengumpulanModel->zakatUang(), //
            'zakatBeras' => $this->pengumpulanModel->zakatBeras(), //
            'totalUang' => $this->pengumpulanModel->getTotalUang(),
            'totalBeras' => $this->pengumpulanModel->getTotalBeras(),
        ];
        $html = view('lap_distribusi/pdf', $data);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Laporan Zakat Fitrah.pdf', array("Attachment" => 0));
        exit(0);
    }
}
