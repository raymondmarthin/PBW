const kalkulator = (operator, ...angka) => {
    switch (operator) {
        case '+':
            return angka.reduce((a, b) => a + b, 0);
        case '-':
            return angka.reduce((a, b) => a - b);
        case '*':
            return angka.reduce((a, b) => a * b, 1);
        case '/':
            return angka.reduce((a, b) => a / b);
        case '%':
            return angka.reduce((a, b) => a % b);
        default:
            return 'Operator tidak valid';
    }
};

console.log(kalkulator('+', 10, 6, 3)); 
console.log(kalkulator('-', 20, 5, 1)); 
console.log(kalkulator('*', 5, 3, 4)); 
console.log(kalkulator('/', 100, 2, 5)); 
console.log(kalkulator('%', 10, 3)); 