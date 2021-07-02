var app1 = new Vue({
    el: '#app-1',
    data: {
        num1: '',
        num2: ''
    }
});

var app2 = new Vue({
    el: '#app-2',
    data: {
        num: '0',
        answer: 67,
        message: 'Veuillez entrer un chiffre entre 0 et 100'
    },
    methods: {
        check: function (num) {
            if (0 <= num && num <= 100) {
                if (num == this.answer) {
                    this.message = 'Bravo!!!'
                } else {
                    if (num < this.answer) {
                        if (this.answer - num > 10)
                            this.message = 'Trop petit'
                        else {
                            this.message = 'un peu petit'
                        }
                    } else if (num > this.answer) {
                        if (num - this.answer > 10)
                            this.message = 'Trop grand'
                        else {
                            this.message = 'un peu grand'
                        }
                    }
                }
            } else {
                this.message = 'Veuillez entrer un chiffre entre 0 et 100'
            }
        }
    }
});

var app3 = new Vue({
    el: '#app-3',
    data: {
        operand1: '0',
        operand2: '0',
        operator: null,
        result: null,
        display: '0'
    },
    methods: {
        calculate: function () {
            if (!this.result) {
                switch (this.operator) {
                    case '+' :
                        this.result = parseFloat(this.operand1) + parseFloat(this.operand2);
                        this.display = parseFloat(this.result);
                        break;

                    case '-' :
                        this.result = parseFloat(this.operand1) - parseFloat(this.operand2);
                        this.display = parseFloat(this.result);
                        break;

                    case '*' :
                        this.result = parseFloat(this.operand1) * parseFloat(this.operand2);
                        this.display = parseFloat(this.result);
                        break;

                    case '/' :
                        this.result = parseFloat(this.operand1) / parseFloat(this.operand2);
                        this.display = parseFloat(this.result);
                        break;
                    default:

                }
            } else {
                    switch (this.operator) {
                        case '+' :
                            this.result += parseFloat(this.operand2);
                            this.display = parseFloat(this.result);
                            break;

                        case '-' :
                            this.result -= parseFloat(this.operand2);
                            this.display = parseFloat(this.result);
                            break;

                        case '*' :
                            this.result *= parseFloat(this.operand2);
                            this.display = parseFloat(this.result);
                            break;

                        case '/' :
                            this.result /= parseFloat(this.operand2);
                            this.display = parseFloat(this.result);
                            break;
                        default:
                    }
                }
            }
        ,
            number: function (num) {
                if (!this.operator) {
                    this.operand1 += num;
                    this.display = parseFloat(this.operand1);
                } else {
                    if (!this.result) {
                        this.operand2 += num;
                        this.display = parseFloat(this.operand2);
                    } else {
                        this.operand1 = this.result;
                        this.result = null;
                        this.operand2 = '0';
                        this.operand2 += num;
                        this.display = parseFloat(this.operand2);
                    }
                }
            }
        ,
            setOperator: function (operator) {
                this.operator = operator;
                this.display = this.operator;
            }
        ,
            reset: function () {
                this.operator = null;
                this.operand1 = '0';
                this.operand2 = '0';
                this.result = null;
                this.display = '0';
            }
        }
    });
var app4 = new Vue({
    el: '#app-4',
    data:{
        seen: true
    },
    methods: {
        show: function () {
            this.seen = !this.seen;
        }
    }
});