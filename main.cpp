#include <iostream>
#include <stdlib.h>

using namespace std;


int main()
{
    int res = 1;


    while (res == 1){
    int i = 1;
    int x;
    cout << "choice a number for multiply: ";
    cin >> x;

    while(i <= 10) {
    cout << i << "x" << x << " = " << i * x << endl;
    i++;
    }


    cout << "\nDo again ? ? (y/n): ";
    char rest;
    cin >> rest;
    if (rest == 'y') {
        cout << "Sim\n";
        res = 1;

    }
    if (rest == 'n'){
        res = int(2);
        cout << "Nao\n";



    }

    }
    return 0;
    exit(0);
    system("pause");



}
