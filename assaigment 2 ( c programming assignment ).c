// #################################################### Question #######################################################

The following assignment is about using String Handling in C programming. You need
to do the validations requested using required In-Built Functions.

Question: Password Validation

Write a function that takes a password as a parameter, checks the password for its strength and returns
an integer ranking from range 0-9 where 9 being the strongest password and 0 being the weakest
password. The function must check for the following conditions.
1. Password must be minimum of 8 characters, else it is considered weak and can be ranked 0.
2. Password must have one Uppercase Character
3. Password must have three Lowercase Characters
4. Password must have one symbol
5. Password must have three Numeric Characters that are not sequential

Conditions:

• Satisfying all the above conditions can return 9 (strongest password)
• Satisfying none of the conditions above returns 0 (weakest password)
• Have a score for each condition and accordingly calculate the final rank.
• The function must return the rank as an integer which can the be checked in the main function.
Function Prototype:

int check_password(char  *password);

// ##################################################### Answer ######################################################

#include <stdio.h>
#include <string.h>
#include <ctype.h>

int is_seq(char a, char b, char c) {
    return (b == a + 1 && c == b + 1);
}

int check_password(char *password) {
    int length = strlen(password);
    int upper = 0, lower = 0, symbol = 0;
    int digit_count = 0;
    char digits[100];
    int score = 0;

    // Condition 1: Length check
    if (length < 8) {
        return 0;
    } else {
        score += 2;
    }

    // Loop through each character to analyze content
    for (int i = 0; i < length; i++) {
        if (isupper(password[i])) {
            upper = 1;
        } else if (islower(password[i])) {
            lower++;
        } else if (isdigit(password[i])) {
            digits[digit_count++] = password[i];
        } else if (!isalnum(password[i])) {
            symbol++;
        }
    }

    // Condition 2: At least one uppercase
    if (upper) score += 2;

    // Condition 3: At least three lowercase letters
    if (lower >= 3) score += 1;

    // Condition 4: At least one symbol
    if (symbol > 0) score += 2;

    // Condition 5: At least 3 non-sequential digits
    if (digit_count >= 3) {
        int seq = 0;
        for (int i = 0; i < digit_count - 2; i++) {
            if (is_seq(digits[i], digits[i + 1], digits[i + 2])) {
                seq = 1;
                break;
            }
        }
        if (!seq) {
            score += 2;
        }
    }

    return score;
}

// Sample main to test
int main() {
    char password[100];
    printf("Enter password: ");
    scanf("%s", password);

    int rank = check_password(password);
    printf("Password strength rank: %d\n", rank);

    return 0;
}
