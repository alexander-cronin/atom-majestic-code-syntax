// arrays example
#include <iostream>
using namespace std;

void printmessage (){
  cout << "I'm a function!\n";
}


void odd (int x);
void even (int x);


int main() {

  printmessage ();

  // Conduct IT support
  std::string on_off_attempt;
  std::cout << "Hello. IT.\n";
  std::cout << "Have you tried turning it off and on again? y/n\n";
  std::cin >> on_off_attempt;

  // Check in with Jenn
  std::cout << "Oh hi Jen!\n";

  // Conduct IT support again...
  std::cout << "Hello. IT.\n";
  std::cout << "Have you tried turning it off and on again? y/n\n";
  std::cin >> on_off_attempt;

  // Check in with Roy
  std::cout << "You stole the stress machine? But that's stealing!\n";

  // Conduct IT support yet again...zzzz...
  std::cout << "Hello. IT.\n";
  std::cout << "Have you tried turning it off and on again? y/n\n";
  std::cin >> on_off_attempt;

  // declaring variables:
  int a, b;
  int result;

  // process:
  a = 5;
  b = 2;
  a = a + 1;
  result = a - b;

  // print out the result:
  cout << "The result is " << result << endl;

  string mystring;
  mystring = "This is the initial string content";
  cout << mystring << endl;
  mystring = "This is a different string content";
  cout << mystring << endl;

  int i;
    do {
      cout << "Please, enter number (0 to exit): ";
      cin >> i;
      odd (i);
    } while (i!=0);

  // terminate the program:
  return 0;
}

void odd (int x)
{
  if ((x%2)!=0) cout << "It is odd.\n";
  else even (x);
}

void even (int x)
{
  if ((x%2)==0) cout << "It is even.\n";
  else odd (x);
}
