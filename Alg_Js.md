# algoritmo 56
### Entrar com nome e idade. Imprimir a seguinte saída:
* nome:
* idade:
```JavaScript
function obterInformacoes() {
    const nome = prompt("Digite o nome:");
    const idade = prompt("Digite a idade:");

    console.log("\n");
    console.log("nome =", nome);
    console.log("idade =", idade);
}
obterInformacoes();
```
*** 

# algoritmo 57
### Entrar com as notas da PR 1 e PR2 e imprimir a média final:
* truncada:
* arredondada: 
```JavaScript
function calcularMedia() {
    const pri = parseFloat(prompt("Digite a nota da PR1:"));
    const pr2 = parseFloat(prompt("Digite a nota da PR2:"));
    const mf = (pri + pr2) / 2;
    const mediaTruncada = Math.floor(mf); 
    const mediaArredondada = Math.round(mf); 
    
    console.log("\nmédia truncada =", mediaTruncada);
    console.log("média arredondada =", mediaArredondada);
}
calcularMedia();
```
***

# algoritmo 69
### Criar um algoritmo que leia o numerador e o denominador de uma fração e transformá-lo em um número decimal. 
```JavaScript
function converterFacaoEmDecimal() {
    const num = parseFloat(prompt("Digite o numerador:")); 
    const denom = parseFloat(prompt("Digite o denominador:")); 
    if (denom === 0) {
        console.log("Erro: Denominador não pode ser zero.");
    } else {
        const decimal = num / denom; 
        console.log("Decimal: ", decimal); 
    }
}
converterFacaoEmDecimal();
```
***

# algoritmo 70
### Todo restaurante embora por lei não possa obrigar o cliente a pagar, cobra 10% para o garçom. Fazer um algoritmo que leia o valor gasto com despesas realizadas em um restaurante e imprima o valor total com a gorjeta.
```JavaScript
function calcularValorComGorjeta() {
    const cres = parseFloat(prompt("Entre com o valor da conta:")); 
    const cgorj = cres * 1.10;
    console.log("\nO valor da conta com a gorjeta será: ", cgorj.toFixed(2)); 
}
calcularValorComGorjeta();
``` 
***

# algoritmo 71
### Criar um algoritmo que leia um valor de hora e informe quantos minutos se pas - saram desde o iníciõ do dia. 
```JavaScript
function calcularMinutosDesdeInicioDoDia() {
    const hora = parseInt(prompt("Entre com a hora atual (0-23):"), 10);
    const minuto = parseInt(prompt("Entre com os minutos (0-59):"), 10); 

    if (hora < 0 || hora > 23 || minuto < 0 || minuto > 59) {
        console.log("Erro: Hora ou minuto inválido.");
        return;
    }

    const tminuto = hora * 60 + minuto; 
    console.log("\nAté agora se passaram: ", tminuto, " minutos");
}
calcularMinutosDesdeInicioDoDia();
```
***
# algoritmo 72
### Criar um algoritmo que leia o valor de um depósito e o valor da taxa de juros. Calcular e imprimir o valor do rendimento e o valor total depois do rendimento.
```JavaScript
function calcularRendimento() {
    const deposito = parseFloat(prompt("Qual o valor do depósito:")); 
    const taxa = parseFloat(prompt("Qual a taxa de juros:")); 
    const valor = deposito * taxa / 100; 
    const total = deposito + valor; 

    console.log("\nRendimentos: ", valor); 
    console.log("Total: ", total); 
}
calcularRendimento();
```
***

# algoritmo 84
### Ler um número e imprimir se ele é par ou ímpar. 
```JavaScript
function verificarParImpar() {
    const a = parseInt(prompt("Digite o número:"));
    if (a % 2 === 0) {
        console.log("\nPAR");
    } else {
        console.log("\nIMPAR");
    }
    console.log("\n");
}
verificarParImpar();
```
***

# algoritmo 98
### A prefeitura do Rio de Janeiro abriu uma linha de crédito para os funcionários estatutários. O valor máximo da prestação não poderá ultrapassar 30% do salário bruto Fazer um algoritmo que permita entrar com o salário bruto e o valor da prestação e informar se o empréstimo pode ou não ser concedido. 

```JavaScript
function verificarEmprestimo() {
    const sb = parseFloat(prompt("Digite o salário bruto:"));
    const vp = parseFloat(prompt("Digite o valor da prestação:"));

    if (vp <= 0.3 * sb) {
        console.log("\nEmpréstimo concedido");
    } else {
        console.log("\nEmpréstimo negado");
    }

    console.log("\n");
}
verificarEmprestimo();
```
***

# algorimo 178
### Imprimir o quadrado dos numeros de 1 ate 20.
```JavaScript
function imprimirQuadrados() {
    for (let c = 1; c <= 20; c++) { 
        const quadrado = c ** 2; 
        console.log(c + " ao quadrado é: " + quadrado);
    }
}
imprimirQuadrados();
```
***

# algoritmo 484
### Criar uma função que receba um vetor de inteiros e seu tamanho e retorne o menor dos elementos do vetor. 
```JavaScript
function menorElemento(vet) {
    let menor = vet[0]; 

    for (let i = 1; i < vet.length; i++) {
        if (vet[i] < menor) {
            menor = vet[i]; 
        }
    }
    return menor;
}

function main() {
    const num = [123, 45, 67, 12, 78, 90, 36, 67, 125, 35]; 

    console.log("VETOR:");
    console.log(num.join(", ")); 

    const menor = menorElemento(num); 
    console.log("\nMENOR ELEMENTO:", menor); 
}
main();
```