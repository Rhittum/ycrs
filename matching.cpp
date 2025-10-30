#include <iostream>
#include <string>

using namespace std;

int main()
{
    string s1 = "aabaaab";
    string s2 = "aaaa";
    int size1 = 7;
    int size2 = 2;
    bool res = false;pppppppppp
    if(size2 > size1)
    {
        res = false;
    }
    for(int i = 0 ; i < size2 ; i++)
    {
        if(s2[i] != '.')
        {
            for(int j = 0 ; j < size1 ; j++)
            {
                if(s1[j] == s2[i])
                {
                    res = true;
                }
            }
        }
        if(s2[i] == '.')
        {
            res = true;
        }
        if(s2[i] == '*')
        {
            for(int j = 0 ; j < size1 ; j++)
            {
                if(s1[j] == s1[i-1])
                {
                    j++;
                    res = true;
                }
            }
        }
    }
    cout << " result is : " << res;

    return 0;
}