<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Christian Reyes</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- css -->
  <?php include 'style.php'; ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/php-projects/index.php">PHP Practice</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h4 class="section-title pt-5">PHP Practice Exercises</h4>
    <div class="bg-dark p-1 pt-4">
      <div class="list-group pt-2 col-12 d-flex justify-content-center">
        <li class="list-group-item border-bottom d-flex align-items-center">
          <div>
            <h6>
              Write a PHP program to print alphabet pattern 'A'.
            </h6>
            <!-- PHP -->
            <div>
              <?php
              echo "<pre>";
              for ($row = 0; $row < 10; $row++) {
                for ($col = 0; $col < 10; $col++) {

                  if ($col == 0 or $col == 9) {
                    if ($row == 0) {
                      echo " ";
                    } else {
                      echo "*";
                    }
                  } elseif ($row == 0) {
                    echo "*";
                  } elseif ($row == 5) {
                    if ($col == 1 or $col == 8) {
                      echo " ";
                    } else {
                      echo "*";
                    }
                  } else {
                    echo " ";
                  }
                }
                echo "\n";
              }
              echo "</pre>";
              ?>
            </div>
          </div>
        </li>

        <li class="list-group-item border-bottom">
          <h6>
            Write a PHP script to get JSON representation of a value from an
            array.
          </h6>
          <!-- PHP -->
          <div>
            <?php
            $fName = array('John', 'George', 'Johnny', 'Bravo', 'Kristine', 'Joy');
            $bYear = array('John' => '1999', 'George' => '1998', 'Johnny' => '1991', 'Bravo' => '1990', 'Kristine' => '1998', 'Joy' => '1997');
            echo json_encode($fName);
            echo "<br>";
            echo "<br>";
            echo json_encode($bYear);
            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP function to display JSON decode errors.
          </div>
          <div>
            <?php
            function jsonError($jsonString)
            {
              $json[] = $jsonString;
              echo "Decoding: " . $jsonString;
              json_decode($jsonString);
              echo "<br>Error: ";

              switch (json_last_error()) {
                case JSON_ERROR_NONE:
                  echo "No errors";
                  break;
                case JSON_ERROR_DEPTH:
                  echo "Maximum stack depth exceeded";
                  break;
                case JSON_ERROR_STATE_MISMATCH:
                  echo "Invalid or malformed JSON";
                  break;
                case JSON_ERROR_CTRL_CHAR:
                  echo "Control character error";
                  break;
                case JSON_ERROR_SYNTAX:
                  echo "Syntax error";
                  break;
                case JSON_ERROR_UTF8:
                  echo "Malformed UTF-8 characters";
                  break;
                default:
                  echo "Unknown error";
                  break;
              }

              echo "<br>";
              echo $json;
              echo "<br><br><br>";
            }

            ?>
            <p class="fst-italic fw-bold py-1">JSON Decode errors:</p>
            <div class="d-flex justify-content-center pb-5">

              <div>

                <?php jsonError('{"color1": "Red Color"}'); ?>

              </div>
            </div>

        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to find a missing number(s) from an array.
          </div>
          <div>
            <?php

            function findMissingNumber($inputArray)
            {

              $newArray = range(min($inputArray), max($inputArray));
              return array_diff($newArray, $inputArray);
            }

            print_r(findMissingNumber(array(1, 2, 3, 6, 7, 8)));
            echo '<br><br>';
            print_r(findMissingNumber(array(15, 1, 2, 11, 9, 5)));

            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to find three numbers from an array such that
            the sum of three consecutive numbers equal to zero.
          </div>
          <div>
            <?php
            function three_Sum_zero($arr)
            {
              $count = count($arr) - 2;
              $result = [];
              for ($x = 0; $x < $count; $x++) {
                if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] == 0) {
                  array_push($result, "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = 0");
                }
              }
              return $result;
            }
            echo print_r($nums1 = array(-1, 0, 1, 2, -1, -4));
            echo '<br>';
            echo print_r(three_Sum_zero($nums1));
            echo '<br>';
            echo print_r($nums2 = array(-2, 0, 2, -3, 2, 4, 8, 10));
            echo '<br>';
            echo print_r(three_Sum_zero($nums2));
            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to compute and return the square root of a given
            number.
          </div>
          <div>
            <?php
            function squareNum($num)
            {
              return sqrt($num);
            }
            echo '25';
            echo '<br>';
            echo squareNum(25);

            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to find the single element in an array where
            every element appears three times except for one.
          </div>
          <div>
            <?php
            function findUniqueElement($input)
            {
              $output = 0;

              foreach ($input as $value) {
                $findCounter = 0;

                for ($i = 0; $i < count($input); $i++) {
                  if ($input[$i] === $value) {
                    $findCounter++;
                  }
                }

                if ($findCounter === 1) {
                  // echo $value . ' found ' . $findCounter . ' time '. PHP_EOL;
                  $output = $value;
                  break;
                } else {
                  // echo $value . ' found ' . $findCounter . ' times '. PHP_EOL;
                }
              }

              return $output;
            }
            echo '[5, 3, 3, 5, 5, 3, 2, 2, 4]';
            echo '<br>';
            echo findUniqueElement([5, 3, 3, 5, 5, 3, 2, 2, 4]);

            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to check whether a sequence of numbers is an
            arithmetic progression or not.
          </div>
          <div>
            <?php
            function is_arithmetic($arr)
            {
              $delta = $arr[1] - $arr[0];
              for ($index = 0; $index < sizeof($arr) - 1; $index++) {
                if (($arr[$index + 1] - $arr[$index]) != $delta) {

                  return "Not an arithmetic sequence";
                }
              }
              return "An arithmetic sequence";
            }
            echo print_r($my_arr1 = array(6, 7, 9, 11));
            echo '<br>';
            echo print_r(is_arithmetic($my_arr1) . "\n");
            echo '<br>';
            echo print_r($my_arr2 = array(5, 7, 9, 11));
            echo '<br>';
            echo print_r(is_arithmetic($my_arr2) . "\n");
            ?>
          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to reverse the bits of an integer (32 bits
            unsigned).
          </div>
          <div>
            <?php
            function reverse_integer($n)
            {
              $result = 0;
              for ($i = 0; $i < 32; $i++) {
                $result <<= 1;
                $result |= ($n & 1);
                $n >>= 1;
              }
              return $result;
            }
            echo '(1234) <br>';

            echo print_r(reverse_integer(1234) . "\n");
            ?>

          </div>
        </li>
        <li class="list-group-item border-bottom">
          <div>
            Write a PHP program to add the digits of a positive integer
            repeatedly until the result has a single digit.
          </div>
          <div> <?php
                function add_digits($num)
                {
                  if ($num > 0) {
                    return ($num - 1) % 9 + 1;
                  } else {
                    return 0;
                  }
                }
                echo '(48)';
                echo print_r(add_digits(48));
                echo '<br>';
                echo '(59)';
                echo print_r(add_digits(59));
                ?>
          </div>
        </li>
      </div>
    </div>
  </div>



</body>

</html>