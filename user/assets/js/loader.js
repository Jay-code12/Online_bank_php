let spinnerWrapper = document.querySelector('.loader-div');

setTimeout(() => {
  window.location.href = "index.php?id=Jordan";
}, 5000);




// const showLoading = function() {
//     swal({
//       title: 'Now loading',
//       allowEscapeKey: false,
//       allowOutsideClick: false,
//       timer: 2000,
//       onOpen: () => {
//         swal.showLoading();
//       }
//     }).then(
//       () => {},
//       (dismiss) => {
//         if (dismiss === 'timer') {
//           console.log('closed by timer!!!!');
//           swal({ 
//             title: 'Finished!',
//             type: 'success',
//             timer: 2000,
//             showConfirmButton: false
//           })
//         }
//       }
//     )
//   };
//   //showLoading();
  
//   document.getElementById("fire")
//     .addEventListener('click', (event) => {
//       showLoading();
//     });