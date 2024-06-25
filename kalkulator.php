<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .calculator {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .display {
            width: 100%;
            height: 50px;
            text-align: right;
            margin-bottom: 20px;
            padding: 10px;
            font-size: 2em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .button {
            padding: 20px;
            font-size: 1.5em;
            text-align: center;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #e0e0e0;
        }
        .button.operation {
            background-color: #ffcc00;
        }
        .button.operation:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>

<div class="calculator">
    <div id="display" class="display">0</div>
    <div class="buttons">
        <div class="button" onclick="appendNumber(7)">7</div>
        <div class="button" onclick="appendNumber(8)">8</div>
        <div class="button" onclick="appendNumber(9)">9</div>
        <div class="button operation" onclick="chooseOperation('/')">/</div>
        
        <div class="button" onclick="appendNumber(4)">4</div>
        <div class="button" onclick="appendNumber(5)">5</div>
        <div class="button" onclick="appendNumber(6)">6</div>
        <div class="button operation" onclick="chooseOperation('*')">*</div>
        
        <div class="button" onclick="appendNumber(1)">1</div>
        <div class="button" onclick="appendNumber(2)">2</div>
        <div class="button" onclick="appendNumber(3)">3</div>
        <div class="button operation" onclick="chooseOperation('-')">-</div>
        
        <div class="button" onclick="appendNumber(0)">0</div>
        <div class="button" onclick="clearDisplay()">C</div>
        <div class="button" onclick="compute()">=</div>
        <div class="button operation" onclick="chooseOperation('+')">+</div>
    </div>
</div>

<script>
    let currentNumber = '';
    let previousNumber = '';
    let operation = null;
    const display = document.getElementById('display');

    function appendNumber(number) {
        if (currentNumber.includes('.') && number === '.') return;
        currentNumber = currentNumber.toString() + number.toString();
        updateDisplay();
    }

    function updateDisplay() {
        display.innerText = currentNumber || '0';
    }

    function chooseOperation(op) {
        if (currentNumber === '') return;
        if (previousNumber !== '') {
            compute();
        }
        operation = op;
        previousNumber = currentNumber;
        currentNumber = '';
    }

    function compute() {
        let computation;
        const prev = parseFloat(previousNumber);
        const current = parseFloat(currentNumber);
        if (isNaN(prev) || isNaN(current)) return;
        switch (operation) {
            case '+':
                computation = prev + current;
                break;
            case '-':
                computation = prev - current;
                break;
            case '*':
                computation = prev * current;
                break;
            case '/':
                computation = prev / current;
                break;
            default:
                return;
        }
        currentNumber = computation;
        operation = null;
        previousNumber = '';
        updateDisplay();
    }

    function clearDisplay() {
        currentNumber = '';
        previousNumber = '';
        operation = null;
        updateDisplay();
    }
</script>

</body>
</html>
