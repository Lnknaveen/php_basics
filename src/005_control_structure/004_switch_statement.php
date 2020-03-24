<?php 

/* 
    switch (n) {
        case value1:
        //code to be executed if n=value1
        break;
        case value2:
        //code to be executed if n=value2
        break;
        ...
        default:
        // code to be executed if n is different from all labels
    }  
*/
    $today = 'Tue';

    switch ($today) {
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
    }

    // without break
    switch ($today) {
        case 'Mon':
          echo 'First day of the week';
          break;
        case 'Tue':
        case 'Wed':
        case 'Thu':
          echo 'Working day';
          break;
        case 'Fri':
          echo 'Friday!';
          break;
        default:
          echo 'Weekend!';
      }

?>
