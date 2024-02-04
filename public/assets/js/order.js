// In your Javascript (external .js resource or <script> tag)
$(document).ready(function () {

    $('#nav-ac').on('click', function () {
        $('#nav-ac').addClass('active');
        $('#nav-kulkas').removeClass('active');
        $('#nav-freezer').removeClass('active');
        $('#ac').addClass('d-block');
        $('#ac').removeClass('d-none');
        $('#kulkas').addClass('d-none');
        $('#kulkas').removeClass('d-block');
        $('#freezer').addClass('d-none');
        $('#freezer').removeClass('d-block');
    });

    $('#nav-kulkas').on('click', function () {
        $('#nav-kulkas').addClass('active');
        $('#nav-ac').removeClass('active');
        $('#nav-freezer').removeClass('active');
        $('#kulkas').addClass('d-block');
        $('#kulkas').removeClass('d-none');
        $('#ac').addClass('d-none');
        $('#ac').removeClass('d-block');
        $('#freezer').addClass('d-none');
        $('#freezer').removeClass('d-block');
    });

    $('#nav-freezer').on('click', function () {
        $('#nav-freezer').addClass('active');
        $('#nav-ac').removeClass('active');
        $('#nav-kulkas').removeClass('active');
        $('#freezer').addClass('d-block');
        $('#freezer').removeClass('d-none');
        $('#ac').addClass('d-none');
        $('#ac').removeClass('d-block');
        $('#kulkas').addClass('d-none');
        $('#kulkas').removeClass('d-block');
    });

    $('.btn-modal').on('click', function (e) {
        // e.preventDefault();
        let user_id = $('.modal').data('user');
        if (!user_id) {
            $('.modal-title').html('Informasi');
            $('.modal-title').addClass('text-danger');
            $('#loginModal').addClass('d-none')
            $('#disLoginModal').addClass('d-block')
            $('#disLoginModal').removeClass('d-none')
            $('#submit').addClass('d-none')
            $('#cancel').addClass('d-none')
            $('#login').addClass('d-block')
            $('#login').removeClass('d-none')
        } else {
            $('.modal-title').html($(this).attr('data-order'));
        }

        let device_id = $(this).data('device');
        let token = $("meta[name='csrf-token']").attr("content");
        $("#devices").val(device_id).change();
        $("#address").val("{{ $user->address }}");
        console.log('user_id = ', user_id);
        console.log('device_id = ', device_id);

        //problems option select
        $.ajax({
            url: "/problems",
            type: "POST",
            data: {
                'perangkat': device_id,
                '_token': token
            },
            success: function (response) {
                if (response.length > 0) {
                    $("#problems").append(`<option value=''> Pilih Jenis Kerusakan</option>`);
                    response.forEach(el => {
                        $("#problems").append(`<option value='${el.id}'> ${el.problems}</option>`);
                    });
                }
            },
            error: function (error) {
            }
        });

        $('#submit').on('click', function () {
            let problems_id = $('#problems').find('option:selected').val();
            let address = $("#address").val();
            let work_date = $("#work_date").val();
            let notes = $("#notes").val();

            $.ajax({
                type: "POST",
                url: "/order",
                data: {
                    'perangkat': device_id,
                    'jenis_kerusakan': problems_id,
                    'alamat': address,
                    'tanggal_pengerjaan': work_date,
                    'catatan': notes,
                    '_token': token
                },
                success: function (data) {
                    console.log(data);
                    $('.modal-title').html('Informasi');
                    $('.modal-title').addClass('text-success');
                    $('.teks').html(data.message);
                    $('.teks').addClass('text-dark fs-4');
                    $('#loginModal').addClass('d-none');
                    $('#disLoginModal').addClass('d-block');
                    $('#disLoginModal').removeClass('d-none');
                    $('#submit').addClass('d-none');
                    $('#cancel').addClass('d-none');
                    $('#sukses').addClass('d-block');
                    $('#sukses').removeClass('d-none');
                },
                error: function (error) {
                    // console.log(error.data);
                    console.log(error.responseJSON);

                    if (error.responseJSON.jenis_kerusakan[0]) {
                        $('#problems-feedback').addClass('d-block');
                        $('#problems-feedback').html(error.responseJSON.jenis_kerusakan[0]);
                    } else {
                        $('#problems-feedback').removeClass('d-block');
                    }

                    if (error.responseJSON.alamat[0]) {
                        $('#address-feedback').addClass('d-block');
                        $('#address-feedback').html(error.responseJSON.alamat[0]);
                    } else {
                        $('#address-feedback').removeClass('d-block');
                    }

                    if (error.responseJSON.tanggal_pengerjaan[0]) {
                        $('#work_date-feedback').addClass('d-block');
                        $('#work_date-feedback').html(error.responseJSON.tanggal_pengerjaan[0]);
                    } else {
                        $('#work_date-feedback').removeClass('d-block');
                    }

                    if (error.responseJSON.catatan[0]) {
                        $('#notes-feedback').addClass('d-block');
                        $('#notes-feedback').html(error.responseJSON.catatan[0]);
                    } else {
                        $('#notes-feedback').removeClass('d-block');
                    }

                    $('#formOrder')[0].reset();

                }

            });

        });
    });
});
