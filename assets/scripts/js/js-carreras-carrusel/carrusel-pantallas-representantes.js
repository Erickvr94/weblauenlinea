
$(document).ready(function() {
//CARRUSEL 1
var itemRepresentantes1 =  $('#representantes1');
var _optionsRepresentantes1 = {
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

var owl2Rows1 = new Owl2RowsConfig(itemRepresentantes1,_optionsRepresentantes1);




//CARRUSEL 2
var itemRepresentantes2 =  $('#representantes2');
var _optionsRepresentantes2 = {
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
				items: 2,
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
			1010: {
				items: 3,
				rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
			}
			}
  };
var owl2RowsRepresentantes2 = new Owl2RowsConfig(itemRepresentantes2,_optionsRepresentantes2);





});
