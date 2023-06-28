  <?php
    $a[] = 'Ahmednagar';
    $a[] = 'Akola';
    $a[] = 'Amravati';
    $a[] = 'Aurangabad';
    $a[] = 'Bhandara';
    $a[] = 'Beed';
    $a[] = 'Buldhana';
    $a[] = 'Chandrapur';
    $a[] = 'Dhule';
    $a[] = 'Gadchiroli';
    $a[] = 'Gondia';
    $a[] = 'Hingoli';
    $a[] = 'Jalgaon';
    $a[] = 'Jalna';
    $a[] = 'Kolhapur';
    $a[] = 'Latur';
    $a[] = 'Mumbai City';
    $a[] = 'Mumbai suburban';
    $a[] = 'Nandurbar';
    $a[] = 'Nanded';
    $a[] = 'Nagpur';
    $a[] = 'Nashik';
    $a[] = 'Osmanabad';
    $a[] = 'Parbhani';
    $a[] = 'Pune';
    $a[] = 'Raigad';
    $a[] = 'Ratnagiri';
    $a[] = 'Sindhudurg';
    $a[] = 'Sangli';
    $a[] = 'Solapur';
    $a[] = 'Satara';
    $a[] = 'Thane';
    $a[] = 'Wardha';
    $a[] = 'Washim';
    $a[] = 'Yavatmal';


    //get the q paramater from the url
    $q = $_REQUEST["q"];
    $hint = "";

    //lookup all hints from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
            }
        }
    }

    // output "no suggestion " if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;

    ?>