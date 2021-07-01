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
                this.message ='Veuillez entrer un chiffre entre 0 et 100'
            }
        }
    }
});

var app3 =  new Vue({
    el: '#app3',
    data:{
        num1: '',
        num2: '',
        operator: '',
        result: ''
    },
    methods: {
        calc: function (){

        }
    }
});