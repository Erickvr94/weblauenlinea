Owl2RowsConfig = function (item, _options) {

	//Se asigna el div Padre que tendrá el carrusel
	var el = item;

	var carousel;

	//Opciones por default
	var carouselOptions = {
					margin: 20,
					nav: true,
					dots: true,
					slideBy: 'page',
					responsive: {
					  0: {
						items: 1,
						rows: 1 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
					  },
					  768: {
						items: 2,
						rows: 3 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
					  },
					  991: {
						items: 1,
						rows: 2 //Opción no usada por Owl Carousel, esta se usa en el algoritmo personalizado
					  }
					}
				  };
				  
	//Seteamos las opciones si es que se las pasan como parametro al crear el objeto
	var _setCarouselOptions = function (_carouselOptions) 
	{
		if(_carouselOptions){
		console.log(_carouselOptions);
		carouselOptions.margin = _carouselOptions.margin == undefined ? carouselOptions.margin : _carouselOptions.margin;
		carouselOptions.nav = _carouselOptions.nav == undefined ? carouselOptions.nav : _carouselOptions.nav;
		carouselOptions.dots = _carouselOptions.dots == undefined ? carouselOptions.dots : _carouselOptions.dots;
		carouselOptions.slideBy = _carouselOptions.slideBy == undefined ? carouselOptions.slideBy : _carouselOptions.slideBy;
		carouselOptions.responsive = _carouselOptions.responsive == undefined ? carouselOptions.responsive : _carouselOptions.responsive;
		}
		else{
			console.log("No hay opciones");
		}
	}		

	//Ejecutamos la función para setear las nuevas opciones
	_setCarouselOptions(_options);	

		//Se calcula el tamaño del viewport igual que lo hace Owl Carousel
		var viewport = function() {
			var width;
			if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
			  width = $(carouselOptions.responsiveBaseElement).width();
			} else if (window.innerWidth) {
			  width = window.innerWidth;
			} else if (document.documentElement && document.documentElement.clientWidth) {
			  width = document.documentElement.clientWidth;
			} else {
			  console.warn('Can not detect viewport width.');
			}
			return width;
		};

		var severalRows = false;
		var orderedBreakpoints = [];
			for (var breakpoint in carouselOptions.responsive) 
			{
				if (carouselOptions.responsive[breakpoint].rows > 1) 
				{
				  severalRows = true;
				}
				orderedBreakpoints.push(parseInt(breakpoint));
			}

		
			/*
				severalRows será true si en las propiedades del responsive existe el campo rows
			*/
			if (severalRows) 
			{
				orderedBreakpoints.sort(function (a, b) {
				  return b - a;
				});
				var slides = el.find('[data-slide-index]');
				var slidesNb = slides.length;
				if (slidesNb > 0) 
				{
				  var rowsNb;
				  var previousRowsNb = undefined;
				  var colsNb;
				  var previousColsNb = undefined;

				  //Calcula el numero de filas y columnas
				  var updateRowsColsNb = function () {
					var width =  viewport();
					for (var i = 0; i < orderedBreakpoints.length; i++) {
					  var breakpoint = orderedBreakpoints[i];
					  if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
						var breakpointSettings = carouselOptions.responsive['' + breakpoint];
						rowsNb = breakpointSettings.rows;
						colsNb = breakpointSettings.items;
						break;
					  }
					}
				  };

				  var updateCarousel = function () {
					updateRowsColsNb();
					// El carrusel se vuelve a calcular si y solo si se solicita un cambio en el número de columnas / filas
					if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
					  var reInit = false;
					  if (carousel) {
						//Si existe una instancia antes, se destruye antes de iniciar una nueva
						carousel.trigger('destroy.owl.carousel');
						carousel = undefined;
						slides = el.find('[data-slide-index]').detach().appendTo(el);
						el.find('.fake-col-wrapper').remove();
						reInit = true;
					  }


					  //Primero calcula la cantidad de columnas necesarias para todo el carrusel
					  var perPage = rowsNb * colsNb;
					  var pageIndex = Math.floor(slidesNb / perPage);
					  var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));

					  //Se crea el HTML para cada elemento
					  var count = 0;
					  for (var i = 0; i < fakeColsNb; i++) {
						var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
						for (var j = 0; j < rowsNb; j++) {
						  //Para cada fila se calcula su tamaño
						  var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
						  if (index < slidesNb) {
							//Los divs estan ordenados e identificados por la propiedad data-slide-index
							slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
						  }
						  count++;
						}
					  }


					  previousRowsNb = rowsNb;
					  previousColsNb = colsNb;

					  if (reInit) {
						carousel = el.owlCarousel(carouselOptions);
					  }
					}
				  };

				  //Se agrega la función updateCarousel al evento resize, para cada cambio de tamaño
				  //Se va a disparar automaticamente la función.
				  $(window).on('resize', updateCarousel);
					
				  //Lanzamos una vez la función para iniciar.
				  updateCarousel();
				}
			}

	//Iniciamos el carrusel
	carousel = el.owlCarousel(carouselOptions);
}