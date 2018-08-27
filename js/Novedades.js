var novedades = [
    {
       Libreta:'Marca: '+ 'Scribe',
       Libreta2: 'Marca: '+ 'Scribe',
       Libreta3: 'Marca: '+ 'Scribe',
       Libreta4: 'Marca: '+ 'Scribe'
    },
    {
        Libreta:'GR: '+ '100H',
        Libreta2:'GR: '+ '100H',
        Libreta3:'GR: ' + '150H',
        Libreta4:'GR: '+ '200H'
    },
    {
        Libreta:'Precio '+'$15.50',
        Libreta2:'Precio '+'$15.00',
        Libreta3:'Precio '+ '$150.00',
        Libreta4:'Precio '+ '$20.00'
    }
    
];

var Ofertas = [
	{
       Oferta:'Marca: '+ 'Scotch',
       Oferta1: 'Marca: '+ 'Acco',
       Oferta2: 'Marca: '+ 'Scribe',
       Oferta3: 'Marca: '+ 'Post-it'
    },
    {
       Oferta:'Descripcion: '+ 'Cinta',
       Oferta1:'Descripcion: '+ 'Sujetador',
       Oferta2:'Descripcion: '+ 'Desgrapador',
       Oferta3:'Descripcion: '+ 'Notas'
    },
    {
       Oferta:'Precio: '+ '$10.00',
       Oferta1: 'Precio: '+ '$10.00',
       Oferta2: 'Precio: '+ '$59.90',
       Oferta3: 'Precio: '+ '$15.00'
    }
	
];

var table = document.getElementById('tablaNuv');

for(var i = 0; i < novedades.length;i++){
	
	var renglon = table.insertRow(1+i);
	var colMarca = renglon.insertCell(0);
	colMarca.textContent = novedades[i].Libreta;
	var colDes = renglon.insertCell(1);
	colDes.textContent = novedades[i].Libreta2;
	var colPre = renglon.insertCell(2);
	colPre.textContent = novedades[i].Libreta3;
    var colLib4 = renglon.insertCell(3)
    colLib4.textContent = novedades[i].Libreta4;
    
}

var tabla = document.getElementById('tablaOfe');

for(var i = 0; i < Ofertas.length;i++){
	
	var reng = tabla.insertRow(1+i);
	var coloft = reng.insertCell(0);
	coloft.textContent = Ofertas[i].Oferta;
    var coloft1 = reng.insertCell(1);
	coloft1.textContent = Ofertas[i].Oferta1;
	var coloft2 = reng.insertCell(2);
	coloft2.textContent = Ofertas[i].Oferta2;
	var coloft4 = reng.insertCell(3);
	coloft4.textContent = Ofertas[i].Oferta3;
}
