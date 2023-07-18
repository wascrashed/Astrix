$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#auth__form").submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Загрузка данных',
        html: 'Пожалуйста подождите',
        timer: 500,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
        }
    })
    $.ajax({
        url: '/auth/login',
        type: 'post',
        data: {
            nickname: $('#nickname').val(),
            password: $('#password').val()
        },
        success: function (data) {
            var data = JSON.parse(data);
            if (data.success) {
                window.location.replace(data.uri)
            } else {
                Swal.fire(
                    'Ошибка',
                    data.message,
                    'error'
                )
            }
        }
    });
});

$(".donate-icon").click(function() {
    $('#donateEconomyModal').css('display', 'flex');
});

$("#close-modal").click(function() {
    $('#donateEconomyModal').css('display', 'none');
});

$(".tab").click(function(e) {
    $(".tab.active").removeClass('active');
    $(this).addClass('active');
});
