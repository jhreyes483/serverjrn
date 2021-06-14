<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="public/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/css/fullcalendar.min.css">
   <title>Document</title>
</head>

<body>
   <script src="public/js/jquery-3.5.1.min.js"></script>
   <!-- LIBRERIA DE CALENDARIO -->
   <script src="public/js/moment.min.js"></script>
   <script src="public/js/fullcalendar.js"></script>
   <script src="public/js/es.js"></script>

   <!-- BOOTSTRAP 4.0.0-->
   <script src="public/js/popper.min.js"></script>
   <script src="public/js/bootstrap.min.js"></script>

   <!-- Modal -->
   <div class="modal fade" id="diaCalendario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="tituloEvento">Agregar titulo</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div id="descripcionEvento"></div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-success">Agregar</button>
               <button type="button" class="btn btn-success">Modificar</button>
               <button type="button" class="btn btn-danger">Borrar</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
         </div>
      </div>
   </div>


   <div class="container">
      <div class="row">
         <div class="col col-7 col">Hola
            <div id="CalendarioWeb"></div>
         </div>
      </div>
   </div>
   <script>
      $(document).ready(function() {
         $('#CalendarioWeb').fullCalendar({
            header: {
               left: 'today,prev,next,Miboton',
               center: 'title',
               right: 'month, basicWeek, basicDay, agendaWeek, agendaDay'
            },
            customButtons: {
               Miboton: {
                  text: "Boton 1",
                  click: function() {
                     alert("accion de boton");
                  }
               }
            },
            dayClick: function(date, jsEvent, view) {
               alert("valor seleccionado:" + date.format()); // dia se puede enviar a un hidden
               // pinta el dia seleccionado
               $(this).css('background-color', 'red');
               // activa modal
               $("#diaCalendario").modal();
            },
            // color de eventos
            eventSources: [{
               // eventos
               events: [{
                     title: 'Evento 1, promacion 1 a 8,000',
                     descripcion: "Desarrollo web",
                     start: '2021-04-01',
                     color: "#FF0F0",
                     textColor: "#FFFFFF",
                  },
                  {
                     title: 'Evento 2, promacion 2 a 8,005',
                     descripcion: "Reunion de requerimientos",
                     start: '2021-04-01',
                     end: '2021-04-03',
                  },
                  {
                     title: 'Evento 3, promacion 2 a 8,005',
                     start: '2021-04-04T12:30:00',
                     descripcion: "Hay una diligencia",
                     allDay: false,
                     color: "#FF0F0",
                     textColor: "#FFFFFF",
                  }
               ],
               // COLOR DEFAULT
               color: "black",
               textColor: "yellow",

            }],
            // pasa la informacion de evento al modal
            eventClick:function(calEvent, jsEvent,view ){
               $('#tituloEvento').html(calEvent.title);
               $('#descripcionEvento').html(calEvent.descripcion);
               $("#diaCalendario").modal();
            }
         });
      });
   </script>


</body>

</html>