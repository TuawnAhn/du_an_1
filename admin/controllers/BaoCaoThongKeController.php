<?php
class BaoCaoThongKeController {
    public $modelThongKe;
    public function __construct()
    {
        $this->modelThongKe = new Thongke();
  
    }
    
    public function home()
    {
        // Lấy doanh thu hoàn thành từ model
      $revenue = $this->modelThongKe->getRevenueByStatus(); // 18 là trạng thái 'Đã hoàn thành'
      $totalDH = $this->modelThongKe->getTotalDh(); // 18 là trạng thái 'Đã hoàn thành'
      $totalUser = $this->modelThongKe->getTotalUser();
      $loiNhuan = $this->modelThongKe->getLoiNhuan();


      $monthlyProfits = $this->modelThongKe->getMoth();

      $bieudoShow = array_column($monthlyProfits,'monthly_profit');
      $bieudoArray = json_encode($bieudoShow);
      $bieudoMoth = array_column($monthlyProfits,'month');
      $bieudoArrayMoth = json_encode($bieudoMoth);


      $totalSp = $this->modelThongKe->totalSp();

      $totalSp2 = array_column($totalSp,'ten_danh_muc');
      $Dmsp1 = json_encode($totalSp2);

      $totalSp3 = array_column($totalSp,'totalSp');
      $Dmsp2 = json_encode($totalSp3);


//  var_dump($Dmsp1);
//  die();



      $growthPercentages = [];
for ($i = 1; $i < count($monthlyProfits); $i++) {
    $currentProfit = $monthlyProfits[$i]['monthly_profit'];
    $previousProfit = $monthlyProfits[$i - 1]['monthly_profit'];


    // Tính phần trăm tăng trưởng
    $growthPercentage = ($previousProfit != 0) ? (($currentProfit - $previousProfit) / $previousProfit) * 100 : 0;

    $growthPercentages[] = [
        'year' => $monthlyProfits[$i]['year'],
        'month' => $monthlyProfits[$i]['month'],
        'growth_percentage' => $growthPercentage
    ];

}

        require_once './views/home.php';
    }
   


}
