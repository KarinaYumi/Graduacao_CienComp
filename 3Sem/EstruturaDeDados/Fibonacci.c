#include <stdio.h>

int fibonacci(int n);
int fibonacci_aux(int n);

int main() {

  for (int i = 0; i < 10; ++i) {
    printf("%d ", fibonacci(i));
  }
  return 0;
}

int fibonacci(int n) {
  if (n <= 0) {
    return 0;
  } else if (n == 1) {
    return 1;
  } else {
    return fibonacci_aux(n - 1) + fibonacci_aux(n - 2);
  }
}

int fibonacci_aux(int n) {
  if (n <= 0) {
    return 0;
  } else if (n == 1) {
    return 1;
  } else {
    return fibonacci(n - 1) + fibonacci(n - 2);
  }
}
