$(document).ready(function () {
  const systemPhone = $('#systemPhone').val()

  function checkRequireFiel(id) {
    value = $(id).val()
    if (value.length === 0) {
      $(id).addClass('input-error')
      return false
    } else {
      $(id).removeClass('input-error')
      return true
    }
  }

  $('.form-control').on('keyup', function (e){
    e.preventDefault()
    $(this).removeClass('input-error')
  })

  $('#reverseTab1').on('click', function (e){
    e.preventDefault()
    const start = $('#startTab1').val()
    const end = $('#endTab1').val()
    $('#startTab1').val(end)
    $('#endTab1').val(start)
  })

  $('#reverseTab2').on('click', function (e){
    e.preventDefault()
    const start = $('#startTab2').val()
    const end = $('#endTab2').val()
    $('#startTab2').val(end)
    $('#endTab2').val(start)
  })

  $('#submitTab1').on('click', function (e) {
    e.preventDefault();
    const start = $('#startTab1').val()
    const end = $('#endTab1').val()
    const name = $('#nameTab1').val()
    const number = $('#numberPhoneTab1').val()
    const note = $('#noteTab1').val()
    checkRequireFiel('#startTab1')
    checkRequireFiel('#endTab1')
    checkRequireFiel('#nameTab1')
    checkRequireFiel('#numberPhoneTab1')
    if (checkRequireFiel('#startTab1') && checkRequireFiel('#endTab1') && checkRequireFiel('#nameTab1') && checkRequireFiel('#numberPhoneTab1')) {
      $.ajax({
        url: "/post-order",
        type: 'POST',
        data: {
          _token: $("input[name='_token']").val(),
          place_start: start,
          place_end: end,
          customer_name: name,
          number_phone: number,
          note: note,
          type: 1
        },
        success: function (data) {
          if ($.isEmptyObject(data.error)) {
            swal.fire({
              showClass: {
                popup: 'animate__animated animate__fadeInDown'
              },
              hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
              },
              title: 'Đặt xe thành công',
              html: "Cảm ơn bạn đã sử dụng dịch vụ của XENOIBAI29, Chúng tôi sẽ liên hệ với bạn sau 15 phút. Chúc bạn một ngày tốt lành!",
              icon: 'success',
              showCancelButton: true,
              cancelButtonColor: '#74d23f',
              showConfirmButton: false,
              allowOutsideClick: false,
              cancelButtonText: 'OK'
            })
          } else {
            swal.fire({
              showClass: {
                popup: 'animate__animated animate__fadeInDown'
              },
              hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
              },
              title: 'Đặt xe thất bại',
              html: "Hệ thống của chúng tôi đang quá tải <br> Bạn vui lòng gọi vào số hotline <a href='tel:" + systemPhone + "' style='outline: none'><b style='color: #dc3545; font-size: 18px'>" + systemPhone + "</b></a> để đặt xe trực tiếp",
              icon: 'error',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              showConfirmButton: false,
              allowOutsideClick: false,
              cancelButtonText: 'OK'
            })
          }
        },
        error: function (){
          swal.fire({
            showClass: {
              popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
            },
            title: 'Đặt xe thất bại',
            html: "Hệ thống của chúng tôi đang quá tải <br> Bạn vui lòng gọi vào số hotline <a href='tel:" + systemPhone + "' style='outline: none'><b style='color: #dc3545; font-size: 18px'>" + systemPhone + "</b></a> để đặt xe trực tiếp",
            icon: 'error',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            showConfirmButton: false,
            allowOutsideClick: false,
            cancelButtonText: 'OK'
          })
        }
      });

    }else{
      document.documentElement.scrollTop = 0;
    }
  })

  $('#submitTab2').on('click', function (e) {
    console.log('ok')
    e.preventDefault();
    const start = $('#startTab2').val()
    const end = $('#endTab2').val()
    const name = $('#nameTab2').val()
    const number = $('#numberPhoneTab2').val()
    const note = $('#noteTab2').val()
    if (checkRequireFiel('#startTab2') && checkRequireFiel('#endTab2') && checkRequireFiel('#nameTab2') && checkRequireFiel('#numberPhoneTab2')) {
      $.ajax({
        url: "/post-order",
        type: 'POST',
        data: {
          _token: $("input[name='_token']").val(),
          place_start: start,
          place_end: end,
          customer_name: name,
          number_phone: number,
          note: note,
          type: 2
        },
        success: function (data) {
          if ($.isEmptyObject(data.error)) {
            swal.fire({
              showClass: {
                popup: 'animate__animated animate__fadeInDown'
              },
              hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
              },
              title: 'Đặt xe thành công',
              html: "Cảm ơn bạn đã sử dụng dịch vụ của xe Nội Bài 29 <br> Chúng tôi sẽ liên hệ với bạn sau 15 phút<br> Chúc bạn một ngày tốt lành",
              icon: 'success',
              showCancelButton: true,
              cancelButtonColor: '#74d23f',
              showConfirmButton: false,
              allowOutsideClick: false,
              cancelButtonText: 'OK'
            })
          } else {
            swal.fire({
              showClass: {
                popup: 'animate__animated animate__fadeInDown'
              },
              hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
              },
              title: 'Đặt xe thất bại',
              html: "Hệ thống của chúng tôi đang quá tải <br> Bạn vui lòng gọi vào số hotline <a href='tel:" + systemPhone + "' style='outline: none'><b style='color: #dc3545; font-size: 18px'>" + systemPhone + "</b></a> để đặt xe trực tiếp",
              icon: 'error',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              showConfirmButton: false,
              allowOutsideClick: false,
              cancelButtonText: 'OK'
            })
          }
        },
        error: function (){
          swal.fire({
            showClass: {
              popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
            },
            title: 'Đặt xe thất bại',
            html: "Hệ thống của chúng tôi đang quá tải <br> Bạn vui lòng gọi vào số hotline <a href='tel:" + systemPhone + "' style='outline: none'><b style='color: #dc3545; font-size: 18px'>" + systemPhone + "</b></a> để đặt xe trực tiếp",
            icon: 'error',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            showConfirmButton: false,
            allowOutsideClick: false,
            cancelButtonText: 'OK'
          })
        }
      });

    }
  })

})
