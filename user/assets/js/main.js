//swal('welcome, $row[fullName]!', 'you successfully login in your account!', 'success');


function lifestyle(){

  swal({
      title: 'Now Processing...',
      allowEscapeKey: false,
      allowOutsideClick: false,
      timer: 9000,
      onOpen: () => {
      swal.showLoading();
    }
  });

}
  