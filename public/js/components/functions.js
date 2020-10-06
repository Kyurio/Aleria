
$(document).ready(function(){
  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
  });
  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
    $('#myTab a[href="' + activeTab + '"]').tab('show');
  }
});


//activa el edito de texto enriquecido
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
  console.error( error );
} );
