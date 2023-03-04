
 paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '1999'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost:8080/Gokul/cnfmpayment.php")
        })
    },
    onCancel: function (data) {
        window.history.back()
    }
}).render('#paypal-payment-button');