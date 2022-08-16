$('document').ready(() => {
  $('#modal1').modal('toggle');

  $('#modal1').on('hide.bs.modal', () => {
    $('#modal2').modal('show');
  });
});
