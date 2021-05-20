<?php
    function consoleLog($msg) {
        echo '<script>console.log(" '.$msg.' ")</script>';
    }

    function phpAlertRedirect($msg, $loc) {
        echo "<script type='text/javascript'>alert('$msg');
        window.location='$loc';
        </script>";
    }

    function phpAlert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    function convertToDiscount($disc) {
        $to100 = $disc * 100;
        $discount = 100 - $to100;
        return $discount;
    }

    function convertSize($s35, $s36, $s37, $s38, $s39, $s40, $s41, $s42, $s43, $s44, $s45)  {
        $returnValue = '';
        if($s35 == 1)
            $returnValue .= '(35)';
        if($s36 == 1)
            $returnValue .= '(36)';
        if($s37 == 1)
            $returnValue .= '(37)';
        if($s38 == 1)
            $returnValue .= '(38)';
        if($s39 == 1)
            $returnValue .= '(39)';
        if($s40 == 1)
            $returnValue .= '(40)';
        if($s41 == 1)
            $returnValue .= '(41)';
        if($s42 == 1)
            $returnValue .= '(42)';
        if($s43 == 1)
            $returnValue .= '(43)';
        if($s44 == 1)
            $returnValue .= '(44)';
        if($s45 == 1)
            $returnValue .= '(45)';
        return $returnValue;
    }
?>