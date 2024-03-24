<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        table, th, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <script>
        
        function red(){
            let d = document.querySelector('#t1 > td');
            d.style.backgroundColor = "red";
        }

    </script>

    เดือน ตุลาคม ปี พ.ศ.2563 มี 31 วัน <br>
    วันที่ 1 ของเดือนตรงกับวัน พฤหัสบดี
    <table style="text-align: center;" id="t1">
        <div onmouseover="red();">
        <tr>
            <th>อา.</th>
            <th>จ.</th>
            <th>อ.</th>
            <th>พ.</th>
            <th>พฤ.</th>
            <th>ศ.</th>
            <th>ส.</th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
        </tr>
        <tr>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
        </tr>
        <tr>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
        </tr>

        </div>
        
    </table>

    <?php
        $d = $_POST['day'];
        $m = $_POST['month'];
        $y = $_POST['year'];
        $d_arr = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
        $m_arr = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม' );
        
        $dd = $d-1;
        $mm = $m-1;

        if($m == 4 || $m == 6 || $m == 9 || $m == 11){
            $amount = 30;
            echo "เดือน $m_arr[$mm] ปี พ.ศ. $y มี 30 วัน";
        }
        elseif($m == 2 && $y%4 == 3){
            $amount = 29;
            echo "เดือน $m_arr[$mm] ปี พ.ศ. $y มี 29 วัน";
        }
        elseif($m == 2 && $y%4 != 3){
            $amount = 28;
            echo "เดือน $m_arr[$mm] ปี พ.ศ. $y มี 28 วัน";
        }
        else{
            $amount = 31;
            echo "เดือน $m_arr[$mm] ปี พ.ศ. $y มี 31 วัน";
        }

    ?>
</body>
</html>