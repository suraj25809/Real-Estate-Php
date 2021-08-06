$(function(){
	
	/* Morris Area Chart */
	
	window.mA = Morris.Area({
	    element: 'morrisArea',
	    data: [
	        { y: '2013', a: 60, b: 80 },
	        { y: '2014', a: 100, b: 120 },
	        { y: '2015', a: 240, b: 120 },
	        { y: '2016', a: 120, b: 140 },
	        { y: '2017', a: 80, b: 100 },
	        { y: '2018', a: 100, b: 120 },
	        { y: '2019', a: 60, b: 80 },
	    ],
	    xkey: 'y',
	    ykeys: ['a', 'b'],
	    labels: ['Sales', 'Profit'],
	    lineColors: ['#2962ff', '#bbb'],
	    lineWidth: 0,
     	fillOpacity: 0.5,
	    gridTextSize: 10,
	    hideHover: 'auto',
	    resize: true,
		redraw: true
	});
	
	/* Morris Line Chart */
	
	window.mL = Morris.Line({
	    element: 'morrisLine',
	    data: [
	        { y: '2015', a: 100, b: 30, c:50 },
	        { y: '2016', a: 20,  b: 60,  c:100 },
	        { y: '2017', a: 90,  b: 120, c:50 },
	        { y: '2018', a: 50,  b: 80,  c:100 },
	        { y: '2019', a: 120,  b: 150,  c:50 },
	    ],
	    xkey: 'y',
	    ykeys: ['a', 'b', 'c'],
	    labels: ['Products', 'Sales', 'Customers'],
	    lineColors: ['#f90a48', '#2962ff', '#ccc'],
	    lineWidth: 1,
	    gridTextSize: 10,
	    hideHover: 'auto',
	    resize: true,
		redraw: true
	});
	$(window).on("resize", function(){
		mA.redraw();
		mL.redraw();
	});

});