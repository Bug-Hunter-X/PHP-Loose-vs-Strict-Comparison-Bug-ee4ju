function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

function bar(){
  $a = 1;
  $b = "1";
  if (foo($a, $b)){
    echo "same";
  } else {
    echo "different";
  }
}

bar(); // Outputs "different"