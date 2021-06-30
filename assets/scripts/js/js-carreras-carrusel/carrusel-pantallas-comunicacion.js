//CARRERA DE COMUNICACIÓN 
$(document).ready(function() {
//CARRUSEL 1
var itemComunicacion1 =  $('#comunicacion1');
var _optionsComunicacion1 = {
						margin: 20,
						nav: true,
						dots: true,
						slideBy: 'page',
						responsive: {
						  0: {
							items: 1,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  450: {
							items: 2,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  600: {
							items: 3,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  700: {
							items: 3,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						 },
						  800: {
							items: 4,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  1100: {
							items: 5,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  }
						}
					  };

var owl2RowsComunicacion1 = new Owl2RowsConfig(itemComunicacion1,_optionsComunicacion1);




//CARRUSEL 2
var itemComunicacion2 =  $('#comunicacion2');
var _optionsComunicacion2 = {
			margin: 20,
			nav: true,
			dots: true,
			slideBy: 'page',
			responsive: {
			0: {
				items: 1,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			},
			450: {
				items: 2,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			  },
			  600: {
				items: 3,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			  },
			  700: {
				items: 3,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			 },
			  800: {
				items: 4,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			  },
			  1100: {
				items: 5,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			  }
		}
  };
var owl2RowsComunicacion2 = new Owl2RowsConfig(itemComunicacion2,_optionsComunicacion2);




});
