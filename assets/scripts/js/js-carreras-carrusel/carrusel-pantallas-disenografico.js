//CARRERA DE DISEÑO GRÁFICO
$(document).ready(function() {
//CARRUSEL 1
var itemDisenografico1 =  $('#disenografico1');
var _optionsDisenografico1 = {
						margin: 20,
						nav: true,
						dots: true,
						slideBy: 'page',
						responsive: {
						  0: {
							items: 1,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  460: {
							items: 1,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  560: {
							items: 1,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  660: {
							items: 3,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						 },
						  750: {
							items: 3,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  },
						  1100: {
							items: 4,
							rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
						  }
						}
					  };

var owl2RowsDisenografico1 = new Owl2RowsConfig(itemDisenografico1,_optionsDisenografico1);




});
