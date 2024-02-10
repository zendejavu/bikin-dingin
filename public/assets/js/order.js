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
        let user_id = $('.modal').data('user');
        if (!user_id) {
            $('#orderModal').modal('hide');
            // $('.modal-backdrop').removeClass('modal-backdrop');
            $('.fade').removeClass('fade');
            // $('.in').removeClass('in');

            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
            Swal.fire({
                title: "Permintaan Login",
                text: "Mohon maaf Anda belum login.",
                icon: "info",
                showDenyButton: true,
                confirmButtonColor: "#3085d6",
                denyButtonColor: "#3085d6",
                confirmButtonText: `<i class="fa-solid fa-right-to-bracket me-2"></i>Login`,
                denyButtonText: `<i class="fa-solid fa-user-plus me-2"></i>Daftar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    location.replace("login");
                } else if (result.isDenied) {
                    location.replace("register");
                }
            });
        } else {
            $('#orderModal').modal('show');
            $('.modal-title').html($(this).attr('data-order'));
        }

        let device_id = $(this).data('device');
        let alamat = $(this).data('alamat');
        let harga = $(this).data('harga');
        let token = $("meta[name='csrf-token']").attr("content");
        $("#devices").val(device_id).change();
        $("#address").val(alamat);
        $("#price").val(harga);
        $('#nilai').text('Biaya Service : IDR. ' + (harga).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        // console.log('user_id = ', user_id);
        // console.log('device_id = ', device_id);
        // console.log('alamat = ', alamat);
        console.log('harga = ', harga);

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
                        $("#problems").append(`<option value='${el.id}'> ${el.problem}</option>`);
                    });
                }
            }
        });

        $('#submit').on('click', function () {
            let problem_id = $('#problems').find('option:selected').val();
            let address = $("#address").val();
            let work_date = $("#work_date").val();
            let note = $("#notes").val();
            let price = $("#price").val();
            console.log(price);

            $.ajax({
                type: "POST",
                url: "/order",
                data: {
                    'perangkat': device_id,
                    'jenis_kerusakan': problem_id,
                    'alamat': address,
                    'tanggal_pengerjaan': work_date,
                    'catatan': note,
                    'harga': price,
                    '_token': token
                },
                success: function (data) {
                    console.log(data);
                    // console.log(data.data.id);
                    // sukses(data.message);
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    setTimeout(function () {
                        // location.reload();
                        location.replace("invoice/" + data.data.id);
                    }, 3500);
                },
                error: function (error) {
                    console.log(error.responseJSON.errors);
                    //Validasi
                    if (error.responseJSON.errors['jenis_kerusakan']) {
                        $('#problems-feedback').addClass('d-block');
                        $('#problems').addClass('is-invalid');
                        $('#problems-feedback').html(error.responseJSON.errors['jenis_kerusakan']);
                    } else {
                        $('#problems-feedback').removeClass('d-block');
                        $('#problems').removeClass('is-invalid');
                    }

                    if (error.responseJSON.errors['alamat']) {
                        $('#address-feedback').addClass('d-block');
                        $('#address').addClass('is-invalid');
                        $('#address-feedback').html(error.responseJSON.errors['alamat']);
                    } else {
                        $('#address-feedback').removeClass('d-block');
                        $('#address').removeClass('is-invalid');
                    }

                    if (error.responseJSON.errors['tanggal_pengerjaan']) {
                        $('#work_date-feedback').addClass('d-block');
                        $('#work_date').addClass('is-invalid');
                        $('#work_date-feedback').html(error.responseJSON.errors['tanggal_pengerjaan']);
                    } else {
                        $('#work_date-feedback').removeClass('d-block');
                        $('#work_date').removeClass('is-invalid');
                    }

                    if (error.responseJSON.errors['catatan']) {
                        $('#notes-feedback').addClass('d-block');
                        $('#notes').addClass('is-invalid');
                        $('#notes-feedback').html(error.responseJSON.errors['catatan']);
                    } else {
                        $('#notes-feedback').removeClass('d-block');
                        $('#notes').removeClass('is-invalid');
                    }

                    // $('#formOrder')[0].reset();

                }

            });

        });
    });
});
