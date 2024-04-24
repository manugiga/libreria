
$('.ver-mas-btn').click(function() {
    var idLibro = $(this).data('id'); 
  
    $.ajax({
      url: '/libreria/Views/admin/crudlibros/detalledescarga.php',
      method: 'POST',
      data: { id: idLibro },
      success: function(response) {
        $('#detallesLibro').html(response);
        $('#modalDetalles').modal('show');
      }
    });
  });
  