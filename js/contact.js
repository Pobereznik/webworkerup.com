jQuery(document).ready(function ($) {
    $('body').on('click', '.email+button', function (event) {
        event.preventDefault();
        navigator.clipboard.writeText($(this).prev().html())
            .then(function(){
                var b = $(".email+button");
                b.addClass('green');
                b.html("Скопировано");

                setTimeout(function(block){
                    block.html('Копировать почту');
                    b.removeClass('green');
                }, 1000, b);
            });
    }).on('click', 'a[data-contact]', function () {
        var btn = $(this);

        send({
            hash: $('body').data('hash'),
            type: btn.data('contact'),
            button: btn.data('number')
        });
    }).on('submit', 'form[data-contact]', function (event) {
        event.preventDefault();

        var form = $(this);

        send({
            hash: $('body').data('hash'),
            type: form.data('contact'),
            button: form.data('number'),
            details: {
                name: form.find('input[name=name]').val(),
                email: form.find('input[name=email]').val()
            }
        });

        $('#works_details').modal();

        return false;
    });

    function send(data) {
        $.ajax({
            url: '/contact.php',
            data: data,
            dataType: 'text',
            type: 'post'
        });
    }
});